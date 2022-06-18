<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::all();
        return view('admin.gallery.index', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
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
                'galler_title' => 'required|min:3|max:199|string',
                'galler_heading' => 'required|min:3|max:199|string',
                'galler_image' => 'required|image|mimes:jpeg,jpg,gif,png,svg|max:2048',
                'galler_image_title'=> 'required|min:3|max:199|string'
    ]);
    $gallery = new Gallery();
    $gallery->galler_title = $request->input('galler_title');
    $gallery->galler_heading = $request->input('galler_heading');
    if($request->hasFile('galler_image'))
    {
        $file = $request->file('galler_image');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'. $extension;
        $file->move('uploads/gallerys/', $filename);
        $gallery->galler_image = $filename;
    }
    $gallery->galler_image_title = $request->input('galler_image_title');
    $gallery->save();
    return redirect()->back()->with('status', 'Gallery Upload successfully done');
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
        $gallery = Gallery::find($id);
        return view('admin.gallery.edit', compact('gallery'));
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
                'galler_title' => 'required|min:3|max:199|string',
                'galler_heading' => 'required|min:3|max:199|string',
                'galler_image' => 'required|image|mimes:jpeg,jpg,gif,png,svg|max:2048',
                'galler_image_title' => 'required|min:3|max:199|string'
            ]
        );
        $gallery = Gallery::find($id);
        $gallery->galler_title = $request->input('galler_title');
        $gallery->galler_heading = $request->input('galler_heading');
        if ($request->hasFile('galler_image')) {
            $file = $request->file('galler_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/gallerys/', $filename);
            $gallery->galler_image = $filename;
        }
        $gallery->galler_image_title = $request->input('galler_image_title');
        $gallery->update();
        return redirect()->back()->with('status', 'Gallery Updated successfully done');
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
