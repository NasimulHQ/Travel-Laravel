<?php

namespace App\Http\Controllers;

use App\Mail\HotelBookMail;
use App\Models\Hotel;
use App\Models\Clientbook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

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
                // 'hotel_rating' => 'required|min:3|max:199|string'
                'hotel_description' => 'required|min:3|max:199|string',
                // 'hotel_singlebed' => 'required|min:3|max:199|string',
                // 'hotel_doublebed' => 'required|min:3|max:199|string',
                // 'hotel_singlebed_price' => 'required|min:3|max:199|string',
                // 'hotel_doublebed_price' => 'required|min:3|max:199|string',
                'hotel_payment' => 'required|min:3|max:199|string',
                

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
        $hotel->hotel_rating = $request->input('hotel_rating');
        $hotel->hotel_description = $request->input('hotel_description');
        $hotel->hotel_singlebed = $request->input('hotel_singlebed');
        $hotel->hotel_doublebed = $request->input('hotel_doublebed');
        $hotel->hotel_singlebed_price = $request->input('hotel_singlebed_price');
        $hotel->hotel_doublebed_price = $request->input('hotel_doublebed_price');
        $hotel->hotel_payment = $request->input('hotel_payment');
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
                // 'hotel_rating' => 'required|min:3|max:199|string'
                'hotel_description' => 'required|min:3|max:199|string',
                // 'hotel_singlebed' => 'required|min:3|max:199|string',
                // 'hotel_doublebed' => 'required|min:3|max:199|string',
                // 'hotel_singlebed_price' => 'required|min:3|max:199|string',
                // 'hotel_doublebed_price' => 'required|min:3|max:199|string',
                'hotel_payment' => 'required|min:3|max:199|string',
                

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
        $hotel->hotel_rating = $request->input('hotel_rating');
        $hotel->hotel_description = $request->input('hotel_description');
        $hotel->hotel_singlebed = $request->input('hotel_singlebed');
        $hotel->hotel_doublebed = $request->input('hotel_doublebed');
        $hotel->hotel_singlebed_price = $request->input('hotel_singlebed_price');
        $hotel->hotel_doublebed_price = $request->input('hotel_doublebed_price');
        $hotel->hotel_payment = $request->input('hotel_payment');
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
    public function bookNow($id)
    {
        $hotel = Hotel::find($id);
        if (!$hotel) {
            return redirect()->to('hotel');
        }
        return view('front-end.booknow', compact('hotel'));
    }
    public function clientdetail($client_no)
    {
        return view('front-end.clientdetail', compact('client_no'));
    }

    //Hotel booking client confirm with information
    public function clientsubmit(Request $request)
    {
        $this->validate(
            $request,
            [
                'cl_name' => 'required|min:3|max:199|string',
                // 'tr_seat' => 'required|min:3|max:199|string',
                'cl_nid' => 'required|min:3|max:199|string',
                // 'tr_date_of_birth' => 'required|min:3|max:199|string',
                // 'tr_expiry_date' => 'required|min:3|max:199|string',
                'cl_city' => 'required|min:3|max:199|string',
                'cl_country' => 'required|min:3|max:199|string',
                'cl_email' => 'required|min:3|max:199|string',
                'cl_phone' => 'required|min:3|max:199|string',

            ]
        );

        $clientbooking = new Clientbook();
        $clientbooking->client_no = $request->input('client_no');
        $clientbooking->cl_name = $request->input('cl_name');
        $clientbooking->cl_bed = $request->input('cl_bed');
        $clientbooking->cl_nid = $request->input('cl_nid');
        $clientbooking->cl_date_of_birth = $request->input('cl_date_of_birth');
        $clientbooking->cl_city = $request->input('cl_city');
        $clientbooking->cl_country = $request->input('cl_country');
        $clientbooking->cl_email = $request->input('cl_email');
        $clientbooking->cl_phone = $request->input('cl_phone');
        $clientbooking->save();

        $send_mail = $request->input('cl_email');
        $client_no = $request->input('client_no');
        $cl_bed = $request->input('cl_bed');
        $cl_name = $request->input('cl_name');
        $title = "Congratulations! $cl_name Successfully you booked a Hotel";

        Mail::to($send_mail)->send(new HotelBookMail($client_no, $cl_bed, $title));
        return redirect()->back()->with('status', 'Flight book successfully done, check your Email');
    }

    //Book hotel index (Dashboard)
    public function bookhotel()
    {
        $bookhotel = Clientbook::all();
        return view('admin.booked.hotelindex', compact('bookhotel'));
    }
    public function destroybookhotel($id)
    {
        $bookhotel = Clientbook::find($id);
        $bookhotel->delete();
        return redirect()->back()->with('status', 'Book hotel delete successfully done');
    }


}
