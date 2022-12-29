<!-- start travel plans section -->
<section class="travel-plans wow animate bounceIn" data-wow-duration="2s">
    <div class="container">
        @foreach ($package as $view)
            <div class="travel-text">
                <h5>{{ $view->package_title }}</h5>
                <h1>{{ $view->package_heading }}</h1>
                <p>
                    {{ $view->package_description}}
                </p>
                <div class="travel-btn wow animate slideInLeft" data-wow-duration="2s">
                    <a href="{{ asset('front')}}/#">create a package</a>
                </div>
            </div>
        @endforeach
    </div>
</section><!-- end travel plans -->