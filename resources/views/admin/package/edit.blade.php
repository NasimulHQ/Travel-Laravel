@extends('admin.layout.master')
@section('title')
Hotel Dashboard
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Hotel Data</h1>
        <a class="btn btn-primary" href="{{ url('packages')}}">Back</a>
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
                <form action="{{ url('update-package/'.$package->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Package Title:</label>
                        <input type="text" class="form-control" name="package_title" value="{{ $package->package_title}}"
                            placeholder="Enter the Package title">
                        @error('package_title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Package Heading:</label>
                        <input type="text" class="form-control" name="package_heading"
                            value="{{ $package->package_heading }}" placeholder="Enter the Package heading">
                        @error('package_heading')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Package Description:</label>
                        <input type="text" class="form-control" name="package_description" value="{{ $package->package_description}}"
                            placeholder="Enter the package description">
                        @error('package_description')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-info" name="submit" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection