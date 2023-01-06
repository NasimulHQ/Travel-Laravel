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

    <section>
        <div class="container" style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card" style="margin-top: 10px; border-radius: 15px;">
                        <div class="card-inner">
                            <div class="header">
                                <div class="firststep">
                                    <h1>
                                        Client Details
                                    </h1>
                                </div><br>
                                <div class="secondstep">
                                    @if (session('status'))
                                    <h5 class="alert alert-success">{{ session('status')}}</h5>
                                    @endif
                                    <div class="box">
                                        <div class="box-body">
                                            <form action="{{ route('client-submit')}}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="client_no" value="{{$client_no}}">
                                                <div class="form-group">
                                                    <label for="">Name</label>
                                                    <input type="text" class="form-control" name="cl_name"
                                                        placeholder="Enter Your Full Name">
                                                    @error('cl_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Room Type</label>
                                                    <select class="form-control" name="cl_bed">
                                                        <option selected value="SingleBed">Single Bed</option>
                                                        <option value="DoubleBed">Double Bed</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">NID Number:</label>
                                                    <input type="text" class="form-control" name="cl_nid"
                                                        placeholder="Enter your NID Number">
                                                    @error('cl_nid')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Date of Birth</label>
                                                    <input type="date" class="form-control" name="cl_date_of_birth">
                                                    @error('cl_date_of_birth')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="">City</label>
                                                    <input type="text" class="form-control" name="cl_city"
                                                        placeholder="Enter your City">
                                                    @error('cl_city')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Country</label>
                                                    <input type="text" class="form-control" name="cl_country"
                                                        placeholder="Enter your Country Name">
                                                    @error('cl_country')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <br>
                                                <h2>Contact Details</h2>
                                                <div class="form-group">
                                                    <label for="">Email</label>
                                                    <input type="text" class="form-control" name="cl_email"
                                                        placeholder="Enter your Email">
                                                    @error('cl_email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Phone Number</label>
                                                    <input type="number" class="form-control" name="cl_phone"
                                                        placeholder="Enter your Phone Number">
                                                    @error('cl_phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
    
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-success" name="submit"
                                                        value="Submit" style="background: #983333; padding:10px 30px;">
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