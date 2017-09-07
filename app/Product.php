<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =['title','description','image_filename'];
    public $timestamps = false;
}
