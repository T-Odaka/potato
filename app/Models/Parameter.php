<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    use HasFactory;

    protected $table = 'descriptions';

    protected $guarded = array('id');

    public $timestamps = true;

    protected $fillable = [
        'hot', 'crispy', 'garlic', 'salt'
    ];

    public function potatos()
    {
        return $this->belongsTo('App\Models\Potato');
    }
}
