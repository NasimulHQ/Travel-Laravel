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
            Create Feature Post
        </h1>
        <a class="btn btn-info" href="{{ url('featureposts')}}">Back</a>
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
                <form action="{{ url('add-featurepost')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Feature Post Image:</label>
                        <input type="file" class="form-control" name="featpost_image">
                        @error('featpost_image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Feature Post Title:</label>
                        <input type="text" class="form-control" name="featpost_title" placeholder="Enter the Feature Post Title">
                        @error('featpost_title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Feature Post Heading:</label>
                        <input type="text" class="form-control" name="featpost_heading"
                            placeholder="Enter the Feature Post Heading">
                        @error('featpost_heading')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Feature Post Description:</label>
                        <input type="text" class="form-control" name="featpost_description" placeholder="Enter the Feature Post Description">
                        {{-- <textarea name="featpost_description" rows="4" cols="50">
                        </textarea> --}}
                        @error('featpost_description')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Feature Post Date:</label>
                        <input type="date" class="form-control" name="featpost_date"
                            placeholder="Enter the hotel rating">
                        @error('featpost_date')
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