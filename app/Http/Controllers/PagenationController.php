<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
class PagenationController extends Controller
{

    public function make(){
    $pages = DB::table('potatos')
    ->join('parameters','potatos.id','=','parameters.potato_id')
    ->join('descriptions','potatos.id','=','descriptions.potato_id')
    ->paginate(2);
    return View::make('template', ['pages' => $pages]);
    }

    public function gridtest()
    {
        return View::make('grid');
    }
}
