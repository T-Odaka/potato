<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Kyslik\ColumnSortable\Sortable;

class Potato extends Model
{
    use HasFactory;

    protected $table = 'potatos';

    protected $fillable = [
        'name',
    ];
}
