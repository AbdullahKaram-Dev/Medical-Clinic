@extends('back.admin-app')

@section('title')
    Add New Post
@stop

@section('content')

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <form method="POST" action="{{route('add-post')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="row">

                    <div class="col-sm-6">
                        <label class="custom-label" for="title">Title</label>
                        <div class="form-group">
                            <input class="form-control" name="title" id="title" type="text" placeholder="Write Title Here">
                        </div>
                        @error('title')
                        <div class="text-xs text-red">
                            {{$message}}
                        </div>
                        @enderror
                    </div>


                    <div class="col-12">
                        <label class="custom-label" for="description">Description Post</label>
                        <div class="form-group">
                            <textarea class="form-control w-50" name="description" id="description" cols="30" rows="10" placeholder="Write Description Here"></textarea>
                        </div>
                        @error('description')
                        <div class="text-xs text-red">
                            {{$message}}
                        </div>
                        @enderror
                    </div>


                    <div class="col-6">
                        <label class="custom-label" for="avatar">Upload Photo Post</label>
                        <div class="custom-file">
                            <input type="file" name="avatar" class="custom-file-input" id="avatar">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        @error('avatar')
                        <div class="text-xs text-red">
                            {{$message}}
                        </div>
                        @enderror
                    </div>


                        <div class="col-12 mt-2">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </div>

                    </form>

            </div>
        </section>
    </div>
@endsection
