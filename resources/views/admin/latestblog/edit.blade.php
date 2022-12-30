@extends('admin.layout.master')
@section('title')
Blog Dashboard
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Latest Blog Data</h1>
        <a class="btn btn-primary" href="{{ url('latestblogs')}}">Back</a>
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
                <form action="{{ url('update-latestblog/'.$latestblog->id)}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Latest Blog Image:</label>
                        <input type="file" class="form-control" name="latestblog_image">
                        <img src="{{ asset('uploads/latestblogs/'.$latestblog->latestblog_image)}}" height="80px"
                            width="80px" alt="image">
                        @error('latestblog_image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Latest Blog Title:</label>
                        <input type="text" class="form-control" name="latestblog_title"
                            value="{{ $latestblog->latestblog_title}}" placeholder="Enter the Latest Blog title">
                        @error('latestblog_title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Latest Blog Heading:</label>
                        <input type="text" class="form-control" name="latestblog_heading"
                            value="{{ $latestblog->latestblog_heading }}" placeholder="Enter the Latest Blog Heading">
                        @error('latestblog_heading')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Latest Blog Date:</label>
                        <input type="date" class="form-control" name="latestblog_date"
                            value="{{ $latestblog->latestblog_date}}" placeholder="Enter the Latest Blog Date">
                        @error('latestblog_date')
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