<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
        // 強制連結建議名稱一致
        protected $table = 'products';
        // 允續改動/白名單(權限大於黑名單)
        protected $fillable= ['type_id','name','description','img','price','created_at','updated_at'];
        // 不允許改動/黑名單
        protected $quarded= ['id'];
        
        public function gotProductType(){
            // 一個項目
            return $this->hasOne('App\Productype','id','type_id');
        }

        public function gotProductImg(){
            // 一個項目
            return $this->hasMany('App\ProductImg','product_id','id');
        }
    
}
