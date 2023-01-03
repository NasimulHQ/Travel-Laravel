@extends('admin.layout.master')
@section('title')
Admin Dashboard
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>View All Book Flight User</h1>
        {{-- <a class="btn btn-success" href="{{ url('add-flight')}}">Create</a> --}}
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
                        <th>Name</th>
                        <th>Seat</th>
                        <th>Passport Number</th>
                        <th>Date of Birth</th>
                        <th>Passport Expiry Date</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookflight as $bookshow)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $bookshow->tr_name }}</td>
                        <td>{{ $bookshow->tr_seat }}</td>
                        <td>{{ $bookshow->tr_passportnum }}</td>
                        <td>{{ $bookshow->tr_date_of_birth}}</td>
                        <td>{{ $bookshow->tr_expiry_date}}</td>
                        <td>{{ $bookshow->tr_city}}</td>
                        <td>{{ $bookshow->tr_country}}</td>
                        <td>{{ $bookshow->tr_email}}</td>
                        <td>{{ $bookshow->tr_phone}}</td>
                        <td>
                            {{-- <a href="{{ url('edit-flight/'.$fshow->id)}}" class="btn btn-info">Edit</a> --}}
                            <a href="{{ url('delete-bookflight/'.$bookshow->id)}}" class="btn btn-danger">Delete</a>
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