<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class sliders extends Model
{
    protected $table = 'sliders';

    protected $fillable = [
      'name',
      'URL',
      'photo'
    ];
}
