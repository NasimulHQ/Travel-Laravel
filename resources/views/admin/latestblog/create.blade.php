@extends('admin.layout.master')
@section('title')
Admin Dashboard
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Create Latest Blog
        </h1>
        <a class="btn btn-info" href="{{ url('latestblogs')}}">Back</a>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        @if (session('status'))
        <h5 class="alert alert-success">{{ session('status')}}</h5>
        @endif
        <div class="box">
            <div class="box-body">
                <form action="{{ url('add-latestblog')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Latest Blog Image:</label>
                        <input type="file" class="form-control" name="latestblog_image">
                        @error('latestblog_image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Latest Blog Title:</label>
                        <input type="text" class="form-control" name="latestblog_title"
                            placeholder="Enter the Latest Blog Title">
                        @error('latestblog_title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Latest Blog Heading:</label>
                        <input type="text" class="form-control" name="latestblog_heading"
                            placeholder="Enter the Latest Blog Heading">
                        @error('latestblog_heading')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Latest Blog Date:</label>
                        <input type="date" class="form-control" name="latestblog_date"
                            placeholder="Enter the Latest Blog Date">
                        @error('latestblog_date')
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