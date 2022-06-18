<section class="gallery-section">
       <div class="container-fluid">
            <div class="gallery-heading">
                <p>What are you in the Mood for.?</p>
                <h1>TAILOR MADE PACKAGES FOR YOU</h1>
            </div>
            <div class="row">
                @foreach ($gallery as $item)
                <div class="col-md-3 col-sm-3">
                    <div class="gallery-img wow animate fadeInDown" id="beatch-activities" style="animation-delay: 1s;">
                        <img src="{{ asset('uploads/gallerys/'.$item->galler_image)}}" alt="image">
                        <h3>{{ $item->galler_image_title}}</h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</section>