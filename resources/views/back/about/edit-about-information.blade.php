@extends('back.admin-app')

@section('title')
    Edit About-us Information
@stop

@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">

    <form action="{{route('update-about',$data->id)}}" method="POST" enctype="multipart/form-data" role="form">
        @csrf
        <div class="card-body">

            <div class="form-group">
                <label class="custom-label" for="about_us">Description About Us</label>
                <div class="form-group">
                    <textarea class="form-control"  name="about_us" id="about_us" cols="30" rows="10" placeholder="Write Description Here">{{$data->about_us}}</textarea>
                </div>
                @error('about_us')
                <div class="text-xs text-red">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="our_mobile">Our Mobile Number</label>
                <input type="number" name="our_mobile" value="{{$data->our_mobile}}" class="form-control" id="our_mobile" placeholder="Enter Mobile Number">
            </div>
            @error('our_mobile')
            <div class="text-xs text-red">
                {{$message}}
            </div>
            @enderror


            <div class="form-group">
                <label for="our_email">Our Email address</label>
                <input type="email" name="our_email" value="{{$data->our_email}}" class="form-control" id="our_email" placeholder="Enter email">
            </div>
            @error('our_email')
            <div class="text-xs text-red">
                {{$message}}
            </div>
            @enderror

                <div class="form-group">
                    <label for="our_facebook_link">Our Facebook Link</label>
                    <input type="text" name="our_facebook_link" value="{{$data->our_facebook_link}}" class="form-control" id="our_facebook_link" placeholder="Enter Link Facebook">
                </div>
                @error('our_facebook_link')
                <div class="text-xs text-red">
                    {{$message}}
                </div>
                @enderror

                <div class="form-group">
                    <label for="our_twitter_link">Our Twitter Link</label>
                    <input type="text" name="our_twitter_link" value="{{$data->our_twitter_link}}" class="form-control" id="our_twitter_link" placeholder="Enter Link Twitter">
                </div>
                @error('our_twitter_link')
                <div class="text-xs text-red">
                    {{$message}}
                </div>
                @enderror


        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>


        </div>
    </section>
</div>
@endsection
