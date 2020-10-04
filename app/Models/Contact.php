<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'type', 'name', 'email', 'body'
    ];
    static $types = [
        'オススメのチップス紹介', 'ページについて', 'その他'
    ];
}
