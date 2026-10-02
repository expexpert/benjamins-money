@extends('layouts.admin')

@section('title', 'State Taxes')
@section('page-title', 'State Tax Management')

@section('content')
<div class="search-bar">
    <form method="GET" action="{{ route('admin.state-taxes') }}" style="display: flex; gap: 12px; flex: 1;">
        <input type="text" name="search" placeholder="Search by state, code, tax name, or rate..." value="{{ $search }}">
        <select name="status" style="width: 20%;">
            <option value="">All Status</option>
            <option value="active" {{ $status === 'active' ? 'selected' : '' }}>Active</option>
            <option value="inactive" {{ $status === 'inactive' ? 'selected' : '' }}>Inactive</option>
        </select>
        <button type="submit" class="btn btn-primary">Search</button>
        @if($search || $status)
            <a href="{{ route('admin.state-taxes') }}" class="btn btn-secondary">Clear</a>
        @endif
    </form>
    <a href="{{ route('admin.states') }}" class="btn btn-secondary">Manage States</a>
    <a href="{{ route('admin.state-taxes.create') }}" class="btn btn-success">+ Add State Tax</a>
    @if($trashedStateTaxes > 0)
        <a href="{{ route('admin.state-taxes.trash') }}" class="btn btn-secondary">View Trashed ({{ $trashedStateTaxes }})</a>
    @endif
</div>

<div class="admin-card">
    <div class="admin-card-body">
        @if($stateTaxes->count() > 0)
            <table>
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>State</th>
                        <th>Tax Name</th>
                        <th>Tax Rate</th>
                        <th>Effective Period</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($stateTaxes as $stateTax)
                        <tr>
                            <td>{{ $stateTaxes->firstItem() + $loop->index }}</td>
                            <td>
                                <div style="display: flex; align-items: center; gap: 10px;">
                                    <div style="width: 32px; height: 32px; background: #003049; border-radius: 4px; display: flex; align-items: center; justify-content: center; color: white; font-size: 12px; font-weight: 600;">
                                        {{ strtoupper($stateTax->state->code) }}
                                    </div>
                                    <div>
                                        <div style="font-weight: 500;">{{ $stateTax->state->name }}</div>
                                        <div style="font-size: 12px; color: #6b7280;">{{ strtoupper($stateTax->state->code) }}</div>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $stateTax->tax_name ?: 'Sales Tax' }}</td>
                            <td>
                                <span style="font-weight: 600; color: #003049;">{{ number_format($stateTax->tax_rate, 2) }}%</span>
                            </td>
                            <td>
                                @if($stateTax->effective_from || $stateTax->effective_to)
                                    <div style="font-size: 13px;">
                                        @if($stateTax->effective_from)
                                            <div>From: {{ $stateTax->effective_from->format('M d, Y') }}</div>
                                        @endif
                                        @if($stateTax->effective_to)
                                            <div>To: {{ $stateTax->effective_to->format('M d, Y') }}</div>
                                        @endif
                                    </div>
                                @else
                                    —
                                @endif
                            </td>
                            <td>
                                @if($stateTax->is_active)
                                    <span class="badge badge-verified">Active</span>
                                @else
                                    <span class="badge badge-unverified">Inactive</span>
                                @endif
                            </td>
                            <td>{{ $stateTax->created_at->format('M d, Y') }}</td>
                            <td>
                                <div class="action-buttons">
                                    <form method="POST" action="{{ route('admin.state-taxes.toggle-status', $stateTax) }}" class="action-form">
                                        @csrf
                                        <button type="submit" class="btn {{ $stateTax->is_active ? 'btn-warning' : 'btn-success' }} btn-sm">
                                            {{ $stateTax->is_active ? 'Deactivate' : 'Activate' }}
                                        </button>
                                    </form>
                                    <a href="{{ route('admin.state-taxes.edit', $stateTax) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form method="POST" action="{{ route('admin.state-taxes.destroy', $stateTax) }}" class="action-form" onsubmit="return confirm('Are you sure you want to delete this state tax?');">
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
                    Page {{ $stateTaxes->currentPage() }} of {{ $stateTaxes->lastPage() }}
                    &middot; {{ $stateTaxes->total() }} total entries
                </div>
                <div class="pagination">
                    {{ $stateTaxes->appends(['search' => $search, 'status' => $status])->links() }}
                </div>
            </div>
        @else
            <div class="empty-state">
                <p style="margin-bottom: 16px;">No state taxes found.</p>
                <a href="{{ route('admin.states') }}" class="btn btn-secondary">Add States First</a>
                <a href="{{ route('admin.state-taxes.create') }}" class="btn btn-success">Add your first state tax</a>
            </div>
        @endif
    </div>
</div>
@endsection
