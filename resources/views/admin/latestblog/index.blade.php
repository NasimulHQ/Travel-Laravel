@extends('admin.layout.master')
@section('title')
Admin Dashboard
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>View Latest Blog Data</h1>
        <a class="btn btn-success" href="{{ url('add-latestblog')}}">Create</a>
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
                        <th>LatestBlog Image</th>
                        <th>LatestBlog Title</th>
                        <th>LatestBlog Heading</th>
                        <th>LatestBlog Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($latestblog as $lblog)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>
                            <img src="{{ asset('uploads/latestblogs/'.$lblog->latestblog_image)}}" height="80px"
                                width="80px" alt="image">
                        </td>
                        <td>{{ $lblog->latestblog_title }}</td>
                        <td>{{ $lblog->latestblog_heading }}</td>
                        <td>{{ $lblog->latestblog_date}}</td>
                        {{-- <td>
                            <a href="{{ url('edit-latestblog/'.$lblog->id)}}" class="btn btn-info">Edit</a>
                            <a href="{{ url('delete-latestblog/'.$lblog->id)}}" class="btn btn-danger">Delete</a>
                        </td> --}}
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