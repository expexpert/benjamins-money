<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Prunable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StateTax extends Model
{
    use HasFactory, SoftDeletes, Prunable;

    protected $fillable = [
        'state_id',
        'tax_name',
        'tax_rate',
        'is_active',
        'effective_from',
        'effective_to',
    ];

    protected function casts(): array
    {
        return [
            'tax_rate' => 'decimal:2',
            'is_active' => 'boolean',
            'effective_from' => 'date',
            'effective_to' => 'date',
        ];
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function prunable()
    {
        return static::where('deleted_at', '<=', now()->subDays(30));
    }
}
