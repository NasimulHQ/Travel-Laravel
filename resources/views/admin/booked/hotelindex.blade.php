@extends('admin.layout.master')
@section('title')
Admin Dashboard
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>View All Book Hotel User</h1>
        {{-- <a class="btn btn-success" href="{{ url('add-flight')}}">Create</a> --}}
        <ol class="breadcrumb">
            <li><a href="{{ url('/admin/home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Hotel Name</th>
                        <th>Name</th>
                        <th>Bed</th>
                        <th>NID Number</th>
                        <th>Date of Birth</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookhotel as $bookhotelshow)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $bookhotelshow->client_no}}</td>
                        <td>{{ $bookhotelshow->cl_name }}</td>
                        <td>{{ $bookhotelshow->cl_bed }}</td>
                        <td>{{ $bookhotelshow->cl_nid }}</td>
                        <td>{{ $bookhotelshow->cl_date_of_birth}}</td>
                        <td>{{ $bookhotelshow->cl_city}}</td>
                        <td>{{ $bookhotelshow->cl_country}}</td>
                        <td>{{ $bookhotelshow->cl_email}}</td>
                        <td>{{ $bookhotelshow->cl_phone}}</td>
                        <td>
                            {{-- <a href="{{ url('edit-flight/'.$fshow->id)}}" class="btn btn-info">Edit</a> --}}
                            <a href="{{ url('delete-bookhotel/'.$bookhotelshow->id)}}" class="btn btn-danger">Delete</a>
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