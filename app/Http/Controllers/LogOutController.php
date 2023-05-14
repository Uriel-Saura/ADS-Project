<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LogOutController extends Controller
{
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect() -> to('/login');
    }
}
