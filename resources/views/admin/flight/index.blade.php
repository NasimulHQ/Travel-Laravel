@extends('admin.layout.master')
@section('title')
Admin Dashboard
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>View All Flight Data</h1>
        <a class="btn btn-success" href="{{ url('add-flight')}}">Create</a>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        </ol>
    </section>

    <!-- Main content -->
    {{-- <section class="content">
        <div class="box">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Hotel Image</th>
                        <th>Hotel Title</th>
                        <th>Hotel Location</th>
                        <th>Hotel Price</th>
                        <th>Hotel Rating</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hotel as $show)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>
                            <img src="{{ asset('uploads/hotels/'.$show->hotel_image)}}" height="80px" width="80px"
                                alt="image">
                        </td>
                        <td>{{ $show->hotel_title }}</td>
                        <td>{{ $show->hotel_location }}</td>
                        <td>{{ $show->hotel_price}}</td>
                        <td>{{ $show->hotel_rating}}</td>
                        <td>
                            <a href="{{ url('edit-hotel/'.$show->id)}}" class="btn btn-info">Edit</a>
                            <a href="{{ url('delete-hotel/'.$show->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section> --}}
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection