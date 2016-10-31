<?php
/**
 * Created by PhpStorm.
 * User: julian
 * Date: 24/03/16
 * Time: 04:25 AM
 */

namespace App\models;
use Illuminate\Database\Eloquent\Model;

class image_profile extends Model
{
    protected $table = 'image_profile';

    protected $fillable = [
        'profile_id',
        'url1',
        'url2',
        'url3',
        'url4',
        'url5',
        'url6',
        'url7',
        'url8',
        'check_photos'
    ];
}