@extends('front-end.layout.master')
@section('title')
Blog Page 
@endsection
@section('content')
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel.com/blog</title>

    <link href="css/main.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/dark-hive/jquery-ui.css">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.default.css" rel="stylesheet">
    <link href="themes/fontawesome-stars-o.css" rel="stylesheet">
    <link href="themes/examples.css" rel="stylesheet">
    <link href="themes/css-stars.css" rel="stylesheet">

    <style>
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

    <!-- start header section -->
    <header class="blog">
        <section class="blog-header">
            <!--top nav-->
            <div class="container">
                @include('front-end.layout.navbar')
                
            </div>
            <!-- end top nav -->

            <!-- main headline -->
            <div class="main-headline">

            </div><!-- end main headline -->
        </section>
        <div class="blog-news wow animate bounceIn" data-wow-duration="1.5s">
            <h1>Latest From Our Blog</h1>
            <p>Stay in Touch with the Latest Travel Trends & Destination News</p>
        </div>
    </header><!-- end header section -->

    <!-- start blog slider -->
    <section class="blog-slider">
        <div class="owl-carousel owl-theme" id="blog-carousel">
            <div class="item" id="blog-slider1"><img src="{{ asset('front') }}/image/59.jpg"></div>
            <div class="item" id="blog-slider2"><img src="{{ asset('front') }}/image/60.jpg"></div>
            <div class="item" id="blog-slider3"><img src="{{ asset('front') }}/image/61.jpg"></div>
        </div>
    </section><!-- end blog slider -->

    <!--start blog post -->
    <section class="blog-post">
        <div class="container">
            <h2>Featured Post</h2>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="blog-post-img wow animate slideInLeft" data-wow-duration="1.5s">
                        <img src="{{ asset('front') }}/image/62.jpg">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="blog-post-title wow animate slideInRight" data-wow-duration="1.5s">
                        <h4>Travel Tips</h4>
                        <h3><a href="#">10 things to do before you travel</a></h3>
                        <ul>
                            <li><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;16th
                                june&nbsp;&nbsp;&nbsp;&nbsp;/</li>
                            <li><a href="#"><i class="fa fa-folder-open" aria-hidden="true"></i>&nbsp;tips &
                                    news</a>&nbsp;&nbsp;&nbsp;&nbsp;/</li>
                            <li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i>&nbsp;19
                                    comments</a>&nbsp;&nbsp;&nbsp;&nbsp;/</li>
                            <li><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                        </ul>
                        <P>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi nemo animi nostrum
                            accusantium, perferendis culpa iste est hic minima magnam, vel libero id! Quibusdam facilis
                            debitis sequi eligendi voluptates magni ipsa, aliquid voluptatum iste vel! Facilis amet
                            aliquam quidem explicabo et dolore distinctio enim accusamus atque, sapiente beatae odit
                            impedit optio commodi libero est natus ducimus recusandae vero, soluta voluptas?
                        </P>
                        <h5><a href="#">Read More&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- start blog section -->
    <section class="blog-section">
        <div class="container">
            <div class="blog-section-h1 wow animate bounceInDown" data-wow-duration="2s">
                <h3>Latest Posts</h3>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <img src="{{ asset('front') }}/image/14.jpg">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h4>Sightseeing</h4>
                            <h2><a href="#">Things to do in Bangkok for free</a></h2>
                            <ul class="blog">
                                <li><i class="fa fa-calendar" aria-hidden="true"></i></li>
                                <li>
                                    <p> 16th February</p>
                                </li>
                                <li>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-comments" aria-hidden="true"></i></li>
                                <li>
                                    <p>19</p>
                                </li>
                            </ul><br>
                            <h5><a href="#">Read More</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <img src="{{ asset('front') }}/image/15.jpg">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h4>Nightlife</h4>
                            <h2><a href="#">Nightclubs to check out in Kuala Lumpur</a></h2>
                            <ul class="blog">
                                <li><i class="fa fa-calendar" aria-hidden="true"></i></li>
                                <li>
                                    <p> 16th February</p>
                                </li>
                                <li>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-comments" aria-hidden="true"></i></li>
                                <li>
                                    <p>19</p>
                                </li>
                            </ul><br>
                            <h5><a href="#">Read More</a></h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 50px;">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <img src="{{ asset('front') }}/image/16.jpg">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h4>Hotels</h4>
                            <h2><a href="#">Prague hotels for every kind of traveller</a></h2>
                            <ul class="blog">
                                <li><i class="fa fa-calendar" aria-hidden="true"></i></li>
                                <li>
                                    <p> 16th February</p>
                                </li>
                                <li>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-comments" aria-hidden="true"></i></li>
                                <li>
                                    <p>19</p>
                                </li>
                            </ul><br>
                            <h5><a href="#">Read More</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <img src="{{ asset('front') }}/image/13.jpg">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h4>Eating Out</h4>
                            <h2><a href="#">Shanghai restaurants for the discerning diner</a></h2>
                            <ul class="blog">
                                <li><i class="fa fa-calendar" aria-hidden="true"></i></li>
                                <li>
                                    <p> 16th February</p>
                                </li>
                                <li>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-comments" aria-hidden="true"></i></li>
                                <li>
                                    <p>19</p>
                                </li>
                            </ul><br>
                            <h5><a href="#">Read More</a></h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 50px;">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <img src="{{ asset('front') }}/image/63.jpg">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h4>Troubleshoots</h4>
                            <h2><a href="#">Travel Experts Share Their Best Tips</a></h2>
                            <ul class="blog">
                                <li><i class="fa fa-calendar" aria-hidden="true"></i></li>
                                <li>
                                    <p> 16th February</p>
                                </li>
                                <li>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-comments" aria-hidden="true"></i></li>
                                <li>
                                    <p>19</p>
                                </li>
                            </ul><br>
                            <h5><a href="#">Read More</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <img src="{{ asset('front') }}/image/64.jpg">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h4>Sightseeing</h4>
                            <h2><a href="#">World's 15 Most Scenic Train Rides</a></h2>
                            <ul class="blog">
                                <li><i class="fa fa-calendar" aria-hidden="true"></i></li>
                                <li>
                                    <p> 16th February</p>
                                </li>
                                <li>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-comments" aria-hidden="true"></i></li>
                                <li>
                                    <p>19</p>
                                </li>
                            </ul><br>
                            <h5><a href="#">Read More</a></h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- end blog section -->


    <!-- start travel plans section -->
    <section class="travel-plans wow animate bounceIn" data-wow-duration="2s">
        <div class="container">
            <div class="travel-text">
                <h5>Create a Custom Plan based on your Taste</h5>
                <h1>Start making your Travel Plans</h1>
                <p>
                    Educate, aid, criteria catalyst John Lennon. Life-saving diversity necessities elevate worldwide
                    carbon rights empowerment. Pursue these aspirations leverage, accessibility UNICEF, reduce child
                    mortality collaborative cities safeguards. Informal economies non-partisan; evolution transformative
                    climate change local benefit.
                </p>
                <div class="travel-btn wow animate slideInLeft" data-wow-duration="2s">
                    <a href="#">create a package</a>
                </div>
            </div>
        </div>
    </section><!-- end travel plans -->





   




    <!--js link-->

@include('front-end.layout.script')



    <script>
        new WOW().init();
    </script>

</body>

</html>

@endsection