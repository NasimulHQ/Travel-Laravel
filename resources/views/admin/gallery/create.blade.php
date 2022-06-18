@extends('admin.layout.master')
@section('title')
Gallery Dashboard
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Create Gallery Data</h1>
        <a class="btn btn-info" href="{{ url('gallerys')}}">Back</a>
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
                <form action="{{ url('add-gallery')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Gallery Title:</label>
                        <input type="text" class="form-control" name="galler_title" placeholder="Enter the gallery title">
                        @error('galler_title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Gallery Header:</label>
                        <input type="text" class="form-control" name="galler_heading" placeholder="Enter the gallery header">
                        @error('galler_heading')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Gallery Image:</label>
                        <input type="file" class="form-control" name="galler_image">
                        @error('galler_image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Gallery Image Title:</label>
                        <input type="text" class="form-control" name="galler_image_title" placeholder="Enter the gallery image title">
                        @error('galler_image_title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" name="submit" value="Create">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection