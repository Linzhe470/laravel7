<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    //
    protected $table = 'contactus';
    protected $fillable = ['name','email','tel','title','message','created_at','updated_at'];
    protected $guard =['id'];
}
