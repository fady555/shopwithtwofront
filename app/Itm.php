<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itm extends Model
{
    protected $table = 'itms';
    protected $fillable = ['name','description','status','made_material','price','discount','color','ratify','img','number_of_itm','product_id','number_of_buy','unit','size','user_id_add','stars','category_id'];

    public function itm_belong_to_product(){
        return $this->belongsTo(Product::class,'product_id','id');
    }


}
