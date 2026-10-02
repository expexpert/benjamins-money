@extends('layouts.admin')

@section('title', 'Add State')
@section('page-title', 'Add New State')

@section('content')
<div style="max-width: 700px;">
    <div class="admin-card">
        <div class="admin-card-header">
            <h3>State Information</h3>
            <a href="{{ route('admin.states') }}" class="btn btn-secondary btn-sm">&larr; Back to States</a>
        </div>
        <div class="admin-card-body">
            <form method="POST" action="{{ route('admin.states.store') }}">
                @csrf

                <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 20px;">
                    <div class="form-group">
                        <label for="code">State Code <span style="color: #dc2626;">*</span></label>
                        <input type="text" id="code" name="code" value="{{ old('code') }}" placeholder="e.g., CA, NY, TX" maxlength="2" style="text-transform: uppercase;" required autofocus>
                        <small style="display: block; margin-top: 4px; font-size: 12px; color: #6b7280;">2-letter state abbreviation (e.g. CA)</small>
                        @error('code')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">State Name <span style="color: #dc2626;">*</span></label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="e.g., California" required>
                        @error('name')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                        <input type="checkbox" id="is_active" name="is_active" value="1" style="width: auto; padding: 0;" {{ old('is_active', true) ? 'checked' : '' }}>
                        <span style="margin-bottom: 0; font-weight: 500; color: #374151;">State is active</span>
                    </label>
                </div>

                <div style="display: flex; gap: 12px;">
                    <button type="submit" class="btn btn-primary">Create State</button>
                    <a href="{{ route('admin.states') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
