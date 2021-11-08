<div class="site-section" id="galleries">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
                <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                    <h2>{{ __('Galleries') }}</h2>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-evenly aos-init aos-animate" data-aos="fade-up" data-aos-delay="">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    @foreach($gallery as $key => $item)
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}"
                                @if($key==0) class="active" aria-current="true" aria-label="Slide {{ $key }}"@endif>
                        </button>
                    @endforeach
                </div>
                <div class="carousel-inner">
                    @foreach($gallery as $key => $item)
                        <div class="carousel-item @if($key==0) active @endif">
                            <img src="{{ $item }}" class="d-block img-fluid mx-auto" alt="{{ $item }}">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">{{ __("Previous") }}</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">{{ __('Next') }}</span>
                </button>
            </div>
        </div>
    </div>
</div>
