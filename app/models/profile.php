<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $table = 'profile';
    protected $fillable = [
        'is_active',
        'is_spanish',
        'code',
        'name',
        'description',
        'age',
        'phone',
        'height',
        'measurements',
        'deluxe_escort',
        'featured_escort',
        'category',
        'price',
        'nationality',
        'languages',
        'sexual_orientation',
        'departures',
        'timetable',
        'key_words',
        'description_metatags',
        'zona',
        'web'
    ];

    protected $relations = [
        'images',
        'columnOne'
    ];

    public function images(){
        return $this->hasOne('App\models\image_profile', 'profile_id', 'id');
    } 
    public function columnOne()
    {
        return $this->belongsToMany('App\models\columnOne', 'profiles_columnone','P_Id','C_Id');
    }
}
