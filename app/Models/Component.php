<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Component extends Model
{
    use HasFactory;

    public function inspectionDetails(): HasMany
    {
        return $this->hasMany(InspectionDetail::class);
    }

    public function componentType(): BelongsTo
    {
        return $this->belongsTo(ComponentType::class);
    }

}
