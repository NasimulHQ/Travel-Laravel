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
    <section class="content">
        <div class="box">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Airline Image</th>
                        <th>Air Title</th>
                        <th>Air Flight Num</th>
                        <th>Airform</th>
                        <th>Air destin</th>
                        <th>Air date</th>
                        <th>Air depart time</th>
                        <th>Air arrival time</th>
                        <th>Air duration</th>
                        <th>Air econ seat</th>
                        <th>Air busin seat</th>
                        <th>Air econ price</th>
                        <th>Air busin price</th>
                        <th>Air payment</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($flight as $fshow)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>
                            <img src="{{ asset('uploads/flights/'.$fshow->airline_image)}}" height="60px" width="60px"
                                alt="image">
                        </td>
                        <td>{{ $fshow->airline_title }}</td>
                        <td>{{ $fshow->airline_flight_num }}</td>
                        <td>{{ $fshow->airline_form }}</td>
                        <td>{{ $fshow->airline_destination}}</td>
                        <td>{{ $fshow->airline_date}}</td>
                        <td>{{ $fshow->airline_departure_time}}</td>
                        <td>{{ $fshow->airline_arrival_time}}</td>
                        <td>{{ $fshow->airline_duration}}</td>
                        <td>{{ $fshow->airline_economy_seat}}</td>
                        <td>{{ $fshow->airline_business_seat}}</td>
                        <td>{{ $fshow->airline_economy_price}}</td>
                        <td>{{ $fshow->airline_business_price}}</td>
                        <td>{{ $fshow->airline_payment}}</td>
                        <td>
                            <a href="{{ url('edit-flight/'.$fshow->id)}}" class="btn btn-info">Edit</a>
                            <a href="{{ url('delete-flight/'.$fshow->id)}}" class="btn btn-danger">Delete</a>
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