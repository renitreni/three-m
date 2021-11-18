<div class="">
    <div class="site-section-cover overlay img-bg-section"
         style="background-image:url({{ asset('images/header_1.jpeg') }});
             background-position-x: 0px;
             background-position-y: -600px;">
        <div>
            <div class="row justify-content-center">
                <div class="col-md-auto me-4 title-site" style="margin-top: 10%">
                    <h1>{{ __("Luxury Horizon 3M") }}</h1>
                    <p class="mb-5 w-75 fs-4" data-aos="fade-up" data-aos-delay="100">
                    <span>{{ __("Authorized Car Care Serivces") }}</span>
                    </p>
                    <p>
                        <a href="{{ route('booking') }}"
                           class="btn btn-primary btn-lg text-white">{{ __("Book An Appointment!") }}</a>
                    </p>
                </div>
                <div class="col-md-auto" style="margin-top: 2%">
                    <video width="620" height="440" autoplay muted controls>
                        <source src="{{ asset('videos/video-3.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
</div>
