<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class PotatoForm extends Model
{
    public $sortable = ['name', 'hot', 'crispy', 'salt', 'garlic'];
    
}
