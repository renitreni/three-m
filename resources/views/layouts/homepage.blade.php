<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>3M</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('theme/css/style_2.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

@include('layouts.partials.loader')

<div class="site-wrap" id="home-section">

    @include('layouts.partials.menu')

    @include('layouts.partials.carousel')

    @include('layouts.partials.services-section')

    @include('layouts.partials.mission-vision')

    @include('layouts.partials.about-section')

    <div class="site-section" id="team-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                        <h2>Our Team</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere at delectus laudantium,
                            deserunt, atque eveniet. Voluptatem, fuga quos rerum inventore.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                    <div class="block-team-member-1 text-center rounded">
                        <figure>
                            <img src="theme/skater/images/xperson_1.jpg.pagespeed.ic.nwdjnpr6_s.jpg" alt="Image"
                                 class="img-fluid rounded-circle">
                        </figure>
                        <h3 class="font-size-20 text-black">Jean Smith</h3>
                        <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Skateboard Trainer</span>
                        <div class="block-social-1">
                            <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                    class="icon-facebook"></span></a>
                            <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                    class="icon-twitter"></span></a>
                            <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                    class="icon-instagram"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="block-team-member-1 text-center rounded">
                        <figure>
                            <img src="theme/skater/images/xperson_2.jpg.pagespeed.ic.nyu4ufzm3y.jpg" alt="Image"
                                 class="img-fluid rounded-circle">
                        </figure>
                        <h3 class="font-size-20 text-black">Bob Carry</h3>
                        <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Skateboard Trainer</span>
                        <div class="block-social-1">
                            <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                    class="icon-facebook"></span></a>
                            <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                    class="icon-twitter"></span></a>
                            <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                    class="icon-instagram"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="block-team-member-1 text-center rounded">
                        <figure>
                            <img src="theme/skater/images/xperson_1.jpg.pagespeed.ic.nwdjnpr6_s.jpg" alt="Image"
                                 class="img-fluid rounded-circle">
                        </figure>
                        <h3 class="font-size-20 text-white">Ricky Fisher</h3>
                        <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Skateboard Trainer</span>
                        <div class="block-social-1">
                            <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                    class="icon-facebook"></span></a>
                            <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                    class="icon-twitter"></span></a>
                            <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                    class="icon-instagram"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section block-13" id="testimonials-section" data-aos="fade">
    <div class="container">
        <div class="text-center mb-5">
            <div class="block-heading-1">
                <h2>Testimonial</h2>
            </div>
        </div>
        <div class="owl-carousel nonloop-block-13">
            <div>
                <div class="block-testimony-1 text-center">
                    <blockquote class="mb-4">
                        <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, fugit excepturi
                            sapiente voluptatum nulla odio quaerat quibusdam tempore similique doloremque veritatis et
                            cupiditate, maiores cumque repudiandae explicabo tempora deserunt consequuntur?&rdquo;</p>
                    </blockquote>
                    <figure>
                        <img src="theme/skater/images/xperson_1.jpg.pagespeed.ic.nwdjnpr6_s.jpg" alt="Image"
                             class="img-fluid rounded-circle mx-auto">
                    </figure>
                    <h3 class="font-size-20 text-black">Ricky Fisher</h3>
                </div>
            </div>
            <div>
                <div class="block-testimony-1 text-center">
                    <figure>
                        <img src="theme/skater/images/xperson_2.jpg.pagespeed.ic.nyu4ufzm3y.jpg" alt="Image"
                             class="img-fluid rounded-circle mx-auto">
                    </figure>
                    <h3 class="font-size-20 mb-4 text-black">Ken Davis</h3>
                    <blockquote class="mb-4">
                        <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, fugit excepturi
                            sapiente voluptatum nulla odio quaerat quibusdam tempore similique doloremque veritatis et
                            cupiditate, maiores cumque repudiandae explicabo tempora deserunt consequuntur?&rdquo;</p>
                    </blockquote>
                </div>
            </div>
            <div>
                <div class="block-testimony-1 text-center">
                    <blockquote class="mb-4">
                        <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, fugit excepturi
                            sapiente voluptatum nulla odio quaerat quibusdam tempore similique doloremque veritatis et
                            cupiditate, maiores cumque repudiandae explicabo tempora deserunt consequuntur?&rdquo;</p>
                    </blockquote>
                    <figure>
                        <img src="theme/skater/images/xperson_1.jpg.pagespeed.ic.nwdjnpr6_s.jpg" alt="Image"
                             class="img-fluid rounded-circle mx-auto">
                    </figure>
                    <h3 class="font-size-20 text-black">Mellisa Griffin</h3>
                </div>
            </div>
            <div>
                <div class="block-testimony-1 text-center">
                    <figure>
                        <img src="theme/skater/images/xperson_3.jpg.pagespeed.ic.walfsw8psv.jpg" alt="Image"
                             class="img-fluid rounded-circle mx-auto">
                    </figure>
                    <h3 class="font-size-20 mb-4 text-black">Robert Steward</h3>
                    <blockquote class="mb-4">
                        <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, fugit excepturi
                            sapiente voluptatum nulla odio quaerat quibusdam tempore similique doloremque veritatis et
                            cupiditate, maiores cumque repudiandae explicabo tempora deserunt consequuntur?&rdquo;</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section" id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
                <div class="block-heading-1">
                    <span>Get In Touch</span>
                    <h2>Contact Me</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="100">
                <form action="#" method="post">
                    <div class="form-group row">
                        <div class="col-md-6 mb-4 mb-lg-0">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Email address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30"
                                      rows="10"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 ml-auto">
                            <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5"
                                   value="Send Message">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
                <h2 class="text-primary">Need to know more on details. Get In Touch</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, distinctio! Harum quibusdam nisi,
                    illum nulla aspernatur aut quidem aperiam, quae non tempora recusandae voluptatibus fugit
                    impedit.</p>
                <p><a href="#" class="btn btn-primary text-white">Get Started</a></p>
            </div>
        </div>
    </div>
</div>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="footer-heading mb-4">About Us</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam
                            voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <h2 class="footer-heading mb-4">Features</h2>
                        <ul class="list-unstyled">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Press Releases</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ml-auto">
                <div class="mb-5">
                    <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
                    <form action="#" method="post" class="footer-suscribe-form">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control border-secondary text-white bg-transparent"
                                   placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary text-white" type="button" id="button-addon2">Subscribe
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </form>
            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <div class="border-top pt-5">
                    <p class="copyright">
                        <small>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        </small></p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<script src="{{ asset('theme/theme/skater/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('theme/theme/skater/js/popper.min.js_bootstrap.min.js.pagespeed.jc.n3apcpgfm7.js') }}"></script>
<script>eval(mod_pagespeed_NYdf7STs2K);</script>
<script>eval(mod_pagespeed_dQ9_L3JC$g);</script>
<script
    src="{{ asset('theme/script/.min.js_jquery.sticky.js_jquery.waypoints.min.js_jquery.animatenumber.min.js.pagespeed.jc.iyyse_y-vh_cb4jhrzinbq7t4wojirui0.js') }}"></script>
<script>eval(mod_pagespeed__l9ujNUQ8C);</script>
<script>eval(mod_pagespeed_Tfv85fqylh);</script>
<script>eval(mod_pagespeed_3Aa_656viP);</script>
<script>eval(mod_pagespeed_VVwZ_1KHDF);</script>
<script
    src="{{ asset('theme/script/jquery.fancybox.min.js_jquery.easing.1.3.js_aos.js.pagespeed.jc.krwwazms71_kvuv32e2sptk8yhq363ds3.js') }}"></script>
<script>eval(mod_pagespeed_hSbHVrfg_Q);</script>
<script>eval(mod_pagespeed_jsE007eTC1);</script>
<script>eval(mod_pagespeed_NSKn84ObVd);</script>
<script src="{{ asset('theme/theme/skater/js/main.js') }}"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

</body>
</html>
