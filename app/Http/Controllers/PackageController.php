<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $package = Package::all();
        return view('admin.package.index', compact('package'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'package_title' => 'required|min:3|max:199|string',
            'package_heading' => 'required|min:3|max:199|string',
            'package_description' => 'required|min:3|max:1000|string',
        ]);

        $package = new Package();
        $package->package_title = $request->input('package_title');
        $package->package_heading = $request->input('package_heading');
        $package->package_description = $request->input('package_description');
        $package->save();
        return redirect()->back()->with('status', 'Package Upload successfully done');
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
        $package = Package::find($id);
        return view('admin.package.edit', compact('package'));
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
                'package_title' => 'required|min:3|max:199|string',
                'package_heading' => 'required|min:3|max:199|string',
                'package_description' => 'required|min:3|max:1000|string',
            ]
        );

        $package = Package::find($id);
        $package->package_title = $request->input('package_title');
        $package->package_heading = $request->input('package_heading');
        $package->package_description = $request->input('package_description');
        $package->update();
        return redirect()->back()->with('status', 'Package Update successfully done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package = Package::find($id);
        $package->delete();
        return redirect()->back()->with('status', 'Package delete successfully done');
    }
}
