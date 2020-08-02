@extends('home')

@section('title')
    Single-Post
@stop

@section('content')
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('front-design/img/logo/loder.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    @include('front.layout.header')
    @include('front.layout.slider')
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Our Posts</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="team-area section-padding30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-tittle text-center mb-100">
                            <span>Our Blog</span>
                            <h2>Our Specialist Posts For You</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

<div class="col-lg-12 posts-list">
    <div class="single-post">
        <div class="feature-img">
            <img class="img-fluid gj-width-full" src="{{asset('storage/'.$post->avatar)}}" alt="">
        </div>
        <div class="blog_details">
            <h2 style="color: #2d2d2d;">
               {{$post->title}}
            </h2>
            <ul class="blog-info-link mt-3 mb-4">
                <li><a href="#"><i class="fa fa-user-clock"></i>{{$post->created_at->diffForHumans()}}</a></li>
                <li><a href="#"><i class="fa fa-comments"></i>0</a></li>
            </ul>
            <p class="excert">
                {{$post->description}}
            </p>
        </div>
    </div>
    <div class="comment-form">
        <h4>Leave a Reply</h4>
        <form class="form-contact comment_form" action="#" id="commentForm">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control w-100" name="comment" required id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control" name="name" id="name" required type="text" placeholder="Name">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control" name="email" id="email" required type="email" placeholder="Email">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <input class="form-control" name="website" id="website" required  type="text" placeholder="Website">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="button button-contactForm btn_1 boxed-btn">Post Comment</button>
            </div>
        </form>
    </div>
</div>


    </div>
</div>
</div>
<!-- Team End -->
</main>

@endsection
