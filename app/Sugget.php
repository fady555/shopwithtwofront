<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sugget extends Model
{


    protected $table ="suggets";

    protected $fillable = ['suggest','user_id','product_id','created_at','updated_at'];
    #protected $guarded = [];
    #protected $primaryKey = [];




}
