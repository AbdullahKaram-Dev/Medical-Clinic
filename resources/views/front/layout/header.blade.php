<header>
    <!--? Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo">
                            <a href="{{route('site.home')}}"><img src="{{asset('front-design/img/logo/logo.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-11 col-lg-11 col-md-11">
                        <div class="menu-main d-flex align-items-center justify-content-end">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        @if(auth()->check() && IsAdmin())
                                        <li><a href="{{route('dashboard.home')}}" target="_blank">Back To Dashboard</a></li>
                                        @endif
                                        <li><a href="{{route('site.home')}}">Home</a></li>
                                        <li><a href="{{route('all-doctors')}}">Doctors</a></li>
                                        <li><a href="{{route('all-departments')}}">Department</a></li>
                                        <li><a href="{{route('all-posts')}}">Blog</a></li>
                                        <li><a href="{{route('contact-us')}}">Contact-Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                <a href="{{route('site.home')}}"><img src="{{asset('front-design/img/logo/logo.png')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
