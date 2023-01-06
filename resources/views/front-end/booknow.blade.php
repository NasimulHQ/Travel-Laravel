@extends('front-end.layout.master')
@section('title')
Hotel Booking Details Page
@endsection
@section('content')
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel.com/hotel</title>

    <link href="css/main.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/jquery.bxslider.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/dark-hive/jquery-ui.css">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.default.css" rel="stylesheet">
    <link href="themes/fontawesome-stars-o.css" rel="stylesheet">
    <link href="themes/examples.css" rel="stylesheet">
    <link href="themes/css-stars.css" rel="stylesheet">


</head>

<body>
    <!-- start header section -->
    <header>
        <div id="particles-js" class="hotel-head">
            <!--top nav-->
            <div class="container" id="nav-con">
                {{-- navbar --}}
                @include('front-end.layout.navbar')
            </div>
            <!-- end top nav -->
            <!-- main headline -->
            <div class="main-headline wow animate bounceIn" data-wow-duration="1.8s">
                <h1>Hotels Details</h1>
                <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Dhaka, Bangladesh</p>
            </div><!-- end main headline -->
        </div>
    </header><!-- end header section -->

    <div class="container mt-3">
        <div class="row">
            <div class="card" style="">
            <div class="card-header" style="margin-top: 10px; border-radius: 15px;"></div>
                <div class="card-body">

                    <div class="col-md-2"></div>
                    <div class="col-sm-8">
                        <div class="card">
                            <div class="image">
                            <img src="{{ asset('uploads/hotels/'.$hotel->hotel_image)}}"  height="280px" alt="image">
                            </div>
                            <div class="card-inner">
                                <div class="header">
                                    <h2>Name: {{$hotel->hotel_title}}</h2>
                                    <p>Short Des: {{$hotel->hotel_description}}</p>

                                    <div class="header-body">
                                    <h4>Rating: {{$hotel->hotel_rating}} Star</h4>
                                    <h4>Location: {{$hotel->hotel_location}}</h4>
                                    <div class="col-md-6">
                                        <h4>Single Bed: {{$hotel->hotel_singlebed}}</h4>
                                        <h4>Double Bed: {{$hotel->hotel_doublebed}}</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>SingleBed Price: {{$hotel->hotel_singlebed_price}}</h4>
                                        <h4>DoubleBed Price: {{$hotel->hotel_doublebed_price}}</h4>
                                    </div>
                                    
                                    <h4>Payment System: {{$hotel->hotel_payment}}</h4>    
                                    </div>
                                    
                                </div>
                                <a href="{{ route('client-detail') }}" class="btn btn-primary"
                                style="margin: 20px 240px; padding:10px 30px; background: #983333">Continue</a>
                                {{-- <a href="" class="btn btn-primary">Book</a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2"></div>
                    
                </div>
            </div>
        </div>
    </div>
 <style>
    /* body {
    background: #eeeded;
    } */
    
    .card {
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
    transition: all 0.2s ease-in-out;
    box-sizing: border-box;
    margin-top:10px;
    margin-bottom:10px;
    background-color:#FFF;
    }
    
    .card:hover {
    box-shadow: 0 5px 5px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
    }
    .card > .card-inner {
    padding:10px;
    }
    .card .header h2, h3 {
    margin-bottom: 0px;
    margin-top:0px;
    }
    .card .header {
    margin-bottom:5px;
    }
    .card img{
    width:100%;
    }
 </style>

</body>

</html>
@endsection