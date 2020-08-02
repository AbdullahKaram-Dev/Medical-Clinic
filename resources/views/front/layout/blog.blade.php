<div class="home_blog-area section-padding30">
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="cl-xl-7 col-lg-8 col-md-10">
                <!-- Section Tittle -->
                <div class="section-tittle text-center mb-70">
                    <span>Our recent news</span>
                    <h2>Our-News From Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @if(isset($posts) && count($posts) > 0)
            @foreach($posts as $post)

                    <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-blogs mb-30">
                    <div class="blog-img">
                        <img src="{{asset('storage/'.$post->avatar)}}" alt="{{$post->title}}">
                    </div>
                    <div class="blogs-cap">
                        <div class="date-info">
                            <span>{{$post->title}}</span>
                            <p>{{$post->created_at->diffForHumans()}}</p>
                        </div>
                        <h4>{{$post->description}}</h4>
                        <a href="blog_details.html" class="read-more1">Read more</a>
                    </div>
                </div>
            </div>

            @endforeach
            @endif
        </div>
    </div>
</div>
