<?php

namespace App\Http\Controllers;

use App\Models\LatestBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LatestBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latestblog = LatestBlog::all();
        return view('admin.latestblog.index', compact('latestblog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.latestblog.create');
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
                'latestblog_image' => 'required|image|mimes:jpeg,jpg,gif,png,svg|max:2048',
                'latestblog_title' => 'required|min:3|max:199|string',
                'latestblog_heading' => 'required|min:3|max:199|string',

                // 'latestblog_date' => 'required|min:3|max:199|string',

            ]
        );
        $latestblog = new LatestBlog();
        if ($request->hasFile('latestblog_image')) {
            $file = $request->file('latestblog_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/latestblogs/', $filename);
            $latestblog->latestblog_image = $filename;
        }
        $latestblog->latestblog_title = $request->input('latestblog_title');
        $latestblog->latestblog_heading = $request->input('latestblog_heading');
        $latestblog->latestblog_date = $request->input('latestblog_date');
        $latestblog->save();
        return redirect()->back()->with('status', 'Latest Blog Upload successfully done');
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
        $latestblog = LatestBlog::find($id);
        return view('admin.latestblog.edit', compact('latestblog'));
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
                'latestblog_image' => 'required|image|mimes:jpeg,jpg,gif,png,svg|max:2048',
                'latestblog_title' => 'required|min:3|max:199|string',
                'latestblog_heading' => 'required|min:3|max:199|string',

                // 'latestblog_date' => 'required|min:3|max:199|string',

            ]
        );
        $latestblog = LatestBlog::find($id);
        if ($request->hasFile('latestblog_image')) {
            $file = $request->file('latestblog_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/latestblogs/', $filename);
            $latestblog->latestblog_image = $filename;
        }
        $latestblog->latestblog_title = $request->input('latestblog_title');
        $latestblog->latestblog_heading = $request->input('latestblog_heading');
        $latestblog->latestblog_date = $request->input('latestblog_date');
        $latestblog->update();
        return redirect()->back()->with('status', 'Latest Blog Update successfully done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $latestblog = LatestBlog::find($id);
        $destination = 'uploads/featposts/' . $latestblog->latestblog_image;
        if (File::Exists($destination)) {
            File::delete($destination);
        }
        $latestblog->delete();
        return redirect()->back()->with('status', 'Latest Blog delete successfully done');
    }
}
