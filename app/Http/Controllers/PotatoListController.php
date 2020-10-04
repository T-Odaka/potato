<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PotatoListController extends Controller
{
    public function index()
    {
        $potatos = DB::select('select * from potato p left join potato_parameter pp on (p.id = pp.id) left join potato_description pd on (p.id = pd.id)');
        $data = ['potatos' => $potatos];
        return view('index',$data);
    }
}
