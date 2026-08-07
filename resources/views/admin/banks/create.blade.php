@extends('layouts.admin')

@section('title', 'Add Bank')
@section('page-title', 'Add New Bank')

@section('content')
<div style="max-width: 700px;">
    <div class="admin-card">
        <div class="admin-card-header">
            <h3>Bank Information</h3>
            <a href="{{ route('admin.banks') }}" class="btn btn-secondary btn-sm">&larr; Back to Banks</a>
        </div>
        <div class="admin-card-body">
            <form method="POST" action="{{ route('admin.banks.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="name">Bank Name <span style="color: #dc2626;">*</span></label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="e.g., Chase Bank" required autofocus>
                    @error('name')
                    <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div class="form-group">
                        <label for="code">Short Code</label>
                        <input type="text" id="code" name="code" value="{{ old('code') }}" placeholder="e.g., CHASE, BAC">
                        <small style="display: block; margin-top: 4px; font-size: 12px; color: #6b7280;">Unique identifier for internal use</small>
                        @error('code')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="website">Website URL</label>
                        <input type="url" id="website" name="website" value="{{ old('website') }}" placeholder="https://example.com">
                        @error('website')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="logo">Logo</label>
                    <input type="file" id="logo" name="logo" accept="image/*,.svg">
                    <small style="display: block; margin-top: 4px; font-size: 12px; color: #6b7280;">Bank's logo image (optional)</small>
                    @error('logo')
                    <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" rows="3" maxlength="500" placeholder="Brief description about the bank..." style="width: 100%; padding: 10px 14px; border: 1px solid #d1d5db; border-radius: 6px; font-size: 14px; box-sizing: border-box; resize: vertical;">{{ old('description') }}</textarea>
                    <small style="display: block; margin-top: 4px; font-size: 12px; color: #6b7280;"><span id="descCount">0</span>/500 characters</small>
                    @error('description')
                    <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                        <input type="checkbox" id="is_featured" name="is_featured" value="1" style="width: auto; padding: 0;" {{ old('is_featured', true) ? 'checked' : '' }}>
                        <span style="margin-bottom: 0; font-weight: 500; color: #374151;">Bank is Featured (featured to users)</span>
                    </label>
                </div>

                <div class="form-group">
                    <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                        <input type="checkbox" id="is_active" name="is_active" value="1" style="width: auto; padding: 0;" {{ old('is_active', true) ? 'checked' : '' }}>
                        <span style="margin-bottom: 0; font-weight: 500; color: #374151;">Bank is active (visible to users)</span>
                    </label>
                </div>

                <div style="display: flex; gap: 12px;">
                    <button type="submit" class="btn btn-primary">Create Bank</button>
                    <a href="{{ route('admin.banks') }}" class="btn btn-secondary">Cancel</a>
                </div>
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