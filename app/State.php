<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $guarded = ['name','country_id','created_at','updated_at'];


    public function state_has_many_city(){
        return $this->hasMany(State::class,'country_id','id');
    }
    public function state_belong_to_country(){
        return $this->belongsTo(State::class,'country_id','id');
    }

}
