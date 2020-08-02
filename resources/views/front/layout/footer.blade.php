<footer>
    <!--? Footer Start-->
    <div class="footer-area section-bg" data-background="{{asset('front-design/img/gallery/footer_bg.jpg')}}">
        <div class="container">
            <div class="footer-top footer-padding">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="{{route('site.home')}}"><img src="{{asset('front-design/img/logo/logo2_footer.png')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    @if(isset($about))
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>About Us</h4>
                                <div class="footer-pera">
                                    <p class="info1">{{$about->about_us}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-number mb-50">
                                <h4><span>Mobile </span> {{$about->our_mobile}}</h4>
                                <p>{{$about->our_email}}</p>
                            </div>
                            <!-- Form -->
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="footer-bottom">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-xl-9 col-lg-8">
                        <div class="footer-copy-right">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved Develop By <i class="fa fa-heart" aria-hidden="true"></i> <a href="https://www.facebook.com/abdalla.karam.982292/" target="_blank">Abdallakaramdev@gmail.com</a> <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <!-- Footer Social -->
                        <div class="footer-social f-right">
                            <a href="{{$about->our_twitter_link}}"><i class="fab fa-twitter"></i></a>
                            <a href="{{$about->our_facebook_link}}"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
