@extends('layouts.admin')

@section('title', 'Edit State')
@section('page-title', 'Edit State')

@section('content')
<div style="max-width: 700px;">
    <div class="admin-card">
        <div class="admin-card-header">
            <h3>Edit State: {{ $state->name }} ({{ strtoupper($state->code) }})</h3>
            <a href="{{ route('admin.states') }}" class="btn btn-secondary btn-sm">&larr; Back to States</a>
        </div>
        <div class="admin-card-body">
            <form method="POST" action="{{ route('admin.states.update', $state) }}">
                @csrf
                @method('PUT')

                <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 20px;">
                    <div class="form-group">
                        <label for="code">State Code <span style="color: #dc2626;">*</span></label>
                        <input type="text" id="code" name="code" value="{{ old('code', $state->code) }}" placeholder="e.g., CA, NY, TX" maxlength="2" style="text-transform: uppercase;" required autofocus>
                        <small style="display: block; margin-top: 4px; font-size: 12px; color: #6b7280;">2-letter state abbreviation (e.g. CA)</small>
                        @error('code')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">State Name <span style="color: #dc2626;">*</span></label>
                        <input type="text" id="name" name="name" value="{{ old('name', $state->name) }}" placeholder="e.g., California" required>
                        @error('name')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div style="border-top: 1px solid #e5e7eb; padding-top: 20px; margin-top: 10px; display: flex; justify-content: space-between; align-items: center;">
                    <div class="form-group" style="margin-bottom: 0;">
                        <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                            <input type="checkbox" id="is_active" name="is_active" value="1" style="width: auto; padding: 0;" {{ old('is_active', $state->is_active) ? 'checked' : '' }}>
                            <span style="margin-bottom: 0; font-weight: 500; color: #374151;">State is active</span>
                        </label>
                    </div>
                </div>

                <div style="display: flex; gap: 12px; margin-top: 20px;">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    <a href="{{ route('admin.states') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
