<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
class PagenationController extends Controller
{

    public function make(){
    $pages = DB::table('potato')
    ->join('potato_parameter','potato.id','=','potato_parameter.id')
    ->join('potato_description','potato.id','=','potato_description.id')
    ->paginate(6);
    return View::make('template', ['pages' => $pages]);
    }

    public function gridtest()
    {
        return View::make('grid');
    }
}
