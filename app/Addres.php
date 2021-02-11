<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addres extends Model
{
    protected $table = 'addres';
    protected $fillable = ['description','city_id','product_id','create_at','update_at'];
}
