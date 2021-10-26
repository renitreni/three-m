<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>{{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('theme/css/style_2.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">
    @yield('header')
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

@include('layouts.partials.loader')

<div class="site-wrap" id="home-section">

    @include('layouts.partials.menu')

    @yield('content')
</div>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <h2 class="footer-heading mb-3">Address</h2>
                                <p class="fw-bold m-0">Luxury Horizon.</p>
                                <p>Anas bin Malik St., Malqa District</p>
                            </div>
                            <div class="col-12">
                                <h2 class="footer-heading mb-3">CALL US</h2>
                                <p><i class="fas fa-phone mr-2"></i> +966 11 485 5600</p>
                                <p><i class="fas fa-mobile mr-2"></i> +966 5311 30606</p>
                            </div>
                        </div>
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
                <a href="#" class="pl-3 pr-3"><span class="icon-snapchat"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
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

@yield('scripts')
</body>
</html>
