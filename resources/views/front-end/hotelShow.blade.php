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
            <h5>Price per Night</h5>
            <button class="hotel-right-btn">book now</button>
        </div>
    </div>
</div>
@endforeach