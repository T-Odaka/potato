<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;

    protected $table = 'descriptions';

    protected $guarded = array('id');

    public $timestamps = true;

    protected $fillable = [
        'description', 'image_url', 'created_at', 'updated_at'
    ];

    public function potatos()
    {
        return $this->belongsTo('App\Models\Potato');
    }
}
