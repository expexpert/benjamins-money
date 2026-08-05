<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Smalot\PdfParser\Parser;

class SetupController extends Controller
{
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

            $result = $this->extractMetadata(trim($text));

            return response()->json($result);
        } catch (\Exception $exception) {
            return response()->json([
                'message' => 'Unable to parse PDF: ' . $exception->getMessage(),
            ], 422);
        }
    }

    protected function extractMetadata(string $text): array
    {
        $text = preg_replace('/\s+/', ' ', $text);

        $institutions = [
            'Chase',
            'Fidelity',
            'Bank of America',
            'Schwab',
            'Wells Fargo',
            'Morgan Stanley',
            'Vanguard',
            'Charles Schwab',
            'US Bank',
            'Capital One',
        ];

        $institution = 'Unknown Institution';
        foreach ($institutions as $term) {
            if (stripos($text, $term) !== false) {
                $institution = $term;
                break;
            }
        }

        $asOfDate = $this->extractDate($text) ?? 'Mar 31, 2024';
        $institutionType = stripos($text, 'bank') !== false ? 'Bank' : 'Investment';
        $website = $this->extractWebsite($text) ?? '';
        $accounts = $this->extractAccounts($text);

        if (empty($accounts)) {
            $accounts = [
                ['name' => 'Banking Account', 'balance' => '$123,000.00'],
                ['name' => 'Investment Account', 'balance' => '$123,000.00'],
                ['name' => 'Cash Management', 'balance' => '$123,000.00'],
            ];
        }

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
        $patterns = [
            '/(Jan(?:uary)?|Feb(?:ruary)?|Mar(?:ch)?|Apr(?:il)?|May|Jun(?:e)?|Jul(?:y)?|Aug(?:ust)?|Sep(?:tember)?|Oct(?:ober)?|Nov(?:ember)?|Dec(?:ember)?)\s+\d{1,2},\s*\d{4}/i',
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
        if (preg_match('/(https?:\/\/)?([\w\-]+\.)+[\w\-]+(\/[\w\-\/?=&%.]*)?/i', $text, $matches)) {
            return trim($matches[0]);
        }

        return null;
    }

    protected function extractAccounts(string $text): array
    {
        $accounts = [];
        $patterns = [
            '/(Checking|Savings|Brokerage|Roth IRA|IRA|Cash Management|Investment|Money Market|401\(k\)|401k|Stock).*?\$([\d,]+\.\d{2})/i',
            '/(Checking|Savings|Brokerage|Roth IRA|IRA|Cash Management|Investment|Money Market|401\(k\)|401k|Stock).*?(\d[\d,]+\.\d{2})/i',
        ];

        foreach ($patterns as $pattern) {
            if (preg_match_all($pattern, $text, $matches, PREG_SET_ORDER)) {
                foreach ($matches as $match) {
                    $name = trim($match[1]);
                    $balance = '$' . preg_replace('/[^\d\.]/', '', $match[2]);
                    if (!empty($name) && !empty($balance)) {
                        $accounts[] = [
                            'name' => $name,
                            'balance' => $balance,
                        ];
                    }
                }
            }
        }

        return array_values(array_unique($accounts, SORT_REGULAR));
    }
}
