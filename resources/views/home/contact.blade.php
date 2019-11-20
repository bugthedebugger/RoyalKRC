@extends('layouts.hlayout')

@section('banner')
    @include('layouts.partials.banner')
@endsection

@section('body')
<section class="contact-details ">
    <h1>Contact Details</h1>
    <div class="container ">
        <div class="row ">
            <div class="contact-details__info col-md-6 ">
                <div class="call "><img src="img/phone.svg " class="svg ">
                    <p> 01-4236784, 9843782183</p>
                </div>
                <div class="location ">
                    <div class="location "><img src="img/location.svg " class="svg ">
                        <p>Subhidamarga 05, Butwal, Nepal</p>
                    </div>
                    <div class="social-media ">
                        <div class="twiter ">
                            <i class="fab fa-twitter "></i>
                            <p>Twiter</p>
                        </div>
                        <div class="facebook ">
                            <i class="fab fa-facebook "></i>
                            <p>Facebook</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-details__map col-md-6 ">
                <iframe width="600 " height="500 " id="gmap_canvas " src="https://maps.google.com/maps?q=maitighar&t=&z=13&ie=UTF8&iwloc=&output=embed " frameborder="0 " scrolling="no " marginheight="0 " marginwidth="0 "></iframe>
            </div>
        </div>
    </div>
</section>
@endsection