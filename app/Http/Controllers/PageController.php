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
    public function hotels()
    {
        return view('front-end.hotel');
    }
    public function holidays()
    {
        return view('front-end.holiday');
    }
    public function blogs()
    {
        return view('front-end.blog');
    }
}
