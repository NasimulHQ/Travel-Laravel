@extends('front-end.layout.master')
@section('title')
Home Page 
@endsection
@section('content')
<script type="text/javascript">

</script>

<style>
    #tabs {
        margin-top: 60px;
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
        opacity: 1;
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

    .main-nav .nav navbar-nav .home-nav a {
        border: 2px solid #000;
        border-radius: 2px;
        color: black;
    }

    .home-slider {
        position: absolute;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -100;
    }

    @media (min-aspect-ratio: 16/9) {
        .video-background {
            width: 100%;
            height: auto;
        }
    }

    @media (max-aspect-ratio: 16/9) {
        .video-background {
            width: auto;
            height: 100%;
        }
    }

    .owl-prev {
        position: absolute;
        top: 50%;
        margin-left: 2%;
        left: 0;
        opacity: .7;
    }

    .owl-next {
        position: absolute;
        top: 50%;
        margin-right: 2%;
        right: 0;
        opacity: .7;
    }

    .owl-theme .owl-dots {
        text-align: center;
        -webkit-tap-highlight-color: transparent;
        position: absolute;
        top: 95%;
        left: 50%;
    }

    .owl-theme .owl-nav [class*="owl-"] {
        color: #FFF;
        font-size: 30px;
        margin: 5px;
        padding: 6px 20px;
        background: #000;
        display: inline-block;
        cursor: pointer;
        border-radius: 3px;
        font-weight: bold;
    }
</style>

</head>

<body>

    <!-- header section -->
    <header class="home-header">
        <section class="header">
            <!--top nav-->
            @include('front-end.layout.navbar')
            <!-- end top nav -->

        </section>
        <div class="container">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <h1 style="color: #FFF; font-size: 60px;
    margin-top: 130px;">Welcome To Travel Group</h1>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>

    </header><!-- end header section -->
<div class="slider-active owl-carousel owl-theme">
    <div class="slider-area">
        <div class="single-slider" id="slider1"></div>
    </div>
    <div class="slider-area">
        <div class="single-slider" id="slider2"></div>
    </div>
    <div class="slider-area">
        <div class="single-slider" id="slider3"></div>
    </div>
</div>


<!-- start icon section -->

<section class="icon-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="icon-div wow animate slideInLeft" data-wow-duration="2s">
                    <img src="{{ asset('front')}}/image/1.png">
                    <p>Easy & Cheap.</p>
                    <h2>Search Flights</h2>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 ">
                <div class="icon-div wow animate slideInLeft" data-wow-duration="2s">
                    <img src="{{ asset('front')}}/image/2.png">
                    <p>Over 15000+ Places.</p>
                    <h2>Get Hotel Deals</h2>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="icon-div wow animate slideInRight" data-wow-duration="2s">
                    <img src="{{ asset('front')}}/image/3.png">
                    <p>Explore Destinations.</p>
                    <h2>Holiday Packages</h2>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="icon-div wow animate slideInRight" data-wow-duration="2s">
                    <img src="{{ asset('front')}}/image/4.png">
                    <p>24x7 Dedicated Helpline.</p>
                    <h2>1800 105 2541</h2>
                </div>
            </div>
        </div>
    </div>
</section><!-- end icon section -->

<!-- start gallery section -->
@include('front-end.layout.gallery')
<!-- end gallery section -->

<!-- start google map section -->
{{-- <section class="map-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="google-map">
                    <div id="map"></div>
                </div>
            </div>

            @include('front-end.layout.ppdestination')
        </div>
    </div>
</section> --}}
<!-- end google map section -->

<!-- favourite package -->
{{-- <section class="favourite-package">
    <div class="container-fluid">
        <h1>Cant't find your Favouritr Package?<span><a href="{{ asset('front')}}/#">Browse Packages&nbsp;<i
                        class="fa fa-caret-right" aria-hidden="true"></i></a></span></h1>
    </div>
</section> --}}

<!-- start blog section -->
@include('front-end.layout.latestpost')
<!-- end blog section -->

@include('front-end.layout.package')


@endsection