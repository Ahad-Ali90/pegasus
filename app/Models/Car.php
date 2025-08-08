<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function features()
    {
        return $this->hasMany(CarFeature::class);
    }
    
    public function luggageGuideline()
    {
        return $this->hasMany(LuggageGuideline::class);
    }
    public function luggageOption()
    {
        return $this->hasMany(LuggageOption::class);
    }
}
