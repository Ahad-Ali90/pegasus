<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LuggageOption extends Model
{
    protected $fillable = [
        'car_id',
        'title',
        'description',
        'position',
    ];
    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
