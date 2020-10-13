<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    use AuthenticatesUsers;

    protected function loggedOut(Request $request)
    {
        return redirect(route('/'));
    }
}
