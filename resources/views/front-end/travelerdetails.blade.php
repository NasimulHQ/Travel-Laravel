@extends('front-end.layout.master')
@section('title')
Flight Booking Traveler Details Page
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
        <div class="main-headline wow animate bounceIn" data-wow-duration="1.8s"
            style="text-align: center; margin-top:180px; color:white">
            <h1 style="font-size:60px;">Traveler Details</h1>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Dhaka, Bangladesh</p>
        </div>
    </header>
    <!-- end header section -->
    <section>
        <div class="container" style="margin-top: 300px;">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card" style="margin-top: 10px; border-radius: 15px;">
                        <div class="card-inner">
                            <div class="header">
                                <div class="firststep">
                                   <h1>
                                        Traveler Details
                                    </h1>
                                </div><br>
                                <div class="secondstep">
                                    @if (session('status'))
                                    <h5 class="alert alert-success">{{ session('status')}}</h5>
                                    @endif
                                    <div class="box">
                                        <div class="box-body">
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="">Name</label>
                                                    <input type="text" class="form-control" name="airline_image" placeholder="Enter Your Full Name">
                                                    @error('airline_image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                
                                                    <div class="form-group">
                                                        <label for="">Seat Class</label>
                                                        <select class="form-control">
                                                            <option selected value="1">Economy</option>
                                                            <option value="2">Business</option>
                                                        </select>
                                                    </div>
                                                
                                               
                                                <div class="form-group">
                                                    <label for="">Passport Number:</label>
                                                    <input type="text" class="form-control" name="airline_title" placeholder="Enter your Passport Number">
                                                    @error('airline_title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Date of Birth</label>
                                                    <input type="date" class="form-control" name="airline_form">
                                                    @error('airline_form')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Passport Expiry Date</label>
                                                    <input type="date" class="form-control" name="airline_destination">
                                                    @error('airline_destination')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="">City</label>
                                                    <input type="text" class="form-control" name="airline_date" placeholder="Enter your City">
                                                    @error('airline_date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Country</label>
                                                    <input type="text" class="form-control" name="airline_departure_time"
                                                        placeholder="Enter your Country Name">
                                                    @error('airline_departure_time')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <br>
                                                <h2>Contact Details</h2>
                                                <div class="form-group">
                                                    <label for="">Email</label>
                                                    <input type="text" class="form-control" name="airline_arrival_time"
                                                        placeholder="Enter your Email">
                                                    @error('airline_arrival_time')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Phone Number</label>
                                                    <input type="number" class="form-control" name="airline_duration" placeholder="Enter your Phone Number">
                                                    @error('airline_duration')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                    
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-success" name="submit" value="Submit" style="background: #983333; padding:10px 30px;">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    <style>
        
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