@extends('layouts.admin')

@section('title', 'Trashed Users')
@section('page-title', 'Trashed Users')

@section('content')
<div class="search-bar">
    <form method="GET" action="{{ route('admin.users.trash') }}" style="display: flex; gap: 12px; flex: 1;">
        <input type="text" name="search" placeholder="Search by name or email..." value="{{ $search ?? '' }}">
        <button type="submit" class="btn btn-primary">Search</button>
        @if(!empty($search))
        <a href="{{ route('admin.users.trash') }}" class="btn btn-secondary">Clear</a>
        @endif
    </form>
    <a href="{{ route('admin.users') }}" class="btn btn-success">Back to Users</a>
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
                    <th>Deleted At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ ucfirst($user->role) }}</td>
                    <td>{{ $user->deleted_at?->format('M d, Y H:i') }}</td>
                    <td>
                        <div class="action-buttons">
                            <form method="POST" action="{{ route('admin.users.restore', $user->id) }}" class="action-form" style="display:inline-block;">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-sm">Restore</button>
                            </form>

                            @if($user->id !== auth()->id())
                            <form method="POST" action="{{ route('admin.users.force-delete', $user->id) }}" class="action-form" style="display:inline-block;" onsubmit="return confirm('Permanently delete this user? This cannot be undone.');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete Permanently</button>
                            </form>
                            @endif
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination">
            {{ $users->appends(['search' => $search ?? ''])->links() }}
        </div>
        @else
        <div class="empty-state">
            <p style="margin-bottom: 16px;">No trashed users found.</p>
            <a href="{{ route('admin.users') }}" class="btn btn-success">Back to Users</a>
        </div>
        @endif
    </div>
</div>
@endsection