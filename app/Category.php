<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected  $table = "categories";

    protected $fillable = ['name','description'];

    protected $primaryKey = 'id';


    public function category_has_many_product(){
        return $this->hasMany(Product::class,'category_id','id');
    }
}
