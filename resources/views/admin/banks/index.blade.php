@extends('layouts.admin')

@section('title', 'Banks')
@section('page-title', 'Bank Management')

@section('content')
<div class="search-bar">
    <form method="GET" action="{{ route('admin.banks') }}" style="display: flex; gap: 12px; flex: 1;">
        <input type="text" name="search" placeholder="Search by name, code, or website..." value="{{ $search }}">
        <select name="status" style="width: 20%;">
            <option value="">All Status</option>
            <option value="active" {{ $status === 'active' ? 'selected' : '' }}>Active</option>
            <option value="inactive" {{ $status === 'inactive' ? 'selected' : '' }}>Inactive</option>
        </select>
        <button type="submit" class="btn btn-primary">Search</button>
        @if($search || $status)
            <a href="{{ route('admin.banks') }}" class="btn btn-secondary">Clear</a>
        @endif
    </form>
    <a href="{{ route('admin.banks.create') }}" class="btn btn-success">+ Add Bank</a>
    @if($trashedBanks > 0)
        <a href="{{ route('admin.banks.trash') }}" class="btn btn-secondary">View Trashed ({{ $trashedBanks }})</a>
    @endif
</div>

<div class="admin-card">
    <div class="admin-card-body">
        @if($banks->count() > 0)
            <table>
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Website</th>
                        <th>Status</th>
                        <th>Featured</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($banks as $bank)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div style="display: flex; align-items: center; gap: 10px;">
                                    @if($bank->logo)
                                        <img src="{{ Storage::url($bank->logo) }}" alt="{{ $bank->name }} logo" style="width: 32px; height: 32px; object-fit: contain; border-radius: 4px;">
                                    @else
                                        <div style="width: 32px; height: 32px; background: #003049; border-radius: 4px; display: flex; align-items: center; justify-content: center; color: white; font-size: 12px; font-weight: 600;">
                                            {{ strtoupper(substr($bank->name, 0, 2)) }}
                                        </div>
                                    @endif
                                    <span style="font-weight: 500;">{{ $bank->name }}</span>
                                </div>
                            </td>
                            <td>{{ $bank->code ?: '—' }}</td>
                            <td>
                                @if($bank->website)
                                    <a href="{{ $bank->website }}" target="_blank" rel="noopener" style="color: #2563eb; text-decoration: none;">{{ $bank->website }}</a>
                                @else
                                    —
                                @endif
                            </td>
                            <td>
                                @if($bank->is_active)
                                    <span class="badge badge-verified">Active</span>
                                @else
                                    <span class="badge badge-unverified">Inactive</span>
                                @endif
                            </td>
                            <td>
                                @if($bank->is_featured)
                                    <span class="badge badge-featured">Featured</span>
                                @else
                                    <span class="badge badge-not-featured">Not Featured</span>
                                @endif
                            </td>
                            <td>{{ $bank->created_at->format('M d, Y') }}</td>
                            <td>
                                <div class="action-buttons">
                                    <form method="POST" action="{{ route('admin.banks.toggle-status', $bank) }}" class="action-form">
                                        @csrf
                                        <button type="submit" class="btn {{ $bank->is_active ? 'btn-warning' : 'btn-success' }} btn-sm">
                                            {{ $bank->is_active ? 'Deactivate' : 'Activate' }}
                                        </button>
                                    </form>
                                    <a href="{{ route('admin.banks.edit', $bank) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form method="POST" action="{{ route('admin.banks.destroy', $bank) }}" class="action-form" onsubmit="return confirm('Are you sure you want to delete this bank?');">
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

            <div class="pagination">
                {{ $banks->appends(['search' => $search, 'status' => $status])->links() }}
            </div>
        @else
            <div class="empty-state">
                <p style="margin-bottom: 16px;">No banks found.</p>
                <a href="{{ route('admin.banks.create') }}" class="btn btn-success">Add your first bank</a>
            </div>
        @endif
    </div>
</div>
@endsection
