<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Turbine extends Model
{
    use HasFactory;

    public function farm(): BelongsTo
    {
        return $this->belongsTo(Farm::class);
    }

    public function components(): HasMany
    {
        return $this->hasMany(Component::class);
    }
}
