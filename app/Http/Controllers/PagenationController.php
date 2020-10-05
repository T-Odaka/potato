<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class PagenationController extends Controller
{


    public function make()
    {
        $pages = DB::table('potatos')
            ->join('parameters', 'potatos.id', '=', 'parameters.potato_id')
            ->join('descriptions', 'potatos.id', '=', 'descriptions.potato_id')
            ->orderBy('name','desc')
            ->paginate(6);
        return View::make('index', ['pages' => $pages]);
    }

    public function sortHot()
    {
        $pages = DB::table('potatos')
            ->join('parameters', 'potatos.id', '=', 'parameters.potato_id')
            ->join('descriptions', 'potatos.id', '=', 'descriptions.potato_id')
            ->orderBy('hot', 'desc')
            ->paginate(6);
        return View::make('index', ['pages' => $pages]);
    }

    public function sortSalt()
    {
        $pages = DB::table('potatos')
            ->join('parameters', 'potatos.id', '=', 'parameters.potato_id')
            ->join('descriptions', 'potatos.id', '=', 'descriptions.potato_id')
            ->orderBy('salt', 'desc')
            ->paginate(6);
        return View::make('index', ['pages' => $pages]);
    }

    public function sortGarlic()
    {
        $pages = DB::table('potatos')
        ->join('parameters', 'potatos.id', '=', 'parameters.potato_id')
        ->join('descriptions', 'potatos.id', '=', 'descriptions.potato_id')
        ->orderBy('garlic', 'desc')
            ->paginate(6);
        return View::make('index', ['pages' => $pages]);
    }

    public function sortCrispy()
    {
        $pages = DB::table('potatos')
        ->join('parameters', 'potatos.id', '=', 'parameters.potato_id')
        ->join('descriptions', 'potatos.id', '=', 'descriptions.potato_id')
        ->orderBy('crispy', 'desc')
            ->paginate(6);
        return View::make('index', ['pages' => $pages]);
    }
}
