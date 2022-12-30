<!-- start blog section -->
<section class="blog-section">
    <div class="container">
        <div class="blog-section-h1 wow animate bounceInDown" data-wow-duration="2s">
            <h1>Latest from our Blog</h1>
            <p>Stay in Touch with the Latest Travel Trends & Destination News</p>
        </div>
            <div class="row">
                @foreach ($latestblog as $lblog)
                <div class="col-md-6">
                    <div class="row" style="margin-top: 50px;">
                        <div class="col-md-6 col-sm-6">
                            <img src="{{ asset('uploads/latestblogs/'.$lblog->latestblog_image)}}" alt="image">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h4>{{ $lblog->latestblog_title }}</h4>
                            <h2><a href="#">{{$lblog->latestblog_heading}}</a></h2>
                            <ul class="blog">
                                <li><i class="fa fa-calendar" aria-hidden="true"></i></li>
                                <li>
                                    <p> {{$lblog->latestblog_date}}</p>
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
                @endforeach
            </div>
    </div>
</section><!-- end blog section -->