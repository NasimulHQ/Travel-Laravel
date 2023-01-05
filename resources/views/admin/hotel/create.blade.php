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
            Create Hotel  
        </h1>
        <a class="btn btn-info" href="{{ url('hotels')}}">Back</a>
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
                    <label for="">Hotel Image:</label>
                    <input type="file" class="form-control" name="hotel_image">
                    @error('hotel_image')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Hotel Title:</label>
                    <input type="text" class="form-control" name="hotel_title" placeholder="Enter the hotel title">
                    @error('hotel_title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Hotel Location:</label>
                    <input type="text" class="form-control" name="hotel_location" placeholder="Enter the hotel location">
                    @error('hotel_location')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Hotel Rating:</label>
                    <input type="text" class="form-control" name="hotel_rating" placeholder="Enter the hotel rating">
                    {{-- @error('hotel_rating')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror --}}
                </div>
                <div class="form-group">
                    <label for="">Hotel Description:</label>
                    <input type="text" class="form-control" name="hotel_description" placeholder="Enter the hotel description">
                    @error('hotel_description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Hotel Single Bed:</label>
                    <input type="text" class="form-control" name="hotel_singlebed" placeholder="Enter the hotel single bed">
                    @error('hotel_singlebed')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Hotel Double Bed:</label>
                    <input type="text" class="form-control" name="hotel_doublebed" placeholder="Enter the hotel double bed">
                    @error('hotel_doublebed')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Hotel Single Bed price:</label>
                    <input type="text" class="form-control" name="hotel_singlebed_price" placeholder="Enter the hotel single bed price">
                    @error('hotel_singlebed_price')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Hotel Double Bed price:</label>
                    <input type="text" class="form-control" name="hotel_doublebed_price" placeholder="Enter the hotel double bed price">
                    @error('hotel_doublebed_price')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Hotel Payment System:</label>
                    <input type="text" class="form-control" name="hotel_payment" placeholder="Enter the hotel payment">
                    @error('hotel_payment')
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