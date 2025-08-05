<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
  protected $fillable = ['name', 'description', 'keypoints', 'techs', 'images'];

    protected $casts = [
        'keypoints' => 'array',
        'techs'     => 'array',
        'images'    => 'array',
    ];}
