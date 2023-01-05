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
        <a class="btn btn-primary" href="{{ url('hotels')}}">Back</a>
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
                <form action="{{ url('update-hotel/'.$hotel->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Hotel Image:</label>
                        <input type="file" class="form-control" name="hotel_image">
                        <img src="{{ asset('uploads/hotels/'.$hotel->hotel_image)}}" height="80px" width="80px" alt="image">
                        @error('hotel_image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Hotel Title:</label>
                        <input type="text" class="form-control" name="hotel_title" 
                        value="{{ $hotel->hotel_title}}" placeholder="Enter the hotel title">
                        @error('hotel_title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Hotel Location:</label>
                        <input type="text" class="form-control" name="hotel_location"
                        value="{{ $hotel->hotel_location }}" placeholder="Enter the hotel location">
                        @error('hotel_location')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Hotel Ratig:</label>
                        <input type="text" class="form-control" name="hotel_rating" 
                        value="{{ $hotel->hotel_rating}}" placeholder="Enter the hotel rating">
                        {{-- @error('hotel_price')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror --}}
                    </div>
                    <div class="form-group">
                        <label for="">Hotel Description:</label>
                        <input type="text" class="form-control" name="hotel_description" value="{{ $hotel->hotel_description }}" placeholder="Enter the hotel description">
                        @error('hotel_description')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Hotel Single Bed:</label>
                        <input type="text" class="form-control" name="hotel_singlebed" value="{{ $hotel->hotel_singlebed }}" placeholder="Enter the hotel single bed">
                        @error('hotel_singlebed')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Hotel Double Bed:</label>
                        <input type="text" class="form-control" name="hotel_doublebed" value="{{ $hotel->hotel_doublebed }}" placeholder="Enter the hotel double bed">
                        @error('hotel_doublebed')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Hotel Single Bed price:</label>
                        <input type="text" class="form-control" name="hotel_singlebed_price" value="{{ $hotel->hotel_singlebed_price }}" placeholder="Enter the hotel single bed price">
                        @error('hotel_singlebed_price')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Hotel Double Bed price:</label>
                        <input type="text" class="form-control" name="hotel_doublebed_price" value="{{ $hotel->hotel_doublebed_price }}" placeholder="Enter the hotel double bed price">
                        @error('hotel_doublebed_price')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Hotel Payment System:</label>
                        <input type="text" class="form-control" name="hotel_payment" value="{{ $hotel->hotel_payment }}" placeholder="Enter the hotel payment">
                        @error('hotel_payment')
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