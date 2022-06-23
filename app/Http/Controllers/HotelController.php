<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotel = Hotel::all();
        return view('admin.hotel.index', compact('hotel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hotel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'hotel_image' => 'required|image|mimes:jpeg,jpg,gif,png,svg|max:2048',
                'hotel_title' => 'required|min:3|max:199|string',
                'hotel_location' => 'required|min:3|max:199|string',
                'hotel_price' => 'required|min:3|max:199|string',
                // 'hotel_rating' => 'required|min:3|max:199|string'
                
            ]
        );
        $hotel = new Hotel();
        if ($request->hasFile('hotel_image')) {
            $file = $request->file('hotel_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/hotels/', $filename);
            $hotel->hotel_image = $filename;
        }
        $hotel->hotel_title = $request->input('hotel_title');
        $hotel->hotel_location = $request->input('hotel_location');
        $hotel->hotel_price = $request->input('hotel_price');    
        $hotel->hotel_rating = $request->input('hotel_rating');
        $hotel->save();
        return redirect()->back()->with('status', 'Hotel Upload successfully done');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}