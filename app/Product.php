<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table    = "products";
    protected $fillable =['name','description','category_id'];

    public function product_has_many_itm(){
        return $this->hasMany(Itm::class,'product_id','id');
    }
    public function product_belong_to_category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }



}
