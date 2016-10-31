<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class columnOne extends Model
{
      protected $table = 'columnone';
      protected $fillable = [
          'name',
          'URL',
          'name_en'
      ];

    public function profile()
    {
        return $this->belongsToMany('App\models\profile');
    }
}
