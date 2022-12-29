@extends('admin.layout.master')
@section('title')
Hotel Dashboard
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Feature Post Data</h1>
        <a class="btn btn-primary" href="{{ url('featureposts')}}">Back</a>
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
                <form action="{{ url('update-featurepost/'.$featurepost->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Feature Post Image:</label>
                        <input type="file" class="form-control" name="featpost_image">
                        <img src="{{ asset('uploads/featposts/'.$featurepost->featpost_image)}}" height="80px" width="80px"
                            alt="image">
                        @error('featpost_image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Feat Post Title:</label>
                        <input type="text" class="form-control" name="featpost_title" value="{{ $featurepost->featpost_title}}"
                            placeholder="Enter the hotel title">
                        @error('featpost_title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Feature Post Heading:</label>
                        <input type="text" class="form-control" name="featpost_heading"
                            value="{{ $featurepost->featpost_heading }}" placeholder="Enter the hotel location">
                        @error('featpost_heading')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                   <div class="form-group">
                    <label for="">Feature Post Description:</label>
                    <input type="text" class="form-control" name="featpost_description" value="{{ $featurepost->featpost_description }}" placeholder="Enter the Feature Post Description">
                    @error('featpost_description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                    <div class="form-group">
                        <label for="">Feature Post Date:</label>
                        <input type="date" class="form-control" name="featpost_date" value="{{ $featurepost->featpost_date}}"
                            placeholder="Enter the hotel rating">
                        @error('featpost_date')
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