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
                <h1>53 Hotels Found</h1>
                <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Dhaka, Bangladesh</p>
            </div><!-- end main headline -->
        </div>
    </header><!-- end header section -->

    


<h1>Hello brother</h1>
<h3>we can start from here, today</h3>


  

</body>

</html>
@endsection