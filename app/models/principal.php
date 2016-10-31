<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class principal extends Model
{
    //
      protected $table = 'principal';
      protected $fillable = [
          'topText',
          'email',
          'phone',
          'trans_des_es',
          'trans_des_en',
          'shemale_des_es',
          'shemale_des_en',
          'noveltiesTransEn',
          'noveltiesShemaleEn'
      ];
}
