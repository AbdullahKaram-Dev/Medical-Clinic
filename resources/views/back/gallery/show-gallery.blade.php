@extends('back.admin-app')

@section('title')
    show Gallery Photo
@stop

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row ">
                    @if(isset($galleries) && count($galleries) > 0)
                        @foreach($galleries as $gallery)
                            @if(isset($array) && count($array) > 0)
                                @foreach($array as $arr)
                                    <div class="col-md-1" style="margin-bottom:24px;">
                                        <img src="{{asset('storage/'.$gallery[$arr])}}" class="img-thumbnail">
                                    </div>
                                    @if($loop->last)
                                        <div class="col-md-12">
                                            <a href="{{route('gallery-delete',['id'=>$gallery->id])}}" class="btn btn-sm btn-danger">
                                                Delete Gallery
                                            </a>
                                            <a href="{{route('change-status',$gallery->id)}}" class="btn btn-sm">
{!! $gallery->status ==='active'?'<label class="badge badge-success">active</label>':'<label class="badge badge-danger">deactivate</label>'!!} change status.
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                        {{$galleries->links()}}
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
                                    <strong>No Gallery Found yet !</strong>
                                    <br>
                                    <hr>
                                    <a href="{{route('add-gallery-form')}}" class="btn btn-outline-info">Click Here To Add One</a>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </section>
    </div>
@endsection
