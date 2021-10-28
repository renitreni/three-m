<div class="site-section" id="galleries">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
                <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                    <h2>Galleries</h2>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-evenly aos-init aos-animate" data-aos="fade-up" data-aos-delay="">
            <div class="lightbox">
                <div class="d-flex flex-wrap">
                    @foreach($gallery as $key => $item)
                        <img
                            src="{{ $item }}"
                            data-mdb-img="{{ $item }}"
                            alt="Lightbox image 1" style="max-width: 180px"
                            class="w-100 shadow-1-strong rounded-0 img-fluid zoom"
                        />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
