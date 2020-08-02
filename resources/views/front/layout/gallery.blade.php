<div class="gallery-area section-padding30">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-tittle text-center mb-200">
                    <span>Our Gallery</span>
                    <h2>Our Medical Camp</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Left -->
            <div class="col-lg-12">
                <div class="row">

                    @if(isset($gallery))
                    @php $array = ['image_0','image_1','image_2','image_3','image_4','image_5'] @endphp
                    @foreach($array as $arr)
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="single-gallery mb-30">
                            <div class="gallery-img small-img" style="background-image: url({{asset('storage/'.$gallery[$arr])}})"></div>
                        </div>
                    </div>
                    @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
