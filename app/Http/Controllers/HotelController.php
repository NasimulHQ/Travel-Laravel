<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $hotel = Hotel::find($id);
        return view('admin.hotel.edit', compact('hotel'));
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
        $hotel = Hotel::find($id);
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
        $hotel->update();
        return redirect()->back()->with('status', 'Hotel update successfully done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel = Hotel::find($id);
        $destination = 'uploads/hotels/' . $hotel->hotel_image;
        if (File::Exists($destination)) {
            File::delete($destination);
        }
        $hotel->delete();
        return redirect()->back()->with('status', 'Hotel delete successfully done');
    }
    public function search(Request $request)
    {
        // dd($request->get('query'));
        $search_text = $request->get('query');
        $hotel = Hotel::where('hotel_location', 'LIKE', '%' . $search_text . '%')->get();

        return view('front-end.hotel', compact('hotel'));
    }
    public function extra()
    {
        $hotel = Hotel::all();
        return view('front-end.hotelShow', compact('hotel'));
    }
   public function booknow(){
    return view('front-end.booknow');
   }

}
