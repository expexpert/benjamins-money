@extends('layouts.admin')

@section('title', 'Add State Tax')
@section('page-title', 'Add New State Tax')

@section('content')
<div style="max-width: 700px;">
    <div class="admin-card">
        <div class="admin-card-header">
            <h3>State Tax Information</h3>
            <a href="{{ route('admin.state-taxes') }}" class="btn btn-secondary btn-sm">&larr; Back to State Taxes</a>
        </div>
        <div class="admin-card-body">
            <form method="POST" action="{{ route('admin.state-taxes.store') }}">
                @csrf

                <div class="form-group">
                    <label for="state_id">State <span style="color: #dc2626;">*</span></label>
                    @if($states->count() > 0)
                        <input type="text" id="state" name="state" value="{{ old('state') }}" data-search-url="{{ route('states.search') }}" placeholder="Search for a state..." autocomplete="off">
                        <input type="hidden" id="state_id" name="state_id" value="{{ old('state_id') }}">
                        <small style="display: block; margin-top: 4px; font-size: 12px; color: #6b7280;">
                            Don't see your state? <a href="{{ route('admin.states.create') }}">Add a new state first</a>
                        </small>
                    @else
                        <div style="padding: 12px 16px; background: #fef3c7; border: 1px solid #f59e0b; border-radius: 4px; color: #92400e; margin-bottom: 8px;">
                            No states found. Please <a href="{{ route('admin.states.create') }}" style="font-weight: 600; text-decoration: underline;">add a state</a> before creating a state tax.
                        </div>
                    @endif
                    @error('state_id')
                    <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 20px;">
                    <div class="form-group">
                        <label for="tax_name">Tax Name <span style="color: #dc2626;">*</span></label>
                        <input type="text" id="tax_name" name="tax_name" value="{{ old('tax_name', 'Sales Tax') }}" placeholder="e.g., Sales Tax, VAT, Luxury Tax">
                        <small style="display: block; margin-top: 4px; font-size: 12px; color: #6b7280;">Name of the tax type (unique per state)</small>
                        @error('tax_name')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="tax_rate">Tax Rate (%) <span style="color: #dc2626;">*</span></label>
                        <div style="position: relative;">
                            <input type="number" id="tax_rate" name="tax_rate" value="{{ old('tax_rate') }}" placeholder="e.g., 7.25" step="0.01" min="0" max="100" required style="padding-right: 36px;">
                            <span style="position: absolute; right: 14px; top: 50%; transform: translateY(-50%); color: #6b7280; font-weight: 500;">%</span>
                        </div>
                        <small style="display: block; margin-top: 4px; font-size: 12px; color: #6b7280;">Between 0 and 100</small>
                        @error('tax_rate')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div class="form-group">
                        <label for="effective_from">Effective From</label>
                        <input type="date" id="effective_from" name="effective_from" value="{{ old('effective_from') }}">
                        <small style="display: block; margin-top: 4px; font-size: 12px; color: #6b7280;">When this tax rate starts (optional)</small>
                        @error('effective_from')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="effective_to">Effective To</label>
                        <input type="date" id="effective_to" name="effective_to" value="{{ old('effective_to') }}">
                        <small style="display: block; margin-top: 4px; font-size: 12px; color: #6b7280;">When this tax rate ends (optional)</small>
                        @error('effective_to')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                        <input type="checkbox" id="is_active" name="is_active" value="1" style="width: auto; padding: 0;" {{ old('is_active', true) ? 'checked' : '' }}>
                        <span style="margin-bottom: 0; font-weight: 500; color: #374151;">State tax is active</span>
                    </label>
                </div>

                <div style="display: flex; gap: 12px;">
                    <button type="submit" class="btn btn-primary" {{ $states->count() === 0 ? 'disabled' : '' }}>Create State Tax</button>
                    <a href="{{ route('admin.state-taxes') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
