
<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<header class="site-navbar js-sticky-header site-navbar-target" role="banner">
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="site-logo">
                <a href="{{ route('landing') }}">
                    <img src="{{ asset('images/3M_Logo.png') }}" class="img-fluid">
                </a>
            </div>
            <div class="col-12">
                <nav class="site-navigation text-right ml-auto " role="navigation">
                    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                        <li><a href="#home-section" class="nav-link">Home</a></li>
                        <li><a href="#services-section" class="nav-link">Services</a></li>
                        <li class="has-children">
                            <a href="#about-section" class="nav-link">About</a>
                            <ul class="dropdown arrow-top">
                                <li><a href="#team-section" class="nav-link">Team</a></li>
                                <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                            </ul>
                        </li>
                        <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                        <li><a href="#contact-section" class="nav-link">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
        </div>
    </div>
</header>
