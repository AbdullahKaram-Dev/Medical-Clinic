@extends('home')

@section('title')
    All Doctors Our Clinic
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
                <h2>Doctors</h2>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- Hero End -->
<!--? Team Start -->
<div class="team-area section-padding30">
<div class="container">
<!-- Section Tittle -->
<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="section-tittle text-center mb-100">
            <span>Our Doctors</span>
            <h2>Our Specialist</h2>
        </div>
    </div>
</div>
<div class="row">
    @if(isset($doctors) && count($doctors) > 0)
    @foreach($doctors as $doctor)
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
        <div class="single-team mb-30">
            <div class="team-img">
                <img src="{{asset('storage/'.$doctor->avatar)}}" alt="">
            </div>
            <div class="team-caption">
                <h3>{{$doctor->name}}</h3>
                <span>{{$doctor->title_jop}}</span>
                <span>{{$doctor->email}}</span>
                <span>{{$doctor->mobile_number}}</span>
                <span>{{$doctor->status}}</span>
                <!-- Team social -->
                <div class="team-social">
                    <a href="{{$doctor->twitter_link}}"><i class="fab fa-twitter"></i></a>
                    <a href="{{$doctor['linked-in_link']}}"><i class="fas fa-globe"></i></a>
                    <a href="{{$doctor->facebook_link}}"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
      {{$doctors->links()}}
    @endif
</div>
</div>
</div>
<!-- Team End -->
</main>

@endsection


