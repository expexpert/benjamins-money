<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Prunable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class State extends Model
{
    use HasFactory, SoftDeletes, Prunable;

    protected $fillable = [
        'code',
        'name',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    public function stateTaxes(): HasMany
    {
        return $this->hasMany(StateTax::class);
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
