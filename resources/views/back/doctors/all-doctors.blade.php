@extends('back.admin-app')

@section('title')
    All Doctors
@stop

@section('content')

<div class="content-wrapper">
<section class="content">
<div class="container-fluid">

<div class="row">
{{--Start--}}
    @if(isset($doctors))
        @foreach($doctors as $doctor)
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                <div class="card bg-light">

                    <div class="card-header text-muted border-bottom-0">
                        Title Jop : {{$doctor->title_jop}}
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="lead"><b>{{$doctor->name}}</b></h3>
                                <h2 class="text-muted text-sm"><b>Status : {!! $doctor->status ==='active'?'<label class="badge badge-success">active</label>':'<label class="badge badge-danger">deactivate</label>' !!}</b></h2>
                                <h1 class="text-muted text-sm">Phone :{{$doctor->mobile_number}}</h1>
                            </div>
                            <div class="col-4 text-center">
                                <img src="{{asset('storage/'.$doctor->avatar)}}" alt="" class="img-circle img-fluid">
                            </div>
                            <div>
                            <a href="{{route('delete-doctor',$doctor->name)}}" class="btn btn-sm btn-danger mr-2">
                                Delete
                            </a>
                            </div>
                            <div>
                            <a href="{{$doctor->facebook_link}}" class="btn btn-sm bg-gradient-yellow mr-2">
                                Update
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-right">
                            <a href="{{$doctor->facebook_link}}" class="btn btn-sm btn-primary">
                                Facebook
                            </a>
                            <a href="{{$doctor->twitter_link}}" class="btn btn-sm btn-primary">
                                Twitter
                            </a>
                            <a href="{{$doctor['linked-in_link']}}" class="btn btn-sm btn-primary">
                                Linked-in
                            </a>
                            <a href="mailto:{{$doctor->email}}" class="btn btn-sm btn-primary d-inline">
                                Email
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
{{--End--}}
</div>


</div>
</section>
</div>

@endsection
