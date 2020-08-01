@extends('back.admin-app')

@section('title')
    Show About-us Information
@stop

@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
<div class="row">
    @if(isset($Abouts) && count($Abouts) > 0)
        @foreach($Abouts as $About)
<div class="col-md-12 col-sm-6 col-md-4 d-flex align-items-stretch">
        <div class="card bg-light">
            <div class="card-body pt-0">
                <div class="row">

                    <div class="col-md-12">
                        <h1 class="text-muted text-sm"><strong class="badge badge-primary">Description :</strong><p>{{$About->about_us}}</p></h1>
                    </div>

                    <div class="col-md-12">
                        <h1 class="text-muted text-sm"><strong class="badge badge-primary">Our-Email :</strong><p>{{$About->our_email}}</p></h1>
                    </div>

                    <div class="col-md-12">
                        <h1 class="text-muted text-sm"><strong class="badge badge-primary">Our-Mobile :</strong><p>{{$About->our_mobile}}</p></h1>
                    </div>

                    <div class="col-md-2 mb-1">
                        <a href="{{route('delete-information',$About->id)}}" class="btn btn-sm btn-danger mr-2">
                            Delete
                        </a>
                    </div>
                    <div class="col-md-2 mb-1">
                        <a href="{{route('edit-about',$About->id)}}" class="btn btn-sm bg-gradient-yellow mr-2">
                            Update
                        </a>
                    </div>
                    <div>
                        <div class="text-right col-md-12">
                            <a href="{{$About->our_facebook_link}}" class="badge badge-primary">
                                Facebook
                            </a>
                            <a href="{{$About->our_twitter_link}}" class="badge badge-success">
                                Twitter
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @endforeach
            <div class="col-md-12">
                {{$Abouts->links()}}
            </div>
    @else
        <div class="col-md-12">
            <div class="card card-gray-dark">
                <div class="card-header">
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            Close
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <strong>No About-us-Information Found yet !</strong>
                    <br>
                    <hr>
                    <a href="{{route('add-about-information')}}" class="btn btn-outline-info">Click Here To Add One</a>
                </div>
            </div>
        </div>

    @endif
</div>
        </div>
    </section>
</div>
@endsection
