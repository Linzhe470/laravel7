<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productype extends Model
{
    //
            // 強制連結建議名稱一致
            protected $table = 'product_types';
            // 允續改動/白名單(權限大於黑名單)
            protected $fillable= ['name'];
            // 不允許改動/黑名單
            protected $quarded= ['id'];
}
