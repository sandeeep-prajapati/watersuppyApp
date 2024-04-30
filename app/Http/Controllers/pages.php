<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pages extends Controller
{
    //
    function index(Request $req){
        return view('userviews.landing.index');
    }
}
