<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {
        return view('parkiran.home');
    }

    public function parkiran()
    {
        return view('parkiran.deatail1');
    }

}
