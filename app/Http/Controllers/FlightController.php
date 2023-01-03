<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\TravelerBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flight = Flight::all();
        return view('admin.flight.index', compact('flight'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.flight.create');
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
                'airline_image' => 'required|image|mimes:jpeg,jpg,gif,png,svg|max:2048',
                'airline_title' => 'required|min:3|max:199|string',
                'airline_flight_num' => 'required|min:3|max:199|string',
                'airline_form' => 'required|min:3|max:199|string',
                'airline_destination' => 'required|min:3|max:199|string',
                // 'airline_date' => 'required|min:3|max:199|string',
                'airline_departure_time' => 'required|min:3|max:199|string',
                'airline_arrival_time' => 'required|min:3|max:199|string',
                // 'airline_duration' => 'required|min:3|max:199|string',
                // 'airline_economy_seat' => 'required|min:3|max:199|string',
                // 'airline_business_seat' => 'required|min:3|max:199|string',
                'airline_economy_price' => 'required|min:3|max:199|string',
                'airline_business_price' => 'required|min:3|max:199|string',
                'airline_payment' => 'required|min:3|max:199|string',

            ]
        );
        $flight = new Flight();
        if ($request->hasFile('airline_image')) {
            $file = $request->file('airline_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/flights/', $filename);
            $flight->airline_image = $filename;
        }
        $flight->airline_title = $request->input('airline_title');
        $flight->airline_flight_num = $request->input('airline_flight_num');
        $flight->airline_form = $request->input('airline_form');
        $flight->airline_destination = $request->input('airline_destination');
        $flight->airline_date = $request->input('airline_date');
        $flight->airline_departure_time = $request->input('airline_departure_time');
        $flight->airline_arrival_time = $request->input('airline_arrival_time');
        $flight->airline_duration = $request->input('airline_duration');
        $flight->airline_economy_seat = $request->input('airline_economy_seat');
        $flight->airline_business_seat = $request->input('airline_business_seat');
        $flight->airline_economy_price = $request->input('airline_economy_price');
        $flight->airline_business_price = $request->input('airline_business_price');
        $flight->airline_payment = $request->input('airline_payment');
        $flight->save();
        return redirect()->back()->with('status', 'Flight upload successfully done');
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
        $flight = Flight::find($id);
        return view('admin.flight.edit', compact('flight'));
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
                'airline_image' => 'required|image|mimes:jpeg,jpg,gif,png,svg|max:2048',
                'airline_title' => 'required|min:3|max:199|string',
                'airline_flight_num' => 'required|min:3|max:199|string',
                'airline_form' => 'required|min:3|max:199|string',
                'airline_destination' => 'required|min:3|max:199|string',
                // 'airline_date' => 'required|min:3|max:199|string',
                'airline_departure_time' => 'required|min:3|max:199|string',
                'airline_arrival_time' => 'required|min:3|max:199|string',
                // 'airline_duration' => 'required|min:3|max:199|string',
                // 'airline_economy_seat' => 'required|min:3|max:199|string',
                // 'airline_business_seat' => 'required|min:3|max:199|string',
                'airline_economy_price' => 'required|min:3|max:199|string',
                'airline_business_price' => 'required|min:3|max:199|string',
                'airline_payment' => 'required|min:3|max:199|string',

            ]
        );
        $flight = Flight::find($id);
        if ($request->hasFile('airline_image')) {
            $file = $request->file('airline_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/flights/', $filename);
            $flight->airline_image = $filename;
        }
        $flight->airline_title = $request->input('airline_title');
        $flight->airline_flight_num = $request->input('airline_flight_num');
        $flight->airline_form = $request->input('airline_form');
        $flight->airline_destination = $request->input('airline_destination');
        $flight->airline_date = $request->input('airline_date');
        $flight->airline_departure_time = $request->input('airline_departure_time');
        $flight->airline_arrival_time = $request->input('airline_arrival_time');
        $flight->airline_duration = $request->input('airline_duration');
        $flight->airline_economy_seat = $request->input('airline_economy_seat');
        $flight->airline_business_seat = $request->input('airline_business_seat');
        $flight->airline_economy_price = $request->input('airline_economy_price');
        $flight->airline_business_price = $request->input('airline_business_price');
        $flight->airline_payment = $request->input('airline_payment');
        $flight->update();
        return redirect()->back()->with('status', 'Flight update successfully done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flight = Flight::find($id);
        $destination = 'uploads/flights/' . $flight->airline_image;
        if (File::Exists($destination)) {
            File::delete($destination);
        }
        $flight->delete();
        return redirect()->back()->with('status', 'Flight delete successfully done');
    }

    //Flight search
    public function check(Request $request)
    {
        // dd($request->get('departure');

        if($request->departure && $request->arrive)
        {
        $flight = Flight::where('airline_form', 'LIKE', '%' . $request->departure . '%')
            ->where('airline_destination', 'LIKE', '%' . $request->arrive . '%')
            ->get(); 
        }
        // else
        // {
        //     return redirect()->with('There are no Flight Today');
        // }

        // $check_text = $request->get('departure' && 'arrive');
        // $flight = Flight::where('airline_form', 'LIKE', '%' . $check_text . '%')
        // ->where( 'airline_destination', 'LIKE', '%' . $check_text . '%')
        // ->get();

        return view('front-end.flight', compact('flight'));
    }
    // Flight Details
    public function bookdetail($id)
    {
        $flight = Flight::find($id);
        if (!$flight) {
            return redirect()->to('flight');
        }
        return view('front-end.bookdetails', compact('flight'));
    }
    // Traveler Detail
    public function travelerdetail()
    {
        return view('front-end.travelerdetails');
    }

    //tarveler booking flight confirm with information
    public function tarvelsubmit(Request $request)
    {
        $this->validate(
            $request,
            [
                'tr_name' => 'required|min:3|max:199|string',
                // 'tr_seat' => 'required|min:3|max:199|string',
                'tr_passportnum' => 'required|min:3|max:199|string',
                // 'tr_date_of_birth' => 'required|min:3|max:199|string',
                // 'tr_expiry_date' => 'required|min:3|max:199|string',
                'tr_city' => 'required|min:3|max:199|string',
                'tr_country' => 'required|min:3|max:199|string',
                'tr_email' => 'required|min:3|max:199|string',
                'tr_phone' => 'required|min:3|max:199|string',

            ]
        );

        $travelbook = new TravelerBook();
        $travelbook->tr_name = $request->input('tr_name');
        $travelbook->tr_seat = $request->input('tr_seat');
        $travelbook->tr_passportnum = $request->input('tr_passportnum');
        $travelbook->tr_date_of_birth = $request->input('tr_date_of_birth');
        $travelbook->tr_expiry_date = $request->input('tr_expiry_date');
        $travelbook->tr_city = $request->input('tr_city');
        $travelbook->tr_country = $request->input('tr_country');
        $travelbook->tr_email = $request->input('tr_email');
        $travelbook->tr_phone = $request->input('tr_phone');
        $travelbook->save();
        return redirect()->back()->with('status', 'Flight book successfully done');
    }

    //Book Flight index (Dashboard)
    public function bookflight()
    {
        $bookflight = TravelerBook::all();
        return view('admin.booked.index', compact('bookflight'));
    }
    public function destroybookflight($id)
    {
        $bookflight = TravelerBook::find($id);
        $bookflight->delete();
        return redirect()->back()->with('status', 'Book Flight delete successfully done');
    }



}
