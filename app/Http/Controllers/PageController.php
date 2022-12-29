<?php

namespace App\Http\Controllers;

use App\Models\FeaturePost;
use App\Models\Gallery;
use App\Models\Hotel;
use App\Models\Package;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        $gallery = Gallery::select('galler_title', 'galler_heading', 'galler_image', 'galler_image_title')
            ->orderBy('id', 'asc')
            ->get();
        $package = Package::select('package_title', 'package_heading', 'package_description')
            ->orderBy('id', 'asc')
            ->get();
            return view('front-end.home', compact('gallery', 'package'));
    }
    public function flights()
    {
        return view('front-end.flight');
    }
    public function hotel()
    {
        $hotel = Hotel::select('id', 'hotel_image', 'hotel_title', 'hotel_location', 'hotel_price')
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
        $package = Package::select('package_title', 'package_heading', 'package_description')
        ->orderBy('id', 'asc')
        ->get();
        $featurepost = FeaturePost::select('featpost_image', 'featpost_title', 'featpost_heading', 'featpost_description', 'featpost_date')
        ->orderBy('id', 'asc')
        ->get();
        return view('front-end.blog', compact('package', 'featurepost'));
    }
}
