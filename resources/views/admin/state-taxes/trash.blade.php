@extends('layouts.admin')

@section('title', 'Trashed State Taxes')
@section('page-title', 'Trashed State Taxes')

@section('content')
<div class="search-bar">
    <form method="GET" action="{{ route('admin.state-taxes.trash') }}" style="display: flex; gap: 12px; flex: 1;">
        <input type="text" name="search" placeholder="Search by state, code, tax name, or rate..." value="{{ $search }}">
        <button type="submit" class="btn btn-primary">Search</button>
        @if($search)
        <a href="{{ route('admin.state-taxes.trash') }}" class="btn btn-secondary">Clear</a>
        @endif
    </form>
    <a href="{{ route('admin.state-taxes') }}" class="btn btn-success">Back to State Taxes</a>
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
                    <th>Deleted At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stateTaxes as $stateTax)
                <tr>
                    <td>{{ $loop->iteration }}</td>
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
                    <td>{{ $stateTax->deleted_at?->format('M d, Y H:i') }}</td>
                    <td>
                        <div class="action-buttons">
                            <form method="POST" action="{{ route('admin.state-taxes.restore', $stateTax->id) }}" class="action-form" style="display:inline-block;">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-sm">Restore</button>
                            </form>

                            <form method="POST" action="{{ route('admin.state-taxes.force-delete', $stateTax->id) }}" class="action-form" style="display:inline-block;" onsubmit="return confirm('Permanently delete this state tax? This cannot be undone.');">
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
            {{ $stateTaxes->appends(['search' => $search])->links() }}
        </div>
        @else
        <div class="empty-state">
            <p style="margin-bottom: 16px;">No trashed state taxes found.</p>
            <a href="{{ route('admin.state-taxes') }}" class="btn btn-success">Back to State Taxes</a>
        </div>
        @endif
    </div>
</div>
@endsection
