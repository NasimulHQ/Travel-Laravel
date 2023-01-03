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
            Edit Flight
        </h1>
        <a class="btn btn-info" href="{{ url('flightdash')}}">Back</a>
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
            <form action="{{ url('update-flight/'.$flight->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Airline Image:</label>
                        <input type="file" class="form-control" name="airline_image">
                        <img src="{{ asset('uploads/flights/'.$flight->airline_image)}}" height="80px" width="80px" alt="image">
                        @error('airline_image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Airline Title:</label>
                        <input type="text" class="form-control" name="airline_title" 
                        value="{{ $flight->airline_title}}" placeholder="Enter the airline title">
                        @error('airline_title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Airline Flight Number:</label>
                        <input type="text" class="form-control" name="airline_flight_num" value="{{ $flight->airline_flight_num}}"
                            placeholder="Enter the airline flight number">
                        @error('airline_title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Airline Form/Departure:</label>
                        <input type="text" class="form-control" name="airline_form"
                        value="{{ $flight->airline_form }}" placeholder="Enter the departure location">
                        @error('airline_form')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Airline Destination/Arrival:</label>
                        <input type="text" class="form-control" name="airline_destination" value="{{ $flight->airline_destination }}"
                        placeholder="Enter the arrival location">
                        @error('airline_destination')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Airline Departure Date:</label>
                        <input type="date" class="form-control" name="airline_date"
                        value="{{ $flight->airline_date }}" placeholder="Enter the departure date">
                        @error('airline_date')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Airline Departure Time:</label>
                        <input type="text" class="form-control" name="airline_departure_time"
                        value="{{ $flight->airline_departure_time }}" placeholder="Enter the arrival departure time">
                        @error('airline_departure_time')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Airline Arrival Time:</label>
                        <input type="text" class="form-control" name="airline_arrival_time"
                        value="{{ $flight->airline_arrival_time }}" placeholder="Enter the arrival time">
                        @error('airline_arrival_time')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Airline Duration Time:</label>
                        <input type="text" class="form-control" name="airline_duration"
                        value="{{ $flight->airline_duration }}" placeholder="Enter the duration time">
                        @error('airline_duration')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Airline Economy Seat:</label>
                        <input type="text" class="form-control" name="airline_economy_seat"
                        value="{{ $flight->airline_economy_seat }}" placeholder="Enter the arrival economy Seat">
                        @error('airline_economy_seat')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Airline Business Seat:</label>
                        <input type="text" class="form-control" name="airline_business_seat"
                        value="{{ $flight->airline_business_seat }}" placeholder="Enter the arrival business seat">
                        @error('airline_business_seat')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Airline Economy Seat Price:</label>
                        <input type="text" class="form-control" name="airline_economy_price"
                        value="{{ $flight->airline_economy_price }}" placeholder="Enter the arrival economy seat price">
                        @error('airline_economy_price')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Airline Business Seat Price:</label>
                        <input type="text" class="form-control" name="airline_business_price"
                        value="{{ $flight->airline_business_price }}" placeholder="Enter the arrival business seat price">
                        @error('airline_business_price')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Airline Payment System:</label>
                        <input type="text" class="form-control" name="airline_payment"
                        value="{{ $flight->airline_payment }}" placeholder="Enter the arrival payment system">
                        @error('airline_payment')
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