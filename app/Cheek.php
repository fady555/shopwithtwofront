<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cheek extends Model
{
    protected $table = "cheeks";

    protected $fillable = ['color' ,'size'];
}
