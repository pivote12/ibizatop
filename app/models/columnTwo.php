<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class columnTwo extends Model
{
    protected $table = 'columntwo';

    protected $fillable = [
      'name',
      'URL'
    ];
}
