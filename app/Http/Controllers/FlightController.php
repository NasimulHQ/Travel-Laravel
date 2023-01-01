<?php

namespace App\Http\Controllers;

use App\Models\Flight;
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




}
