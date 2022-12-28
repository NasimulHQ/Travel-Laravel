@extends('front-end.layout.master')
@section('title')
Hotel Page
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

    <style>
        #tabs {
            margin-top: 100px;
            border-top: 7px solid #AC4147;
            border-radius: 0px;
            position: relative;
            margin-bottom: 70px;
            opacity: .9;
        }

        #tabs ul {
            background: none;
            border: none;
            margin-top: -60px;
            margin-left: -6px;
        }

        .ui-state-default,
        .ui-widget-content .ui-state-default,
        .ui-widget-header .ui-state-default,
        .ui-button,
        html .ui-button.ui-state-disabled:hover,
        html .ui-button.ui-state-disabled:active {
            background: #000;
            border: none;
            border-radius: 0px;
            opacity: .8;
        }

        .ui-state-active,
        .ui-widget-content .ui-state-active,
        .ui-widget-header .ui-state-active,
        a.ui-button:active,
        .ui-button:active,
        .ui-button.ui-state-active:hover {
            order: none;
            border-bottom-width: medium;
            background: #AC4147;
            font-weight: normal;
            color: #ffffff;
            opactiy: 1;
            opacity: 1.9;
        }

        #tabs ul li a:hover {
            color: #fff;
        }

        #tabs ul li a {
            padding: 13px 13px;
        }

        main-ui-tabs {
            border-top: 6px solid #AC4147;
            border-radius: 0px;
            background: red;
        }

        .ui-widget {
            font-family: 'Lato', sans-serif;
        }

        .ui-datepicker-header {
            background: #000;
        }

        .ui-widget input,
        .ui-widget select,
        .ui-widget textarea,
        .ui-widget button {
            font-family: 'Lato', sans-serif;
        }

        .current-rating {
            float: right;
            position: absolute;
            margin-left: 37%;
            margin-top: -30px;
            background: #4dba4d;
            color: #fff;
            padding: 4px 5px;
            border-radius: 4px;
        }

        .title {
            float: right;
            position: absolute;
            margin-left: 37%;
            margin-top: -30px;
            background: #4dba4d;
            color: #fff;
            padding: 4px 5px;
            border-radius: 4px;
        }

        .checked {
            color: orange;
        }

        .ui-tooltip,
        .arrow:after {
            background: black;
            border: 2px solid white;
        }

        .ui-tooltip {
            padding: 10px 20px;
            color: white;
            border-radius: 5px;
            font: bold 14px "Helvetica Neue", Sans-Serif;
            text-transform: uppercase;
            box-shadow: 0 0 7px black;
        }

        .arrow {
            width: 70px;
            height: 16px;
            overflow: hidden;
            position: absolute;
            left: 50%;
            margin-left: -35px;
            bottom: -16px;
        }

        .arrow.top {
            top: -16px;
            bottom: auto;
        }

        .arrow.left {
            left: 20%;
        }

        .arrow:after {
            content: "";
            position: absolute;
            left: 20px;
            top: -20px;
            width: 25px;
            height: 25px;
            box-shadow: 6px 5px 9px -9px black;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .arrow.top:after {
            bottom: -20px;
            top: auto;
        }

        @media screen and (max-width: 329px) {
            #nav-con {
                padding: 0;
            }
        }
    </style>

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
                <h1>Here Hotels Found</h1>
                <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Dhaka, Bangladesh</p>
            </div><!-- end main headline -->
        </div>
    </header><!-- end header section -->

    <!-- start hotel list section --->
    <section class="hotel-list">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="hotel-list-left">

                        <div class="hotel-left-border ">
                            <div class="modify-search">
                                <button class="hotel-list-left-btn wow animate slideInLeft" data-wow-duration="2s"><i
                                        class="fa fa-caret-down" aria-hidden="true"></i><i class="fa fa-caret-right"
                                        aria-hidden="true"></i>&nbsp;&nbsp;modify search result</button>
                            </div>
                            <div class="modify-search-dropdown">
                                <form id="user-search" action="{{ url('search')}}" method="GET">
                                    <p>loaction *</p>
                                    <input type="text" name="query" placeholder="Dhaka" class="modify-src"
                                        title="Where will you visit?">
                                    <p>Departure *</p>
                                    <input type="text" placeholder="mm/dd/yy" class="modify-src sm-form-control2">
                                    <p>arrival *</p>
                                    <input type="text" placeholder="mm/dd/yy" class="modify-src sm-form-control2">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <p>ADULTS *</p>
                                            <select class="sm-form" name="currency">
                                                <option value="en-US">1</option>
                                                <option value="de-DE">2</option>
                                                <option value="ja-JP">3</option>
                                                <option value="ja-JP">4</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <p>CHILDREN *</p>
                                            <select class="sm-form" name="currency">
                                                <option value="en-US">1</option>
                                                <option value="de-DE">2</option>
                                                <option value="ja-JP">3</option>
                                                <option value="ja-JP">4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="modify-dropdown-btn">search</button>
                                </form>
                            </div>
                        </div>
                        <!-- hotel left price -->
                        <div class="hotel-left-price">
                            <h4>PRICE</h4>
                            <div class="check-div">
                                <ul>
                                    <li>
                                        <div class="hotel-left-check">

                                        </div>
                                    </li>
                                    <li>
                                        <p>0-500</p>
                                    </li>
                                </ul>
                            </div><br><br>
                            <div class="check-div">
                                <ul>
                                    <li>
                                        <div class="hotel-left-check"></div>
                                    </li>
                                    <li>
                                        <p>501-1000</p>
                                    </li>
                                </ul>
                            </div><br><br>
                            <div class="check-div">
                                <ul>
                                    <li>
                                        <div class="hotel-left-check"></div>
                                    </li>
                                    <li>
                                        <p>1001-1500</p>
                                    </li>
                                </ul>
                            </div><br><br>
                            <div class="check-div">
                                <ul>
                                    <li>
                                        <div class="hotel-left-check"></div>
                                    </li>
                                    <li>
                                        <p>1501-2000</p>
                                    </li>
                                </ul>
                            </div><br><br>
                        </div>

                        <div class="rating">
                            <h4 style="margin-bottom: 20px;">STAR RATING</h4>
                            <div class="stars stars-example-fontawesome-o">
                                <select id="example-fontawesome-o" name="rating" data-current-rating="5"
                                    autocomplete="off">
                                    <option value=""></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>

                                </select>
                                <span class="title current-rating">
                                    Rating: <span class="value"></span>
                                </span>
                                <span class="title your-rating hidden">
                                    Your rating: <span class="value"></span>&nbsp;
                                    <a href="#" class="clear-rating"><i class="fa fa-times-circle"></i></a>
                                </span>
                            </div>
                        </div>
                        

                    </div><!-- end left option -->
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="hotel-list-right">
                        
                        @foreach ($hotel as $show)
                        <div class="first-hotel wow animate bounceIn" data-wow-duration="2s" style="animation-delay:1s">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('uploads/hotels/'.$show->hotel_image)}}" alt="image">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <h2>{{$show->hotel_title}}</h2>
                                    <table>
                                        <tr>
                                            <td>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star"></span>
                                                &nbsp;&nbsp;/
                                            </td>
                                            <td>
                                                <p class="map-p"><i class="fa fa-map-o" aria-hidden="true"></i>&nbsp;
                                                    View Map &nbsp; / </p>
                                            </td>
                                            <td>
                                                <p>&nbsp;<i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp;24
                                                    Reviews</p>
                                            </td>
                                        </tr>
                                    </table>
                                    <ul>
                                        <li><i class="fa fa-wifi" aria-hidden="true" title="wifi"></i></li>
                                        <li><i class="fa fa-glass" aria-hidden="true" title="Bar"></i></li>
                                        <li><i class="fa fa-random" aria-hidden="true" title="A/C"></i></li>
                                        <li><i class="fa fa-cutlery" aria-hidden="true" title="Resturant"></i></li>
                                        <li style="background:#d1d1d1;"><i class="fa fa-arrows-h" aria-hidden="true"
                                                title="GYM not Avilable"></i></li>
                                        <li><i class="fa fa-bell" aria-hidden="true" title="Room Service"></i></li>
                                        <li><i class="fa fa-coffee" aria-hidden="true" title="Cafe"></i></li>
                                    </ul>
                                    <p class="hotel-title">
                                        {{ $show->hotel_location}}
                                    </p>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <h1>{{ $show->hotel_price}}</h1>
                                    <h5>Price per Night</h5><br>
                                    <a href="{{ route('book-now', ['id'=>$show->id]) }}" class="hotel-right-btn">Book
                                        now</a>
                                    {{-- <button class="hotel-right-btn">book now</button> --}}
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section><!-- end hotel list section --->






    <!--js link-->



    <script>
        particlesJS.load('particles-js', 'particles.json', function(){
      console.log('particles.json loaded...');
    });
	new WOW().init();
    </script>
    <script>
        $(document).ready(function(){
            $("#user-search").on('submit', function(e){
                e.preventDefault();
                console.log($(this).serialize());
                 let url = "/extra";
                 $.ajax({
                type: "GET",
                url: url,
                dataType:"json",
                success: function(response){
                console.log(response)
                }
                });
            })

            
        })
    </script>
</body>

</html>
@endsection