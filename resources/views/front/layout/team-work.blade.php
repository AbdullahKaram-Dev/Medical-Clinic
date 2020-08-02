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
            <!-- single Tem -->
            @if(isset($doctors) && count($doctors) > 0)
            @foreach($doctors as $doctor)
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                <div class="single-team mb-30">
                    <div class="team-img">
                        <img src="{{asset('storage/'.$doctor->avatar)}}" alt="{{$doctor->name}}">
                    </div>
                    <div class="team-caption">
                        <h3>{{$doctor->name}}</h3>
                        <span>{{$doctor->title_jop}}</span>
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
            @endif
        </div>
    </div>
</div>
