<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use Carbon\Carbon;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'photo', 'type'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function setPasswordAttribute($valor)
    {
        if ( !empty(trim($valor)) ) {
            $this->attributes['password'] = \Hash::make($valor);
        }
    }

//    public function setPhotoAttribute($photo)
//    {
//        if ( !empty($photo) ) {
//
//            if ($this->photo != 'userDefault.png') {
//                \Storage::delete($this->photo);
//            }
//
//            $this->attributes['photo'] = Carbon::now()->second . $photo->getClientOriginalName();
//            $name = Carbon::now()->second . $photo->getClientOriginalName();
//            \Storage::disk('local')->put($name, \File::get($photo));
//        }
//    }
}
