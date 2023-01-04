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
    .map-area
    {
    width: 765px;
    height: 465px;
    background: #fff;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
    .map-area iframe {
    width: 100%;
    height: 100%;
    border: none;
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
                    <h2>Today's Our Map</h2>
                    <div class="map-area">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14594.038295168157!2d90.38954170000001!3d23.8715427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1672855137434!5m2!1sen!2sbd"
                            allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                                    <p><span>1.10 lakhs tk </span>onwards</p>
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
                                    <p><span>60000 tk </span>onwards</p>
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
                                    <p><span>1.20 lakhs tk </span>onwards</p>
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
                                    <p><span>90000 tk </span>onwards</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end holidays-slider -->

    <script>
        new WOW().init();
	 jssor_1_slider_init();
    </script>


</body>

</html>
@endsection