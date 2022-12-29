<?php

namespace App\Http\Controllers;

use App\Models\FeaturePost;
use Illuminate\Http\Request;

class FeaturePostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $featurepost = FeaturePost::all();
        return view('admin.featurepost.index', compact('featurepost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.featurepost.create');
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
                'featpost_image' => 'required|image|mimes:jpeg,jpg,gif,png,svg|max:2048',
                'featpost_title' => 'required|min:3|max:199|string',
                'featpost_heading' => 'required|min:3|max:199|string',
                'featpost_description' => 'required|min:3|max:2000|string',
                
                // 'featpost_date' => 'required|min:3|max:199|string'

            ]
        );
        $featurepost = new FeaturePost();
        if ($request->hasFile('featpost_image')) {
            $file = $request->file('featpost_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/featposts/', $filename);
            $featurepost->featpost_image = $filename;
        }
        $featurepost->featpost_title = $request->input('featpost_title');
        $featurepost->featpost_heading = $request->input('featpost_heading');
        $featurepost->featpost_description = $request->input('featpost_description');
        $featurepost->featpost_date = $request->input('featpost_date');
        $featurepost->save();
        return redirect()->back()->with('status', 'Feature Post Upload successfully done');
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
        $featurepost = FeaturePost::find($id);
        return view('admin.featurepost.edit', compact('featurepost'));
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
                'featpost_image' => 'required|image|mimes:jpeg,jpg,gif,png,svg|max:2048',
                'featpost_title' => 'required|min:3|max:199|string',
                'featpost_heading' => 'required|min:3|max:199|string',
                'featpost_description' => 'required|min:3|max:2000|string',

                // 'featpost_date' => 'required|min:3|max:199|string'

            ]
        );
        $featurepost = FeaturePost::find($id);
        if ($request->hasFile('featpost_image')) {
            $file = $request->file('featpost_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/featposts/', $filename);
            $featurepost->featpost_image = $filename;
        }
        $featurepost->featpost_title = $request->input('featpost_title');
        $featurepost->featpost_heading = $request->input('featpost_heading');
        $featurepost->featpost_description = $request->input('featpost_description');
        $featurepost->featpost_date = $request->input('featpost_date');
        $featurepost->update();
        return redirect()->back()->with('status', 'Feature Post Update successfully done');
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
