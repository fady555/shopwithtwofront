<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = ['name','state_id'];



    public function city_belong_to_state(){
        return $this->belongsTo(State::class,'state_id','id');
    }
}
