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
            Create Flight
        </h1>
        <a class="btn btn-info" href="{{ url('flights')}}">Back</a>
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
                <form action="{{ url('add-hotel')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Airline Image:</label>
                        <input type="file" class="form-control" name="airline_image">
                        @error('airline_image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Airline Title:</label>
                        <input type="text" class="form-control" name="airline_title" placeholder="Enter the airline title">
                        @error('airline_title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Airline Form/Departure:</label>
                        <input type="text" class="form-control" name="airline_form"
                            placeholder="Enter the departure location">
                        @error('airline_form')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Airline Destination/Arrival:</label>
                        <input type="text" class="form-control" name="airline_destination" placeholder="Enter the arrival location">
                        @error('airline_destination')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Airline Departure Date:</label>
                        <input type="date" class="form-control" name="airline_date" placeholder="Enter the departure date">
                        @error('airline_date')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Airline Departure Time:</label>
                        <input type="text" class="form-control" name="airline_departure_time" placeholder="Enter the arrival departure time">
                        @error('airline_departure_time')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Airline Arrival Time:</label>
                        <input type="text" class="form-control" name="airline_arrival_time" placeholder="Enter the arrival time">
                        @error('airline_arrival_time')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Airline Economy Seat:</label>
                        <input type="text" class="form-control" name="airline_economy_seat" placeholder="Enter the arrival economy Seat">
                        @error('airline_economy_seat')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Airline Business Seat:</label>
                        <input type="text" class="form-control" name="airline_business_seat" placeholder="Enter the arrival business seat">
                        @error('airline_business_seat')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Airline Economy Seat Price:</label>
                        <input type="text" class="form-control" name="airline_economy_price" placeholder="Enter the arrival economy seat price">
                        @error('airline_economy_price')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Airline Business Seat Price:</label>
                        <input type="text" class="form-control" name="airline_business_price" placeholder="Enter the arrival business seat price">
                        @error('airline_business_price')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Airline Payment System:</label>
                        <input type="text" class="form-control" name="airline_payment" placeholder="Enter the arrival payment system">
                        @error('airline_payment')
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