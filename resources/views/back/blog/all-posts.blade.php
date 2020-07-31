@extends('back.admin-app')

@section('title')
    All Posts
@stop

@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">

<div class="row">
{{--Start--}}

    @if(isset($posts) && count($posts) > 0)
    @foreach($posts as $post)
    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
        <div class="card bg-light">
            <div class="card-header text-muted text-left">
                <h1 class="text-muted text-sm"><strong class="badge badge-primary">Title : </strong><p>{{$post->title}}</p></h1>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-muted text-sm"><strong class="badge badge-primary">Description :</strong><p>{{$post->description}}</p></h1>
                    </div>
                    <div class="col-4 text-center">
                        <img src="{{asset('storage/'.$post->avatar)}}" alt="" class="img-circle img-fluid">
                    </div>
                    <div>
                        <a href="{{route('delete-post',$post->id)}}" class="btn btn-sm btn-danger mr-2">
                            Delete
                        </a>
                    </div>
                    <div>
                        <a href="{{route('edit-post',['id'=>$post->id])}}" class="btn btn-sm bg-gradient-yellow mr-2">
                            Update
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endforeach
        <div class="col-md-12">
            {{$posts->links()}}
        </div>
    @endif
{{--End--}}
</div>

        </div>
    </section>
</div>

@endsection
