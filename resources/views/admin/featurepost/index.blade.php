@extends('admin.layout.master')
@section('title')
Admin Dashboard
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>View Feature Post Data</h1>
        <a class="btn btn-success" href="{{ url('add-featurepost')}}">Create</a>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>FeatPost Image</th>
                        <th>FeatPost Title</th>
                        <th>FeatPost Heading</th>
                        <th>FeatPost Description</th>
                        <th>FeatPost Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($featurepost as $fpost)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>
                            <img src="{{ asset('uploads/featposts/'.$fpost->featpost_image)}}" height="80px" width="80px"
                                alt="image">
                        </td>
                        <td>{{ $fpost->featpost_title }}</td>
                        <td>{{ $fpost->featpost_heading }}</td>
                        <td>{{ $fpost->featpost_description}}</td>
                        <td>{{ $fpost->featpost_date}}</td>
                        <td>
                            <a href="{{ url('edit-featurepost/'.$fpost->id)}}" class="btn btn-info">Edit</a>
                            <a href="{{ url('delete-featurepost/'.$fpost->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection