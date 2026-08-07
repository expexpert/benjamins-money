@extends('layouts.admin')

@section('title', 'Edit Bank')
@section('page-title', 'Edit Bank')

@section('content')
<div style="max-width: 700px;">
    <div class="admin-card">
        <div class="admin-card-header">
            <h3>Edit Bank: {{ $bank->name }}</h3>
            <a href="{{ route('admin.banks') }}" class="btn btn-secondary btn-sm">&larr; Back to Banks</a>
        </div>
        <div class="admin-card-body">
            <form method="POST" action="{{ route('admin.banks.update', $bank) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Bank Name <span style="color: #dc2626;">*</span></label>
                    <input type="text" id="name" name="name" value="{{ old('name', $bank->name) }}" required autofocus>
                    @error('name')
                    <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div class="form-group">
                        <label for="code">Short Code</label>
                        <input type="text" id="code" name="code" value="{{ old('code', $bank->code) }}" placeholder="e.g., CHASE, BAC">
                        <small style="display: block; margin-top: 4px; font-size: 12px; color: #6b7280;">Unique identifier for internal use</small>
                        @error('code')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="website">Website URL</label>
                        <input type="url" id="website" name="website" value="{{ old('website', $bank->website) }}" placeholder="https://example.com">
                        @error('website')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="logo">Logo</label>
                    <div style="display: flex; gap: 12px; align-items: center;">
                        <input type="file" id="logo" name="logo" accept="image/*,.svg" style="flex: 1;">

                        @if($bank->logo)
                        <img src="{{ Storage::url($bank->logo) }}" alt="Current logo" style="width: 40px; height: 40px; object-fit: contain; border: 1px solid #e5e7eb; border-radius: 6px; padding: 4px;">
                        @endif
                    </div>
                    <small style="display: block; margin-top: 4px; font-size: 12px; color: #6b7280;">Bank's logo image (optional)</small>
                    @error('logo')
                    <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" rows="3" maxlength="500" placeholder="Brief description about the bank..." style="width: 100%; padding: 10px 14px; border: 1px solid #d1d5db; border-radius: 6px; font-size: 14px; box-sizing: border-box; resize: vertical;">{{ old('description', $bank->description) }}</textarea>
                    <small style="display: block; margin-top: 4px; font-size: 12px; color: #6b7280;"><span id="descCount">0</span>/500 characters</small>
                    @error('description')
                    <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div style="border-top: 1px solid #e5e7eb; padding-top: 20px; margin-top: 10px; display: flex; justify-content: space-between; align-items: center;">
                    <div class="form-group" style="margin-bottom: 0;">
                        <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                            <input type="checkbox" id="is_featured" name="is_featured" value="1" style="width: auto; padding: 0;" {{ old('is_featured', $bank->is_featured) ? 'checked' : '' }}>
                            <span style="margin-bottom: 0; font-weight: 500; color: #374151;">Bank is Featured (featured to users)</span>
                        </label>
                    </div>
                    <!-- <button type="button" onclick="document.getElementById('toggleStatusForm').submit();" class="btn {{ $bank->is_featured ? 'btn-warning' : 'btn-success' }} btn-sm">
                        {{ $bank->is_featured ? 'Remove from Featured' : 'Mark as Featured' }}
                    </button> -->
                </div>

                <div style="border-top: 1px solid #e5e7eb; padding-top: 20px; margin-top: 10px; display: flex; justify-content: space-between; align-items: center;">
                    <div class="form-group" style="margin-bottom: 0;">
                        <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                            <input type="checkbox" id="is_active" name="is_active" value="1" style="width: auto; padding: 0;" {{ old('is_active', $bank->is_active) ? 'checked' : '' }}>
                            <span style="margin-bottom: 0; font-weight: 500; color: #374151;">Bank is active (visible to users)</span>
                        </label>
                    </div>
                    <!-- <button type="button" onclick="document.getElementById('toggleStatusForm').submit();" class="btn {{ $bank->is_active ? 'btn-warning' : 'btn-success' }} btn-sm">
                        {{ $bank->is_active ? 'Deactivate Now' : 'Activate Now' }}
                    </button> -->
                </div>

                <div style="display: flex; gap: 12px; margin-top: 20px;">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    <a href="{{ route('admin.banks') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
            <form method="POST" id="toggleStatusForm" action="{{ route('admin.banks.toggle-status', $bank) }}" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</div>

<script>
    const desc = document.getElementById('description');
    const descCount = document.getElementById('descCount');
    if (desc && descCount) {
        descCount.textContent = desc.value.length;
        desc.addEventListener('input', function() {
            descCount.textContent = this.value.length;
        });
    }
</script>
@endsection