@extends('layouts.admin')

@section('title', 'Users')
@section('page-title', 'User Management')

@section('content')
<div class="search-bar">
    <form method="GET" action="{{ route('admin.users') }}" style="display: flex; gap: 12px; flex: 1;">
        <input type="text" name="search" placeholder="Search by name or email..." value="{{ $search }}">
        <select name="role" style="width: 20%;">
            <option value="">All Roles</option>
            <option value="admin" {{ $role === 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="user" {{ $role === 'user' ? 'selected' : '' }}>User</option>
        </select>
        <button type="submit" class="btn btn-primary">Search</button>
        @if($search || $role)
            <a href="{{ route('admin.users') }}" class="btn btn-secondary">Clear</a>
        @endif
    </form>
    <a href="{{ route('admin.users.create') }}" class="btn btn-success">+ Create User</a>
</div>

<div class="admin-card">
    <div class="admin-card-body">
        @if($users->count() > 0)
            <table>
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Registered</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
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
                            <td>{{ $user->created_at->format('M d, Y') }}</td>
                            <td>
                                <div class="action-buttons">
                                    <form method="POST" action="{{ route('admin.users.toggle-verification', $user) }}" class="action-form">
                                        @csrf
                                        <button type="submit" class="btn {{ $user->hasVerifiedEmail() ? 'btn-warning' : 'btn-success' }} btn-sm">
                                            {{ $user->hasVerifiedEmail() ? 'Revoke Verify' : 'Verify' }}
                                        </button>
                                    </form>
                                    <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-primary btn-sm">Edit</a>
                                    @if($user->id !== auth()->id())
                                        <form method="POST" action="{{ route('admin.users.destroy', $user) }}" class="action-form" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="pagination">
                {{ $users->appends(['search' => $search, 'role' => $role])->links() }}
            </div>
        @else
            <div class="empty-state">
                <p style="margin-bottom: 16px;">No users found.</p>
                <a href="{{ route('admin.users.create') }}" class="btn btn-success">Create your first user</a>
            </div>
        @endif
    </div>
</div>
@endsection
