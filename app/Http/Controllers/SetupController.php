<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Smalot\PdfParser\Parser;
use App\Models\Bank;

class SetupController extends Controller
{

    public function setup()
    {
        $banks = Bank::where('is_active', true)->get();
        return view('setup', compact('banks'));
    }

    public function extract(Request $request): JsonResponse
    {
        $request->validate([
            'pdf' => 'required|file|mimes:pdf|max:10240',
        ]);

        $file = $request->file('pdf');

        try {
            $parser = new Parser();
            $pdf = $parser->parseFile($file->getRealPath());
            $text = $pdf->getText();

            if (empty(trim($text))) {
                return response()->json(['message' => 'Empty PDF file or OCR required.'], 422);
            }

            $result = $this->extractMetadata($text);

            return response()->json($result);
        } catch (\Exception $exception) {
            return response()->json([
                'message' => 'Unable to parse PDF: ' . $exception->getMessage(),
            ], 422);
        }
    }

    protected function extractMetadata(string $text): array
    {
        // Normalize spaces into single spaces to remove weird PDF spaces/newlines
        $cleanText = preg_replace('/\s+/', ' ', $text);

        $institutions = [
            'Fidelity',
            'Charles Schwab',
            'Schwab',
            'Chase',
            'Bank of America',
            'Wells Fargo',
            'Morgan Stanley',
            'Vanguard',
            'US Bank',
            'Capital One',
        ];

        $institution = 'Unknown Institution';
        foreach ($institutions as $term) {
            if (stripos($cleanText, $term) !== false) {
                $institution = $term;
                break;
            }
        }

        $asOfDate = $this->extractDate($cleanText) ?? 'Unknown Date';
        $institutionType = stripos($cleanText, 'bank') !== false ? 'Bank' : 'Investment';
        $website = $this->extractWebsite($cleanText) ?? 'Unknown Website';
        $accounts = $this->extractAccounts($cleanText);

        return [
            'institution' => $institution,
            'as_of_date' => $asOfDate,
            'institution_type' => $institutionType,
            'website' => $website,
            'accounts' => $accounts,
        ];
    }

    protected function extractDate(string $text): ?string
    {
        if (preg_match('/(?:Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec)[a-z]*\s+\d{1,2}\s*[\x{2013}\x{2014}\-–]\s*((?:Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec)[a-z]*\s+\d{1,2},\s*\d{4})/ui', $text, $matches)) {
            return trim($matches[1]);
        }

        $patterns = [
            '/(?:Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec)[a-z]*\s+\d{1,2},\s*\d{4}/i',
            '/\d{1,2}\/\d{1,2}\/\d{2,4}/',
        ];

        foreach ($patterns as $pattern) {
            if (preg_match($pattern, $text, $matches)) {
                return trim($matches[0]);
            }
        }

        return null;
    }

    protected function extractWebsite(string $text): ?string
    {
        if (preg_match('/([a-z0-9\-]+\.(?:com|org|net|gov))/i', $text, $matches)) {
            return strtolower(trim($matches[1]));
        }

        return null;
    }

    protected function extractAccounts(string $text): array
    {
        $accounts = [];

        // 1. Isolate the "Accounts Included in This Report" section
        if (preg_match('/Accounts Included in This Report(.*?)Total Portfolio/is', $text, $sectionMatch)) {
            $sectionText = $sectionMatch[1];
        } else {
            $sectionText = $text;
        }

        // 2. Pre-extract category headers in the order they appear
        $categories = [];
        if (preg_match_all('/(GENERAL\s+INVESTMENTS|PERSONAL\s+RETIREMENT|EDUCATION\s*\(\d+\)\s*ACCOUNTS)/i', $sectionText, $catMatches)) {
            $categories = array_map('trim', $catMatches[1]);
        }

        /*
     * 3. Target exact account rows:
     * - Group 1: Account Name (e.g., "John W. Doe - Individual - TOD")
     * - Group 2: Account Number (e.g., "111-111111")
     * - Group 3: Ending Value (e.g., "103,351.18")
     */
        $pattern = '/([A-Za-z\s\.\-\(\)]+?)\s+(\d{3}-\d{6})\s+(?:\$?[0-9\.,]+)\s+\$?([0-9\.,]+)/i';

        if (preg_match_all($pattern, $sectionText, $matches, PREG_SET_ORDER)) {
            foreach ($matches as $index => $match) {
                $rawName = trim($match[1]);
                // $accountNumber = trim($match[2]);
                $accountNumber = preg_replace('/.(?=.{4})/', '*', trim($match[2]));
                $rawEndingValue = trim($match[3]);

                // Strip out category headers or page numbers from the account name
                $cleanName = preg_replace('/^(?:GENERAL\s+INVESTMENTS|PERSONAL\s+RETIREMENT|EDUCATION\s*\(\d+\)\s*ACCOUNTS)\s*/i', '', $rawName);
                $cleanName = preg_replace('/^\d+\s*/', '', $cleanName);
                $cleanName = trim($cleanName);

                // Skip table headers
                if (empty($cleanName) || stripos($cleanName, 'Account Type') !== false || stripos($cleanName, 'Page') !== false) {
                    continue;
                }

                // Assign category based on matching account index
                $category = $categories[$index] ?? '';

                // Standardize balance format
                $numericBalance = preg_replace('/[^\d\.]/', '', str_replace(',', '', $rawEndingValue));

                // Format name cleanly: Name (CATEGORY) (Account Number)
                $formattedName = $cleanName;
                if (!empty($category)) {
                    $formattedName .= ' (' . $category . ')';
                }
                $formattedName .= ' (' . $accountNumber . ')';

                $accounts[] = [
                    'name' => $formattedName,
                    'balance' => '$' . number_format((float)$numericBalance, 2, '.', ''),
                ];
            }
        }

        return array_values(array_unique($accounts, SORT_REGULAR));
    }
}
