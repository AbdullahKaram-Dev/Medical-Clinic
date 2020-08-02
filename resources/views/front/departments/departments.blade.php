@extends('home')

@section('title')
    All Departments
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
                                <h2>Departments</h2>
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
                            <span>Our Departments</span>
                            <h2>Our Departments Specialist</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @if(isset($departments) && count($departments) > 0)
                        @foreach($departments as $department)
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                                <div class="single-team mb-30">
                                    <div class="team-img">
                                        <img src="{{asset('storage/'.$department->avatar)}}" width="30" height="300" alt="">
                                    </div>
                                    <div class="team-caption">
                                        <h3>{{$department->name}}</h3>
                                        <span>{{$department->created_at->diffForHumans()}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{$departments->links()}}
                    @endif
                </div>
            </div>
        </div>
        <!-- Team End -->
    </main>

@endsection


