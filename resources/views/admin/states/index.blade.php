@extends('layouts.admin')

@section('title', 'States')
@section('page-title', 'State Management')

@section('content')
<div class="search-bar">
    <form method="GET" action="{{ route('admin.states') }}" style="display: flex; gap: 12px; flex: 1;">
        <input type="text" name="search" placeholder="Search by state name or code..." value="{{ $search }}">
        <select name="status" style="width: 20%;">
            <option value="">All Status</option>
            <option value="active" {{ $status === 'active' ? 'selected' : '' }}>Active</option>
            <option value="inactive" {{ $status === 'inactive' ? 'selected' : '' }}>Inactive</option>
        </select>
        <button type="submit" class="btn btn-primary">Search</button>
        @if($search || $status)
            <a href="{{ route('admin.states') }}" class="btn btn-secondary">Clear</a>
        @endif
    </form>
    <a href="{{ route('admin.state-taxes') }}" class="btn btn-secondary">Manage Taxes</a>
    <a href="{{ route('admin.states.create') }}" class="btn btn-success">+ Add State</a>
    @if($trashedStates > 0)
        <a href="{{ route('admin.states.trash') }}" class="btn btn-secondary">View Trashed ({{ $trashedStates }})</a>
    @endif
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
                        <th>Tax Count</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($states as $state)
                        <tr>
                            <td>{{ $states->firstItem() + $loop->index }}</td>
                            <td>
                                <span style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 32px; background: #003049; border-radius: 4px; color: white; font-size: 12px; font-weight: 600;">
                                    {{ strtoupper($state->code) }}
                                </span>
                            </td>
                            <td>
                                <div style="font-weight: 500;">{{ $state->name }}</div>
                            </td>
                            <td>{{ $state->stateTaxes()->count() }} tax(es)</td>
                            <td>
                                @if($state->is_active)
                                    <span class="badge badge-verified">Active</span>
                                @else
                                    <span class="badge badge-unverified">Inactive</span>
                                @endif
                            </td>
                            <td>{{ $state->created_at->format('M d, Y') }}</td>
                            <td>
                                <div class="action-buttons">
                                    <form method="POST" action="{{ route('admin.states.toggle-status', $state) }}" class="action-form">
                                        @csrf
                                        <button type="submit" class="btn {{ $state->is_active ? 'btn-warning' : 'btn-success' }} btn-sm">
                                            {{ $state->is_active ? 'Deactivate' : 'Activate' }}
                                        </button>
                                    </form>
                                    <a href="{{ route('admin.states.edit', $state) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form method="POST" action="{{ route('admin.states.destroy', $state) }}" class="action-form" onsubmit="return confirm('Are you sure you want to delete this state? Associated taxes will also be deleted.');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="state-tax-pagination-footer">
                <div class="state-tax-pagination-summary">
                    Page {{ $states->currentPage() }} of {{ $states->lastPage() }}
                    &middot; {{ $states->total() }} total entries
                </div>
                <div class="pagination">
                    {{ $states->appends(['search' => $search, 'status' => $status])->links() }}
                </div>
            </div>
        @else
            <div class="empty-state">
                <p style="margin-bottom: 16px;">No states found.</p>
                <a href="{{ route('admin.states.create') }}" class="btn btn-success">Add your first state</a>
            </div>
        @endif
    </div>
</div>
@endsection
