<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PotatoListController extends Controller
{
    public function index()
    {
        $potatos = DB::select('select * from potato p left join potato_parameter pp on (p.id = pp.id)');
        $data = ['potatos' => $potatos];
        return view('hello.index',$data);
    }
}
