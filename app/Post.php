<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //後にcreate()メソッドで保存するカラムを指定
    protected $fillable = [
        'image'
    ];
}
