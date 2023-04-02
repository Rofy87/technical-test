<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = ['named_value', 'integer_value'];
    protected $hidden=['created_at','updated_at'];

    public function inspectionDetails(): HasMany
    {
        return $this->hasMany(InspectionDetail::class);
    }

}
