@extends('layouts.admin')

@section('title', 'Edit User')
@section('page-title', 'Edit User')

@section('content')
<div style="max-width: 600px;">
    <div class="admin-card">
        <div class="admin-card-header">
            <h3>Edit User: {{ $user->name }}</h3>
            <a href="{{ route('admin.users') }}" class="btn btn-secondary btn-sm">&larr; Back to Users</a>
        </div>
        <div class="admin-card-body">
            <form method="POST" action="{{ route('admin.users.update', $user) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required autofocus>
                    @error('name')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="role">User Role</label>
                    <select id="role" name="role" required @if($adminUsersCount <= 1 && $user->role === 'admin') disabled @endif>
                        <option value="user" {{ old('role', $user->role) === 'user' ? 'selected' : '' }}>User</option>
                        <option value="admin" {{ old('role', $user->role) === 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                    @error('role')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email_status">Email Status</label>
                    <div style="padding: 10px 14px; background: #f9fafb; border-radius: 6px;">
                        <div style="display: flex; justify-content: space-between; align-items: center; gap: 12px;">
                            <div>
                                @if($user->hasVerifiedEmail())
                                    <span class="badge badge-verified">Verified at {{ $user->email_verified_at->format('M d, Y H:i') }}</span>
                                @else
                                    <span class="badge badge-unverified">Unverified</span>
                                @endif
                            </div>
                            <button type="button" onclick="document.getElementById('toggleVerificationForm').submit();" class="btn {{ $user->hasVerifiedEmail() ? 'btn-warning' : 'btn-success' }} btn-sm">
                                {{ $user->hasVerifiedEmail() ? 'Revoke Verification' : 'Mark as Verified' }}
                            </button>
                        </div>
                    </div>
                </div>

                <div style="border-top: 1px solid #e5e7eb; padding-top: 20px; margin-top: 20px;">
                    <p style="font-size: 13px; color: #6b7280; margin-bottom: 16px;">Leave password fields empty to keep the current password unchanged.</p>

                    <div class="form-group">
                        <label for="password">New Password (optional)</label>
                        <input type="password" id="password" name="password" autocomplete="new-password">
                        @error('password')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm New Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" autocomplete="new-password">
                    </div>
                </div>

                <div style="display: flex; gap: 12px;">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    <a href="{{ route('admin.users') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
            <form method="POST" id="toggleVerificationForm" action="{{ route('admin.users.toggle-verification', $user) }}" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</div>
@endsection
