@extends('admin.layout.master')
@section('title')
Gallery Dashboard
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Gallery Data</h1>
        <a class="btn btn-primary" href="{{ url('gallerys')}}">Back</a>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        @if (session('status'))
        <h5 class="alert alert-success">{{ session('status')}}</h5>
        @endif
        <div class="box">
            <div class="box-body">
                <form action="{{ url('update-gallery/'.$gallery->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Gallery Title:</label>
                        <input type="text" class="form-control" name="galler_title" value="{{ $gallery->galler_title}}"
                            placeholder="Enter the gallery title">
                        @error('galler_title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Gallery Header:</label>
                        <input type="text" class="form-control" name="galler_heading" value="{{ $gallery->galler_heading }}"
                            placeholder="Enter the gallery header">
                        @error('galler_heading')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Gallery Image:</label>
                        <input type="file" class="form-control" name="galler_image">
                        <img src="{{ asset('uploads/gallerys/'.$gallery->galler_image)}}" height="80px" width="80px" alt="image">
                        @error('galler_image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Gallery Image Title:</label>
                        <input type="text" class="form-control" name="galler_image_title" value="{{ $gallery->galler_image_title}}"
                            placeholder="Enter the gallery image title">
                        @error('galler_image_title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="submit" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection