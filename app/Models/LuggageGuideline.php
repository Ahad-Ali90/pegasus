<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LuggageGuideline extends Model
{
    protected $fillable = [
        'car_id',
        'type',
        'max_dimensions_cm',
        'max_dimensions_inches',
        'position',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
