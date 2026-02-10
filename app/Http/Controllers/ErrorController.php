<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ErrorController extends Controller
{
    public function errorView(){
        if(Auth::check()){
            return view('error.auth.not-found');
        }
        return view('error.guest.not-found');
    }
}
