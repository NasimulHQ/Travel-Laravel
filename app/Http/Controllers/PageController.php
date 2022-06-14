<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        return view('front-end.home');
    }
    public function flights()
    {
        return view('front-end.flight');
    }
}
