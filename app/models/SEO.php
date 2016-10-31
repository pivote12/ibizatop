<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class SEO extends Model
{
    //
    protected $table = 'seo';

    protected $fillable = [
          'siteDescription',
          'keywords'
        ];
}
