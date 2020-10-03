<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Potato extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
}
