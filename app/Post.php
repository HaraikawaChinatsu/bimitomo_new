<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //後にcreate()メソッドで保存するカラムを指定
    protected $fillable = [
        'image','title','content','amami','sanmi','nigami','umami','enmi'
    ];
    
    // static $amami = [
    //     '0', '1', '2', '3', '4', '5'
    //     ];
    // static $sanmi = [
    //     '0', '1', '2', '3', '4', '5'
    //     ];
    // static $umami = [
    //     '0', '1', '2', '3', '4', '5'
    //     ];
    // static $enmi = [
    //     '0', '1', '2', '3', '4', '5'
    //     ];
    // static $nigami = [
    //     '0', '1', '2', '3', '4', '5'
    //     ];
}
