<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
// class News(連結news) extends Model
{
    //
    // 強制連結建議名稱一致
    protected $table = 'news';
    // 允續改動/白名單(權限大於黑名單)
    protected $fillable= ['title','date','img','content','view','created_at','updated_at'];
    // 不允許改動/黑名單
    protected $quarded= ['view','id'];
    
}
