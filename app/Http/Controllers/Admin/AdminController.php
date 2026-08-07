<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalUsers = User::count();
        $adminUsers = User::where('role', User::ROLE_ADMIN)->count();
        $verifiedUsers = User::whereNotNull('email_verified_at')->count();
        $unverifiedUsers = User::whereNull('email_verified_at')->count();
        $totalBanks = Bank::count();
        $activeBanks = Bank::active()->count();

        $recentUsers = User::latest()->take(5)->get();
        $recentBanks = Bank::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalUsers',
            'adminUsers',
            'verifiedUsers',
            'unverifiedUsers',
            'totalBanks',
            'activeBanks',
            'recentUsers',
            'recentBanks'
        ));
    }

    public function users(Request $request)
    {
        $search = $request->input('search');
        $role = $request->input('role');

        $users = User::query()
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%");
            })
            ->when($role, function ($query) use ($role) {
                $query->where('role', $role);
            })
            ->orderByRaw("FIELD(role, 'admin') DESC")
            ->latest()
            ->paginate(10);

        return view('admin.users.index', compact('users', 'search', 'role'));
    }

    public function createUser()
    {
        return view('admin.users.create');
    }

    public function storeUser(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::min(8)->symbols()],
            'role' => ['required', 'string', 'in:admin,user'],
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
            'role' => $validated['role'],
            'email_verified_at' => now(),
        ]);

        return redirect()->route('admin.users')
            ->with('success', 'User created successfully.');
    }

    public function editUser(User $user)
    {
        $adminUsersCount = User::where('role', User::ROLE_ADMIN)->count();
        return view('admin.users.edit', compact('user', 'adminUsersCount'));
    }

    public function updateUser(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'role' => ['required', 'string', 'in:admin,user'],
            'password' => ['nullable', 'confirmed', Password::min(8)->symbols()],
        ]);

        $updateData = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'role' => $validated['role'],
        ];

        if (!empty($validated['password'])) {
            $updateData['password'] = $validated['password'];
        }

        $user->update($updateData);

        return redirect()->route('admin.users')
            ->with('success', 'User updated successfully.');
    }

    public function deleteUser(User $user)
    {
        if ($user->id === auth()->id()) {
            return back()->withErrors(['error' => 'You cannot delete your own account.']);
        }

        $user->delete();

        return redirect()->route('admin.users')
            ->with('success', 'User deleted successfully.');
    }

    public function toggleVerification(User $user)
    {
        if ($user->hasVerifiedEmail()) {
            $user->email_verified_at = null;
            $message = 'User email verification revoked.';
        } else {
            $user->email_verified_at = now();
            $message = 'User email verified successfully.';
        }

        $user->save();

        return back()->with('success', $message);
    }

    public function banks(Request $request)
    {
        $search = $request->input('search');
        $status = $request->input('status');

        $banks = Bank::query()
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                    ->orWhere('code', 'like', "%{$search}%")
                    ->orWhere('website', 'like', "%{$search}%");
            })
            ->when($status !== null, function ($query) use ($status) {
                $query->where('is_active', $status === 'active' ? true : false);
            })
            ->latest()
            ->paginate(10);

        return view('admin.banks.index', compact('banks', 'search', 'status'));
    }

    public function createBank()
    {
        return view('admin.banks.create');
    }

    public function storeBank(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'code' => ['nullable', 'string', 'max:50', 'unique:banks,code'],
            'website' => ['nullable', 'string', 'max:255', 'url'],
            'logo' => ['nullable', 'image:allow_svg', 'mimes:jpeg,png,jpg,gif,svg,webp', 'max:2048'],
            'description' => ['nullable', 'string', 'max:500'],
            'is_featured' => ['nullable', 'boolean'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        // Handle file upload
        $logoPath = null;
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
        }

        Bank::create([
            'name' => $validated['name'],
            'code' => $validated['code'] ?? null,
            'website' => $validated['website'] ?? null,
            'logo' => $logoPath,
            'description' => $validated['description'] ?? null,
            'is_featured' => $request->boolean('is_featured'),
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.banks')
            ->with('success', 'Bank created successfully.');
    }

    public function editBank(Bank $bank)
    {
        return view('admin.banks.edit', compact('bank'));
    }

    public function updateBank(Request $request, Bank $bank)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'code' => ['nullable', 'string', 'max:50', 'unique:banks,code,' . $bank->id],
            'website' => ['nullable', 'string', 'max:255', 'url'],
            'logo' => ['nullable', 'image:allow_svg', 'mimes:jpeg,png,jpg,gif,svg,webp', 'max:2048'],
            'description' => ['nullable', 'string', 'max:500'],
            'is_featured' => ['nullable', 'boolean'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        // Retain existing logo path by default
        $logoPath = $bank->logo;

        // Check if a new file was uploaded
        if ($request->hasFile('logo')) {
            // Delete the old logo file if it exists
            if ($bank->logo && Storage::disk('public')->exists($bank->logo)) {
                Storage::disk('public')->delete($bank->logo);
            }

            // Store the new file
            $logoPath = $request->file('logo')->store('logos', 'public');
        }

        $bank->update([
            'name' => $validated['name'],
            'code' => $validated['code'] ?? null,
            'website' => $validated['website'] ?? null,
            'logo' => $logoPath,
            'description' => $validated['description'] ?? null,
            'is_featured' => $request->boolean('is_featured'),
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.banks')
            ->with('success', 'Bank updated successfully.');
    }

    public function deleteBank(Bank $bank)
    {
        $bank->logo && Storage::disk('public')->exists($bank->logo) ? Storage::disk('public')->delete($bank->logo) : null;
        $bank->delete();

        return redirect()->route('admin.banks')
            ->with('success', 'Bank deleted successfully.');
    }

    public function toggleBankStatus(Bank $bank)
    {
        $bank->is_active = !$bank->is_active;
        $bank->save();

        $message = $bank->is_active ? 'Bank activated successfully.' : 'Bank deactivated successfully.';

        return back()->with('success', $message);
    }
}
