@extends('front-end.layout.master')
@section('title')
Holiday Page
@endsection
@section('content')

<!-- start internal css -->
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

        .footer {
            margin-top: 180px;
        }
    </style><!-- end enternal css -->


</head>

<body>

    <!-- start header section -->
    <header class="holidays-header">
        <div class="holidays-video">
            <video autoplay loop class="video-background" muted plays-inline>
                <source src="{{ asset('front') }}/video/1.mp4">
            </video>
        </div>
        <div class="container">
            <!-- main-nav -->
            {{-- <div class="main-nav">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="main-logo">
                                <a class="navbar-brand" href="#">TRAVEL</a>
                            </div>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">

                            </ul>
                            <form class="navbar-form navbar-left">
                                <div class="form-group">
                                </div>
                            </form>
                            <ul class="nav navbar-nav navbar-right">
                                <li class=""><a href="index.html"><i class="fa fa-home"
                                            aria-hidden="true"></i>&nbsp;HOME</a></li>
                                <li><a href="flights.html"><i class="fa fa-plane"
                                            aria-hidden="true"></i>&nbsp;FLIGHTS</a></li>
                                <li><a href="hotel.html"><i class="fa fa-building"
                                            aria-hidden="true"></i>&nbsp;HOTELS</a></li>
                                <li class="active"><a href="holidays.html"><i class="fa fa-gift"
                                            aria-hidden="true"></i>&nbsp;HOLIDAY</a></li>
                                <li><a href="blog.html"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;BLOG</a>
                                </li>
                                <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;+880-1627402376</a>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div> --}}
            @include('front-end.layout.navbar')
            <!-- end Main-Nav -->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <h1 style="color: #FFF; font-size: 45px;
                                margin-top: 130px;">Choose Your Holiday Destination</h1>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </header><!-- end header section -->

    <!-- start holidays heading -->

    <section class="holidays-heading wow animate bounceIn" data-wow-duration="2s">
        <div class="container">
            <p>Most Popular Holiday Packages for You</p>
            <h2>Tailor made Packages for you</h2>
        </div>
    </section><!-- end holidays heading -->

    <!-- start holidays slider -->
    <section class="holidays-slider">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h2>Today's Top Deals</h2>
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
                                <img data-u="image" src="{{ asset('front') }}/image/37.jpg" />
                                <img data-u="thumb" src="{{ asset('front') }}/image/43.jpg" />
                                <div class="holidays-slider-txt">
                                    <h1>europe hot deals</h1>
                                    <p>5 nights | starting form $2999</p>
                                </div>
                            </div>
                            <div>
                                <img data-u="image" src="{{ asset('front') }}/image/38.jpg" />
                                <img data-u="thumb" src="{{ asset('front') }}/image/44.jpg" />
                                <div class="holidays-slider-txt">
                                    <h1>thiland</h1>
                                    <p>5 nights | starting form $2999</p>
                                </div>
                            </div>
                            <div>
                                <img data-u="image" src="{{ asset('front') }}/image/39.jpg" />
                                <img data-u="thumb" src="{{ asset('front') }}/image/45.jpg" />
                                <div class="holidays-slider-txt">
                                    <h1>indonesia</h1>
                                    <p>5 nights | starting form $2999</p>
                                </div>
                            </div>
                            <div>
                                <img data-u="image" src="{{ asset('front') }}/image/40.jpg" />
                                <img data-u="thumb" src="{{ asset('front') }}/image/46.jpg" />
                                <div class="holidays-slider-txt">
                                    <h1>dubai</h1>
                                    <p>5 nights | starting form $2999</p>
                                </div>
                            </div>
                            <div>
                                <img data-u="image" src="{{ asset('front') }}/image/41.jpg" />
                                <img data-u="thumb" src="{{ asset('front') }}/image/47.jpg" />
                                <div class="holidays-slider-txt">
                                    <h1>germany</h1>
                                    <p>5 nights | starting form $2999</p>
                                </div>
                            </div>
                            <div>
                                <img data-u="image" src="{{ asset('front') }}/image/42.jpg" />
                                <img data-u="thumb" src="{{ asset('front') }}/image/48.jpg" />
                                <div class="holidays-slider-txt">
                                    <h1>australia</h1>
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
                @include('front-end.layout.ppdestination')
            </div>
        </div>
    </section><!-- end holidays-slider -->

    <!-- start gallery section -->
    @include('front-end.layout.gallery')
    {{-- <section class="gallery-section">
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
    </section><!-- end gallery section --> --}}






    <script>
        new WOW().init();
	 jssor_1_slider_init();
    </script>
</body>

</html>
@endsection