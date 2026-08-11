@extends('layouts.admin')

@section('title', 'Trashed Banks')
@section('page-title', 'Trashed Bank')

@section('content')
<div class="search-bar">
    <form method="GET" action="{{ route('admin.banks.trash') }}" style="display: flex; gap: 12px; flex: 1;">
        <input type="text" name="search" placeholder="Search by name, code, or website..." value="{{ $search }}">
        <button type="submit" class="btn btn-primary">Search</button>
        @if($search)
        <a href="{{ route('admin.banks.trash') }}" class="btn btn-secondary">Clear</a>
        @endif
    </form>
    <a href="{{ route('admin.banks') }}" class="btn btn-success">Back to Banks</a>
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
                    <th>Deleted At</th>
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
                    <td>{{ $bank->deleted_at?->format('M d, Y H:i') }}</td>
                    <td>
                        <div class="action-buttons">
                            <form method="POST" action="{{ route('admin.banks.restore', $bank->id) }}" class="action-form" style="display:inline-block;">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-sm">Restore</button>
                            </form>

                            @if($bank->id !== auth()->id())
                            <form method="POST" action="{{ route('admin.banks.force-delete', $bank->id) }}" class="action-form" style="display:inline-block;" onsubmit="return confirm('Permanently delete this bank? This cannot be undone.');">
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
            {{ $banks->appends(['search' => $search])->links() }}
        </div>
        @else
        <div class="empty-state">
            <p style="margin-bottom: 16px;">No trashed banks found.</p>
            <a href="{{ route('admin.banks') }}" class="btn btn-success">Back to Banks</a>
        </div>
        @endif
    </div>
</div>
@endsection