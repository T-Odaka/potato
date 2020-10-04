<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Potato extends Model
{
    use HasFactory;
    use Sortable;

    protected $fillable = [
        'name',
    ];

    public $sortable = [
        'name', 'hot', 'crispy', 'salt', 'garlic'
    ];
    
}
