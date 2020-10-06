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

    public function getData()
    {
        $potatos = DB::table('potatos')
            ->join('parameters', 'potatos.id', '=', 'parameters.fk_parameters_potato_id')
            ->join('descriptions', 'potatos.id', '=', 'descriptions.fk_descriptions_potato_id')
            ->orderBy('name', 'desc')
            ->paginate(10);
        return $potatos;
    }
}
