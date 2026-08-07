@extends('layouts.admin')

@section('title', 'Dashboard')
@section('page-title', 'Admin Dashboard')

@section('content')
<div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-bottom: 32px;">
    <div class="stat-card total">
        <div class="stat-value">{{ $totalUsers }}</div>
        <div class="stat-label">Total Users</div>
    </div>
    <div class="stat-card admin">
        <div class="stat-value">{{ $adminUsers }}</div>
        <div class="stat-label">Admin Users</div>
    </div>
    <div class="stat-card verified">
        <div class="stat-value">{{ $verifiedUsers }}</div>
        <div class="stat-label">Verified Users</div>
    </div>
</div>

<div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-bottom: 32px;">
    <div class="stat-card unverified">
        <div class="stat-value">{{ $unverifiedUsers }}</div>
        <div class="stat-label">Unverified Users</div>
    </div>
    <div class="stat-card total">
        <div class="stat-value">{{ $totalBanks }}</div>
        <div class="stat-label">Total Banks</div>
    </div>
    <div class="stat-card admin">
        <div class="stat-value">{{ $activeBanks }}</div>
        <div class="stat-label">Active Banks</div>
    </div>
</div>

<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px;">
    <div class="admin-card">
        <div class="admin-card-header">
            <h3>Recently Registered Users</h3>
            <a href="{{ route('admin.users') }}" class="btn btn-primary btn-sm">View All</a>
        </div>
        <div class="admin-card-body">
            @if($recentUsers->count() > 0)
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Registered</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recentUsers as $user)
                            <tr>
                                <td>
                                    <div style="font-weight: 500;">{{ $user->name }}</div>
                                    <div style="font-size: 12px; color: #6b7280;">{{ $user->email }}</div>
                                </td>
                                <td>
                                    <span class="badge {{ $user->isAdmin() ? 'badge-admin' : 'badge-user' }}">
                                        {{ ucfirst($user->role) }}
                                    </span>
                                </td>
                                <td>
                                    @if($user->hasVerifiedEmail())
                                        <span class="badge badge-verified">Verified</span>
                                    @else
                                        <span class="badge badge-unverified">Unverified</span>
                                    @endif
                                </td>
                                <td>{{ $user->created_at->diffForHumans() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="empty-state">No users found.</div>
            @endif
        </div>
    </div>

    <div class="admin-card">
        <div class="admin-card-header">
            <h3>Recently Added Banks</h3>
            <a href="{{ route('admin.banks') }}" class="btn btn-primary btn-sm">View All</a>
        </div>
        <div class="admin-card-body">
            @if($recentBanks->count() > 0)
                <table>
                    <thead>
                        <tr>
                            <th>Bank</th>
                            <th>Code</th>
                            <th>Status</th>
                            <th>Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recentBanks as $bank)
                            <tr>
                                <td>
                                    <div style="display: flex; align-items: center; gap: 10px;">
                                        @if($bank->logo)
                                            <img src="{{ Storage::url($bank->logo) }}" alt="{{ $bank->name }}" style="width: 28px; height: 28px; object-fit: contain; border-radius: 4px;">
                                        @else
                                            <div style="width: 28px; height: 28px; background: #003049; border-radius: 4px; display: flex; align-items: center; justify-content: center; color: white; font-size: 11px; font-weight: 600;">
                                                {{ strtoupper(substr($bank->name, 0, 2)) }}
                                            </div>
                                        @endif
                                        <span style="font-weight: 500;">{{ $bank->name }}</span>
                                    </div>
                                </td>
                                <td>{{ $bank->code ?: '—' }}</td>
                                <td>
                                    @if($bank->is_active)
                                        <span class="badge badge-verified">Active</span>
                                    @else
                                        <span class="badge badge-unverified">Inactive</span>
                                    @endif
                                </td>
                                <td>{{ $bank->created_at->diffForHumans() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="empty-state">
                    <p style="margin-bottom: 12px;">No banks added yet.</p>
                    <a href="{{ route('admin.banks.create') }}" class="btn btn-success btn-sm">Add First Bank</a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
