<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        $gallery = Gallery::select('galler_title', 'galler_heading', 'galler_image', 'galler_image_title')
        ->orderBy('id', 'asc')
        ->get();
        return view('front-end.home', compact('gallery'));
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
        $gallery = Gallery::select('galler_title', 'galler_heading', 'galler_image', 'galler_image_title')
        ->orderBy('id', 'asc')
        ->get();
        return view('front-end.holiday', compact('gallery'));
    }
    public function blogs()
    {
        return view('front-end.blog');
    }
}
