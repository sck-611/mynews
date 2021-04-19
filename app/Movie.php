<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    //fillメソッドを使うためには$fillable,$guardedいずれかの定義が必要
    protected $fillable = ["title","review","stars"];
   //もしくは
   // protected $guarded = ["id"]
}
