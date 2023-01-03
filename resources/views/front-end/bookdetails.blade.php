@extends('front-end.layout.master')
@section('title')
Flight Booking Details Page
@endsection
@section('content')
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel.com/Flight</title>

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
  <header class="holidays-header">
    <div class="holidays-video">
        <video autoplay loop class="video-background" muted plays-inline>
            <source src="{{ asset('front') }}/video/2.mp4">
        </video>
    </div>
    <div class="container">
        <!-- main-nav -->
        @include('front-end.layout.navbar')
        <!-- end Main-Nav -->
    </div>
    <div class="main-headline wow animate bounceIn" data-wow-duration="1.8s" style="text-align: center; margin-top:180px; color:white">
        <h1 style="font-size:60px;">Flight Details</h1>
        <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Dhaka, Bangladesh</p>
    </div>
</header>
    <!-- end header section -->

 <section>
    <div class="container" style="margin-top: 300px;">
        <div class="row">
            <div class="col-md-8">
                <div class="card" style="margin-top: 10px; border-radius: 15px;">
                    <div class="image">
                        <img src="{{ asset('uploads/flights/'.$flight->airline_image)}}" height="280px" alt="image">
                    </div>
                    <div class="card-inner">
                        <div class="header">
                            <div class="firststep">
                                <div class="col-sm-6">
                                    <h2>Airline Name</h2>
                                </div>
                                <div class="col-sm-6">
                                    <h2>{{$flight->airline_title}}</h2>
                                </div>
                            </div>
                            <div class="secondstep">
                                <div class="col-sm-4">
                                    <h5>Depart</h5>
                                    <h2>{{$flight->airline_departure_time}}</h2>
                                    <h5>{{$flight->airline_date}}</h5>
                                    <h3>{{$flight->airline_form}}</h3>
                                </div>
                                <div class="col-sm-4" style="margin-top: 45px;">
                                    <p>Duration</p>
                                    <h5>{{ $flight->airline_duration}}</h5>
                                </div>
                                <div class="col-sm-4">
                                    <h5>Arrival</h5>
                                    <h2>{{$flight->airline_arrival_time}}</h2>
                                    <h5>{{$flight->airline_date}}</h5>
                                    <h3>{{$flight->airline_destination}}</h3>
                                </div>
                            </div>
                            <a href="{{ route('traveler-detail') }}" class="btn btn-primary" style="margin: 20px 240px; padding:10px 30px; background: #983333">Continue</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card" style="margin-top: 10px; border-radius: 15px;">
                    <div class="card-inner" style="height: 300px;">
                        <div class="header">
                            <div class="firststep">
                                <h2>{{$flight->airline_title}}</h2>
                            </div><br>
                            <div class="secondstep">
                                <h4>Fare Summary</h4>
                                <div class="col-sm-6">
                                    <h5>Economy Seat</h5>
                                    <h2>{{$flight->airline_economy_seat}}</h2>
                                    <h5>Business Seat</h5>
                                    <h3>{{$flight->airline_business_seat}}</h3>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Economy Price</h5>
                                    <h2>{{ $flight->airline_economy_price}} tk</h2>
                                    <h5>Business Price</h5>
                                    <h2>{{ $flight->airline_business_price}} tk</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
    <style>
        /* body {
    background: #eeeded;
    } */

        .card {
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            transition: all 0.2s ease-in-out;
            box-sizing: border-box;
            margin-top: 10px;
            margin-bottom: 10px;
            background-color: #FFF;
        }

        .card:hover {
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
        }

        .card>.card-inner {
            padding: 10px;
        }

        .card .header h2,
        h3 {
            margin-bottom: 0px;
            margin-top: 0px;
        }

        .card .header {
            margin-bottom: 5px;
        }

        .card img {
            width: 100%;
        }
    </style>

</body>

</html>
@endsection