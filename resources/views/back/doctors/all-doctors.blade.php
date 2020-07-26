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
    @if(isset($doctors) && count($doctors) > 0)
        @php $counter = 1    @endphp
        @foreach($doctors as $doctor)
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                <div class="card bg-light">
                        <div class="card-header text-muted text-left">
                            <label class="badge badge-primary" >Doctor Title Jop :</label> <span class="badge badge-outline-info">{{$doctor->title_jop}}</span>
                        </div>
                        <div class="card-header text-muted text-left">
                            <label class="badge badge-primary" >Doctor Department :</label> <span class="badge badge-outline-info">{{$doctor->department->name}}</span>
                        </div>
                        <div class="card-header text-muted text-left">
                            <label class="badge badge-primary" >Doctor Number :</label> <span class="badge badge-outline-info">{{$counter++}}</span>
                        </div>

                        <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="lead"><b>Dr Name : {{$doctor->name}}</b></h3>
                                <h2 class="text-muted text-sm"><b>Status : {!! $doctor->status ==='active'?'<label class="badge badge-success">active</label>':'<label class="badge badge-danger">deactivate</label>' !!}</b></h2>
                                <h1 class="text-muted text-sm">Phone : {{$doctor->mobile_number}} <a class="badge badge-success" href="https://wa.me/{{$doctor->mobile_number}}">Whatsapp</a></h1>
                            </div>
                            <div class="col-4 text-center">
                                <img src="{{asset('storage/'.$doctor->avatar)}}" alt="" class="img-circle img-fluid">
                            </div>
                            <div>
                            <a href="{{route('delete-doctor',$doctor->id)}}" class="btn btn-sm btn-danger mr-2">
                                Delete
                            </a>
                            </div>
                            <div>
                            <a href="{{route('edit-doctor',$doctor->id)}}" class="btn btn-sm bg-gradient-yellow mr-2">
                                Update
                            </a>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-right">
                            <a href="{{$doctor->facebook_link}}" class="badge badge-primary">
                                Facebook
                            </a>
                            <a href="{{$doctor->twitter_link}}" class="badge badge-success">
                                Twitter
                            </a>
                            <a href="{{$doctor['linked-in_link']}}" class="badge badge-primary">
                                Linked-in
                            </a>
                            <a href="mailto:{{$doctor->email}}" class="badge badge-success">
                                Email
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{$doctors->links()}}
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
                    <strong>No Doctors Found yet !</strong>
                    <br>
                    <hr>
                    <a href="{{route('add-doctor-form')}}" class="btn btn-outline-info">Click Here To Add One</a>
                </div>
            </div>
        </div>
    @endif
{{--End--}}
</div>


</div>
</section>
</div>

@endsection
