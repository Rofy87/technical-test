<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Inspection extends Model
{
    use HasFactory;


    public function inspectionDetails(): HasMany
    {
        return $this->hasMany(InspectionDetail::class);
    }

    public function turbine(): BelongsTo
    {
        return $this->belongsTo(Turbine::class);
    }
}
