<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'f_name','l_name','email','role_id','mobil','password','forget_pass','address_id','city_id','img'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];





    #protected $guarded = ['f_name'];
    #protected $guardedForUpdate = ['f_name'];

    public function isGuardedForUpdate($key){
        return in_array($key, $this->guardedForUpdate) || $this->guardedForUpdate == array('*');
    }

    public function isFillable($key){
        if($this->exists && $this->isGuardedForUpdate($key)){
            return false;
        }
        return parent::isFillable($key);
    }






    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function user_role(){
        #$this->hasOne('role_id','id');
        return $this->belongsTo('App\Role','role_id','id');
    }

    public function user_address(){
        return $this->belongsTo('App\Addres','address_id','id');
    }
}
