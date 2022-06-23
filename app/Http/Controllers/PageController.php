<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Hotel;
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
    public function hotel()
    {
        $hotel = Hotel::select('hotel_image', 'hotel_title', 'hotel_location', 'hotel_price')
        ->orderBy('id', 'asc')
        ->get();
        return view('front-end.hotel', compact('hotel'));
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
