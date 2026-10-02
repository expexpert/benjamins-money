@extends('layouts.admin')

@section('title', 'Trashed States')
@section('page-title', 'Trashed States')

@section('content')
<div class="search-bar">
    <form method="GET" action="{{ route('admin.states.trash') }}" style="display: flex; gap: 12px; flex: 1;">
        <input type="text" name="search" placeholder="Search by state name or code..." value="{{ $search }}">
        <button type="submit" class="btn btn-primary">Search</button>
        @if($search)
        <a href="{{ route('admin.states.trash') }}" class="btn btn-secondary">Clear</a>
        @endif
    </form>
    <a href="{{ route('admin.states') }}" class="btn btn-success">Back to States</a>
</div>

<div class="admin-card">
    <div class="admin-card-body">
        @if($states->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Code</th>
                    <th>State Name</th>
                    <th>Deleted At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($states as $state)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <span style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 32px; background: #003049; border-radius: 4px; color: white; font-size: 12px; font-weight: 600;">
                            {{ strtoupper($state->code) }}
                        </span>
                    </td>
                    <td>
                        <div style="font-weight: 500;">{{ $state->name }}</div>
                    </td>
                    <td>{{ $state->deleted_at?->format('M d, Y H:i') }}</td>
                    <td>
                        <div class="action-buttons">
                            <form method="POST" action="{{ route('admin.states.restore', $state->id) }}" class="action-form" style="display:inline-block;">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-sm">Restore</button>
                            </form>

                            <form method="POST" action="{{ route('admin.states.force-delete', $state->id) }}" class="action-form" style="display:inline-block;" onsubmit="return confirm('Permanently delete this state? This will also permanently delete all associated taxes and cannot be undone.');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete Permanently</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination">
            {{ $states->appends(['search' => $search])->links() }}
        </div>
        @else
        <div class="empty-state">
            <p style="margin-bottom: 16px;">No trashed states found.</p>
            <a href="{{ route('admin.states') }}" class="btn btn-success">Back to States</a>
        </div>
        @endif
    </div>
</div>
@endsection
