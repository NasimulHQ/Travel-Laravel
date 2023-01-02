@extends('front-end.layout.master')
@section('title')
Flight Page 
@endsection

@section('content')
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
</style>


</head>

<body>

    <!-- start header section -->
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

        {{-- search flight start --}}
        <div class="holidays-header-title">
            <h2>Choose Your Flights Destination</h2>
            <div class="holidays-header-form wow animate fadeInRightBig" data-wow-duration="1.5s">
                <form action="{{ url('check')}}" method="GET">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <input type="text" name="departure" placeholder="Form" class="holidays-header-src">
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <input type="text" name="arrive" placeholder="Destination" class="holidays-header-src">
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <input type="text" name="flydate" placeholder="mm/dd/yy" class="holidays-header-src" id="flights-header-date">
                        </div>
                    </div>
                    <button class="flights-header-btn">Check Rates</button>
                </form>
            </div>
        </div>
        {{-- search flight end --}}

    </header><!-- end header section -->

    <!-- start holidays heading -->

    <section class="flights-heading">
        <div class="container">
            <h2>Most Popular Flights for You</h2>
            {{-- <h2>Sign Up for Travel Deals:</h2> --}}
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-9" style="width: 100%">
                        <div class="hotel-list-right">
                    
                            @foreach ($flight as $fshow)
                            <div class="first-hotel wow animate bounceIn" data-wow-duration="2s" style="animation-delay:1s">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="{{ asset('uploads/flights/'.$fshow->airline_image)}}" alt="image">
                                    </div>
                                    <div class="col-md-6 col-sm-6" style="text-align: left">
                                        <h2>{{ $fshow->airline_title }}</h2>
                                        
                                     <div class="col-md-12" style="margin-top: -40px">
                                        <div class="col-md-3">
                                                <h3 class="hotel-title">
                                                    <span>
                                                    {{$fshow->airline_departure_time }}   ----
                                                    {{ $fshow->airline_form }} 
                                                    </span>
                                                    </h3>
                                        </div>
                                        <div class="col-md-3">
                                            <h3 class="hotel-title">
                                                <span>
                                                    {{$fshow->airline_arrival_time }}
                                                   
                                                    {{ $fshow->airline_destination }}
                                                </span>
                                            </h3>
                                        </div>
                                        <div class="col-md-4" style="margin-top: 85px">
                                            <p>{{ $fshow->airline_duration }}</p>
                                        </div>
                                     </div>
                
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <h1>{{ $fshow->airline_economy_price }} tk</h1>
                                        <h5>Price Start</h5><br>
                                        <a href="{{ route('book-details', ['id'=>$fshow->id]) }}" class="hotel-right-btn">Book
                                            now</a>
                                        {{-- <button class="hotel-right-btn">book now
                                        </button> --}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                    
                        </div>
                    </div>
                </div>
                {{-- <form>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <input type="text" placeholder="From*" class="flights-heading-src"
                                title="Please Fillup this section">
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <input type="text" placeholder="To*" class="flights-heading-src"
                                title="Please Fillup this section">
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <input type="text" placeholder="Departure Date-mm/dd-yy" class="flights-heading-src"
                                id="flights-header-date3">

                        </div>
                    </div>

                    <div class="row" style="margin-top:30px;">
                        <div class="col-md-4 col-sm-4">
                            <input type="text" placeholder="Return Date-mm/dd-yy" class="flights-heading-src"
                                id="flights-header-date2">
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <input type="text" placeholder="Name*" class="flights-heading-src"
                                title="Please Enter Your full name">
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <input type="text" placeholder="Email*" class="flights-heading-src"
                                title="Please Enter Your valid email">

                        </div>
                    </div>

                    <div class="travel-btn">
                        <a href="{{ asset('front') }}/#">subscribe</a>
                    </div>
                </form> --}}
            </div>
        </div>
    </section><!-- end holidays heading -->

    <!-- start holidays slider -->
    <section class="holidays-slider">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h2>Today's Top Deals</h2>
                    <div class="flights-slider">
                        <div id="jssor_1"
                            style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:700px;overflow:hidden;visibility:hidden;">
                            <!-- Loading Screen -->
                            <div data-u="loading" class="jssorl-009-spin"
                                style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                                <img style="margin-top:-19px;position:relative;top:50%;width:138px;height:238px;"
                                    src="{{ asset('front') }}/../svg/loading/static-svg/spin.svg" />
                            </div>
                            <div data-u="slides"
                                style="cursor:default;position:relative;top:0px;left:0px;width:980px;height: 600px;overflow:hidden;">
                                <div>
                                    <img data-u="image" src="{{ asset('front') }}/image/51.jpg" />
                                    <img data-u="thumb" src="{{ asset('front') }}/image/51.jpg" />
                                    <div class="holidays-slider-txt">
                                        <h1>Allegiant offering free flights</h1>
                                        <p>5 nights | starting form $2999</p>
                                    </div>
                                </div>
                                <div>
                                    <img data-u="image" src="{{ asset('front') }}/image/52.jpg" />
                                    <img data-u="thumb" src="{{ asset('front') }}/image/52.jpg" />
                                    <div class="holidays-slider-txt">
                                        <h1>Qantas Flights Sydney To Heathrow</h1>
                                        <p>5 nights | starting form $2999</p>
                                    </div>
                                </div>
                                <div>
                                    <img data-u="image" src="{{ asset('front') }}/image/53.jpg" />
                                    <img data-u="thumb" src="{{ asset('front') }}/image/53.jpg" />
                                    <div class="holidays-slider-txt">
                                        <h1>Book flights, offers, Miles & More</h1>
                                        <p>5 nights | starting form $2999</p>
                                    </div>
                                </div>
                                <div>
                                    <img data-u="image" src="{{ asset('front') }}/image/54.jpg" />
                                    <img data-u="thumb" src="{{ asset('front') }}/image/54.jpg" />
                                    <div class="holidays-slider-txt">
                                        <h1>Emirates flights – Book a flight</h1>
                                        <p>5 nights | starting form $2999</p>
                                    </div>
                                </div>
                                <div>
                                    <img data-u="image" src="{{ asset('front') }}/image/55.jpg" />
                                    <img data-u="thumb" src="{{ asset('front') }}/image/55.jpg" />
                                    <div class="holidays-slider-txt">
                                        <h1>PIA's Karachi-bound flight</h1>
                                        <p>5 nights | starting form $2999</p>
                                    </div>
                                </div>
                                <div>
                                    <img data-u="image" src="{{ asset('front') }}/image/56.jpg" />
                                    <img data-u="thumb" src="{{ asset('front') }}/image/56.jpg" />
                                    <div class="holidays-slider-txt">
                                        <h1>Air Baltic cheapest flights</h1>
                                        <p>5 nights | starting form $2999</p>
                                    </div>
                                </div>


                            </div>
                            <!-- Thumbnail Navigator -->
                            <div data-u="thumbnavigator" class="jssort101"
                                style="position:absolute;left:0px;bottom:0px;width:980px;height:120px;background-color:#000;"
                                data-autocenter="1" data-scale-bottom="0.75">
                                <div data-u="slides">
                                    <div data-u="prototype" class="p" style="width:190px;height:125px;">
                                        <div data-u="thumbnailtemplate" class="t"></div>
                                        <svg viewBox="0 0 16000 16000" class="cv">
                                            <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                                            <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                                            <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!-- Arrow Navigator -->
                            <div data-u="arrowleft" class="jssora106"
                                style="width:70px;height:70px;top: 240.939px;left:30px;" data-scale="0.75">
                                <svg viewBox="0 0 16000 16000"
                                    style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                    <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                                    <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                                    <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
                                </svg>
                            </div>
                            <div data-u="arrowright" class="jssora106"
                                style="width:70px;height:70px;top:240.939px;right:30px;" data-scale="0.75">
                                <svg viewBox="0 0 16000 16000"
                                    style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                    <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                                    <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                                    <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="map-title" id="holidays-slider-title">
                        <h2>Popular Destinations</h2>

                        <div class="map-text wow animate slideInRight" data-wow-duration="1.5s"
                            style="animation-delay:1s;">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <img src="{{ asset('front') }}/image/10.jpg">
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <h4><a href="{{ asset('front') }}/#">7 Nights/8 Days Europe</a></h4>
                                    <p><span>$599 </span>onwards</p>
                                </div>
                            </div>
                        </div>

                        <div class="map-text wow animate slideInRight" data-wow-duration="1.5s"
                            style="animation-delay:1.6s;">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <img src="{{ asset('front') }}/image/11.jpg">
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <h4><a href="{{ asset('front') }}/#">4 Nights/5 Days Thailand</a></h4>
                                    <p><span>$599 </span>onwards</p>
                                </div>
                            </div>
                        </div>

                        <div class="map-text wow animate slideInRight" data-wow-duration="1.5s"
                            style="animation-delay:2.2s;">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <img src="{{ asset('front') }}/image/12.jpg">
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <h4><a href="{{ asset('front') }}/#">11 Nights/12 Days America</a></h4>
                                    <p><span>$599 </span>onwards</p>
                                </div>
                            </div>
                        </div>

                        <div class="map-text wow animate slideInRight" data-wow-duration="1.5s"
                            style="animation-delay:3.2s;">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <img src="{{ asset('front') }}/image/5.png">
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <h4><a href="{{ asset('front') }}/#">14 Nights/15 Days New Zealand</a></h4>
                                    <p><span>$599 </span>onwards</p>
                                </div>
                            </div>
                        </div>

                        <div class="map-text wow animate slideInRight" style="border:none;animation-delay:3.9s;"
                            data-wow-duration="1.5s">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <img src="{{ asset('front') }}/image/50.jpg">
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <h4><a href="{{ asset('front') }}/#">14 Nights/15 Days New Zealand</a></h4>
                                    <p><span>$599 </span>onwards</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section><!-- end holidays-slider -->

    <!-- start gallery section -->

    {{-- <section class="gallery-section" id="flights-gallery">
        <div class="container-fluid">
            <div class="gallery-heading">
                <p>What are you in the Mood for.?</p>
                <h1>Tailor made Packages for you</h1>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3 wow animate ">
                    <div class="gallery-img wow animate fadeInDown" id="beatch-activities" style="animation-delay: 1s;">
                        <img src="{{ asset('front') }}/image/2.jpg">
                        <h3>BEATCH ACTIVITIES</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="gallery-img wow animate fadeInDown" id="romactic" style="animation-delay: 1.3s;">
                        <img src="{{ asset('front') }}/image/3.jpg">
                        <h3>ROMANTIC GETWAYS</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="gallery-img wow animate fadeInDown" id="active-explorer" style="animation-delay: 1.6s;">
                        <img src="{{ asset('front') }}/image/4.jpg">
                        <h3>ACTIVE EXPLORER</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="gallery-img wow animate fadeInDown" id="family" style="animation-delay: 2s;">
                        <img src="{{ asset('front') }}/image/5.jpg">
                        <h3>FAMILY PACK</h3>
                    </div>
                </div>
            </div>
            <div class="row" id="gallery-row">
                <div class="col-md-3 col-sm-3">
                    <div class="gallery-img wow animate fadeInDown" id="mountain" style="animation-delay: 2.3s;">
                        <img src="{{ asset('front') }}/image/6.jpg">
                        <h3>MOUNTAIN MADNESS</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="gallery-img wow animate fadeInDown" id="hill" style="animation-delay: 2.6s;">
                        <img src="{{ asset('front') }}/image/7.jpg">
                        <h3>HILL TREKKING</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="gallery-img wow animate fadeInDown" id="forest" style="animation-delay: 3s;">
                        <img src="{{ asset('front') }}/image/8.jpg">
                        <h3>FOREST CAMPING</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="gallery-img wow animate fadeInDown" id="long-journey" style="animation-delay:3.3s;">
                        <img src="{{ asset('front') }}/image/9.jpg">
                        <h3>LONG JOURNEY</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end gallery section --> --}}

    <!-- start footer section -->
    {{-- <section class="footer" id="holidays-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="footer-txt">
                        <p>call us :</p>
                        <h2>(91) 22 84551445 </h2>
                        <p>Send an Enquiry:</p>
                        <h2>travel@canvas.com </h2>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="ficon">
                                    <ul class="footer-ul">
                                        <li class="icon">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </li>
                                        <li><a href="{{ asset('front') }}/#">Like us <br>on Facebook</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="ficon">
                                    <ul class="footer-ul">
                                        <li class="icon" id="rss">
                                            <i class="fa fa-rss" aria-hidden="true"></i>
                                            <i class="fa fa-rss" aria-hidden="true"></i>
                                        </li>
                                        <li><a href="{{ asset('front') }}/#">Subscribe <br> to RSS Feeds</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="footer-txt" id="fpackage">
                        <h3>Featured Packages</h3>
                        <div class="footerp">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <img src="{{ asset('front') }}/image/17.jpg">
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <h4><a href="{{ asset('front') }}/#">7 Nights/8 Days Europe</a></h4>
                                    <p>$599 onwards</p>
                                </div>
                            </div>
                        </div>

                        <div class="footerp">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <img src="{{ asset('front') }}/image/18.jpg">
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <h4><a href="{{ asset('front') }}/#">4 Nights/5 Days Thailand</a></h4>
                                    <p>$399 onwards</p>
                                </div>
                            </div>
                        </div>

                        <div class="footerp" style="border:none;">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <img src="{{ asset('front') }}/image/19.jpg">
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <h4><a href="{{ asset('front') }}/#">11 Nights/12 Days America</a></h4>
                                    <p>$1299 onwards</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="footer-txt">
                        <h3>Popular Destinations</h3>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="destination">
                                    <p><a href="{{ asset('front') }}/#"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>&nbsp;Thailand</a></p>
                                    <p><a href="{{ asset('front') }}/#"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>&nbsp;Indonesia</a></p>
                                    <p><a href="{{ asset('front') }}/#"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>&nbsp;Italy</a>
                                    </p>
                                    <p><a href="{{ asset('front') }}/#"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>&nbsp;Spain</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="destination">
                                    <p><a href="{{ asset('front') }}/#"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>&nbsp;France</a>
                                    </p>
                                    <p><a href="{{ asset('front') }}/#"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>&nbsp;Bangladesh</a></p>
                                    <p><a href="{{ asset('front') }}/#"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>&nbsp;Philippines</a></p>
                                    <p><a href="{{ asset('front') }}/#"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>&nbsp;New
                                            Zealand</a></p>
                                </div>
                            </div>
                        </div>
                        <h4 class="get-latest">Get Latest <span>Offers</span> & <span>Coupons</span> by Email:</h4>
                        <form>
                            <table>
                                <td><button class="footer-txt-btn" style="cursor: auto;"><i class="fa fa-paper-plane-o"
                                            aria-hidden="true"></i></button></td>
                                <td><input type="text" placeholder="Enter your Email" class="footer-txt-src"></td>
                                <td><button class="footer-txt-btn" id="suscribe">Subscribe</button></td>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
    </section> --}}
    <!-- end footer section -->


    <!-- start footer-bottom section -->
    {{-- <section class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="footer-bottom-txt">
                        <p>Copyrights &copy; 2017 All Rights Reserved by Travel Inc.</p>
                        <p><a href="{{ asset('front') }}/#">Terms of Use</a>/<a href="{{ asset('front') }}/#"
                                style="margin-left:15px;">Privacy Policy</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="footer-bottom-icon">
                        <ul>
                            <li class="facebook"><a href="{{ asset('front') }}/#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a></li>
                            <li class="twitter"><a href="{{ asset('front') }}/#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a></li>
                            <li class="gplus"><a href="{{ asset('front') }}/#">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                </a></li>
                            <li class="vimeo"><a href="{{ asset('front') }}/#">
                                    <i class="fa fa-vimeo" aria-hidden="true"></i>
                                    <i class="fa fa-vimeo" aria-hidden="true"></i>
                                </a></li>
                            <li class="pinterest"><a href="{{ asset('front') }}/#">
                                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                </a></li>
                            <li class="git"><a href="{{ asset('front') }}/#">
                                    <i class="fa fa-git" aria-hidden="true"></i>
                                    <i class="fa fa-git" aria-hidden="true"></i>
                                </a></li>
                            <li class="yahoo"><a href="{{ asset('front') }}/#">
                                    <i class="fa fa-yahoo" aria-hidden="true"></i>
                                    <i class="fa fa-yahoo" aria-hidden="true"></i>
                                </a></li>
                            <li class="linkedin"><a href="{{ asset('front') }}/#">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}




    {{-- <div class="scroll-btn">

    </div> --}}



    <!--js link-->

    {{-- <script src="{{ asset('front') }}/js/main.js"></script>
    <script src="{{ asset('front') }}/js/jquery.bxslider.min.js"></script>
    <script src="{{ asset('front') }}/js/jquery.easing.1.3.js"></script>
    <script src="{{ asset('front') }}/js/bootstrap.js"></script>
    <script src="{{ asset('front') }}/https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="{{ asset('front') }}/js/wow.js"></script>
    <script src="{{ asset('front') }}/js/custom.js"></script>
    <script src="{{ asset('front') }}/http://maps.google.com/maps/api/js"></script>
    <script src="{{ asset('front') }}/js/gmaps.js"></script>
    <script type="text/javascript" src="{{ asset('front') }}/http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="{{ asset('front') }}/js/owl.carousel.js"></script>
    <script src="{{ asset('front') }}/js/examples.js"></script>
    <script src="{{ asset('front') }}/js/jquery.barrating.min.js"></script>
    <script src="{{ asset('front') }}/js/jssor.slider.min.js"></script> --}}



    <script>
        new WOW().init();
	 jssor_1_slider_init();
    </script>


</body>

</html>
@endsection