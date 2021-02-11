<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $guarded = ['sortname','name','phonecode'];

    protected $table = "countries";

    public function country_has_many_states(){
        return $this->hasMany(State::class,'country_id','id');
    }



}
