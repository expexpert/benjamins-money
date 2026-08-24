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
                    <select id="role" name="role" required @if($adminUsersCount <=1 && $user->role === 'admin') disabled @endif>
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

                    <!-- <div class="form-group">
                        <label for="password">New Password (optional)</label>
                        <input type="password" id="password" name="password" autocomplete="new-password">
                        @error('password')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm New Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" autocomplete="new-password">
                    </div> -->

                    <div class="form-group">
                        <label for="password">Password</label>

                        <div class="password-field">
                            <input type="password"
                                id="password"
                                name="password"
                                autocomplete="new-password"
                                required>

                            <button type="button"
                                class="password-toggle"
                                data-target="password"
                                aria-label="Show password">

                                <!-- Hidden state -->
                                <svg class="eye-icon eye-hide"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="14"
                                    height="11"
                                    viewBox="0 0 14 11"
                                    fill="none">
                                    <path d="M10.4676 8.71762C9.47045 9.4777 8.25625 9.89879 7.0026 9.91929C2.91927 9.91929 0.585938 5.25262 0.585938 5.25262C1.31154 3.90039 2.31793 2.71897 3.5376 1.78762M5.7776 0.725952C6.17913 0.631965 6.59023 0.584983 7.0026 0.585952C11.0859 0.585952 13.4193 5.25262 13.4193 5.25262C13.0652 5.91506 12.6429 6.53871 12.1593 7.11345M8.23927 6.48929C8.07906 6.66122 7.88586 6.79913 7.67119 6.89477C7.45653 6.99042 7.2248 7.04185 6.98982 7.046C6.75485 7.05015 6.52145 7.00692 6.30354 6.91891C6.08564 6.83089 5.88769 6.69989 5.72151 6.53371C5.55534 6.36753 5.42433 6.16959 5.33632 5.95168C5.2483 5.73377 5.20508 5.50037 5.20922 5.2654C5.21337 5.03043 5.2648 4.7987 5.36045 4.58403C5.4561 4.36937 5.594 4.17616 5.76594 4.01595"
                                        stroke="#356674"
                                        stroke-width="1.16667"
                                        stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>

                                <!-- Visible state -->
                                <svg class="eye-icon eye-show"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="14"
                                    height="11"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M17.94 17.94A10.94 10.94 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24" />
                                    <line x1="1" y1="1" x2="23" y2="23" />
                                </svg>

                            </button>
                        </div>

                        @error('password')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>

                        <div class="password-field">
                            <input type="password"
                                id="password_confirmation"
                                name="password_confirmation"
                                autocomplete="new-password"
                                required>

                            <button type="button"
                                class="password-toggle"
                                data-target="password_confirmation"
                                aria-label="Show password">

                                <!-- Hidden state -->
                                <svg class="eye-icon eye-hide"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="14"
                                    height="11"
                                    viewBox="0 0 14 11"
                                    fill="none">
                                    <path d="M10.4676 8.71762C9.47045 9.4777 8.25625 9.89879 7.0026 9.91929C2.91927 9.91929 0.585938 5.25262 0.585938 5.25262C1.31154 3.90039 2.31793 2.71897 3.5376 1.78762M5.7776 0.725952C6.17913 0.631965 6.59023 0.584983 7.0026 0.585952C11.0859 0.585952 13.4193 5.25262 13.4193 5.25262C13.0652 5.91506 12.6429 6.53871 12.1593 7.11345M8.23927 6.48929C8.07906 6.66122 7.88586 6.79913 7.67119 6.89477C7.45653 6.99042 7.2248 7.04185 6.98982 7.046C6.75485 7.05015 6.52145 7.00692 6.30354 6.91891C6.08564 6.83089 5.88769 6.69989 5.72151 6.53371C5.55534 6.36753 5.42433 6.16959 5.33632 5.95168C5.2483 5.73377 5.20508 5.50037 5.20922 5.2654C5.21337 5.03043 5.2648 4.7987 5.36045 4.58403C5.4561 4.36937 5.594 4.17616 5.76594 4.01595"
                                        stroke="#356674"
                                        stroke-width="1.16667"
                                        stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>

                                <!-- Visible state -->
                                <svg class="eye-icon eye-show"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="14"
                                    height="11"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M17.94 17.94A10.94 10.94 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24" />
                                    <line x1="1" y1="1" x2="23" y2="23" />
                                </svg>
                            </button>
                        </div>
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