<style>
    .btn-primary-glowing {
        border: 1px transparent;
        -webkit-border-radius: 40px;
        border-radius: 40px;
        color: #eeeeee;
        cursor: pointer;
        display: inline-block;
        font-family: Arial;
        font-size: 20px;
        padding: 8px 30px;
        text-align: center;
        text-decoration: none;
        margin-left: 20px;
        -webkit-animation: glowing 1300ms infinite;
        -moz-animation: glowing 1300ms infinite;
        -o-animation: glowing 1300ms infinite;
        animation: glowing 1300ms infinite;
    }

    @-webkit-keyframes glowing {
        0% {
            background-color: #ffffff;
            -webkit-box-shadow: 0 0 3px #ffffff;
        }
        50% {
            background-color: #e8e8e8;
            -webkit-box-shadow: 0 0 15px #e8e8e8;
        }
        100% {
            background-color: #ffffff;
            -webkit-box-shadow: 0 0 3px #ffffff;
        }
    }

    @keyframes glowing {
        0% {
            background-color: #ff8b00;
            box-shadow: 0 0 3px #ff8b00;
        }
        50% {
            background-color: #ff8b00;
            box-shadow: 0 0 15px #ff8b00;
        }
        100% {
            background-color: #ff8b00;
            box-shadow: 0 0 3px #ff8b00;
        }
    }
</style>
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
        <div class="d-flex align-items-center position-relative">
            <div class="me-auto">
                <nav class="site-navigation text-right ml-auto " role="navigation">
                    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                        <li><a href="{{ route('landing') }}#home-section" class="nav-link">Home</a></li>
                        <li><a href="{{ route('landing') }}#services-section" class="nav-link">Services</a></li>
                        {{--                        <li class="has-children">--}}
                        {{--                            <a href="{{ route('landing') }}#about-section" class="nav-link">About</a>--}}
                        {{--                            <ul class="dropdown arrow-top">--}}
                        {{--                                <li><a href="{{ route('landing') }}#team-section" class="nav-link">Team</a></li>--}}
                        {{--                                <li><a href="{{ route('landing') }}#faq-section" class="nav-link">FAQ</a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </li>--}}
                        <li><a href="{{ route('landing') }}#galleries" class="nav-link">Galleries</a></li>
                        <li><a href="{{ route('landing') }}#procedures" class="nav-link">Procedures</a></li>
                        <li><a href="{{ route('landing') }}#contact-section" class="nav-link">Contact</a></li>
                        <li><a href="{{ route('booking') }}"
                               class="btn-primary-glowing btn btn-primary rounded-pill px-3 py-2">Book Now!</a></li>
                    </ul>
                </nav>
            </div>
            <div class="toggle-button d-inline-block d-lg-none"><a href="#"
                                                                   class="site-menu-toggle py-5 js-menu-toggle text-white"><span
                        class="icon-menu h3"></span></a></div>
            <div class="site-logo" style="width: 13%">
                <a href="{{ route('landing') }}">
                    <img src="{{ asset('images/3M_lh_logo.jpeg') }}" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
</header>
