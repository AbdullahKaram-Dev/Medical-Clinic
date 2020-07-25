@extends('back.admin-app')

@section('title')
    Edit Department
@stop

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <form action="{{route('update-department',$department->id)}}" method="POST" enctype="multipart/form-data" role="form">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="NameDoctor">Name Department</label>
                            <input type="text" name="name" value="{{$department->name}}" class="form-control" id="NameDoctor" placeholder="Enter Name">
                        </div>
                        @error('name')
                        <div class="text-xs text-red">
                            {{$message}}
                        </div>
                        @enderror

                        <div class="form-group">
                            <label for="TitleDoctor">Description Department</label>
                            <input type="text" name="description" value="{{$department->description}}" class="form-control" id="TitleDoctor" placeholder="Enter Title">
                        </div>
                        @error('description')
                        <div class="text-xs text-red">
                            {{$message}}
                        </div>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputFile">Avatar Department</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="avatar" class="custom-file-input" id="exampleInputFile">

                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div>
                                    <img src="{{asset('storage/'.$department->avatar)}}" width="300" height="250">
                                </div>
                            </div>
                            @error('avatar')
                            <div class="text-xs text-red">
                                {{$message}}
                            </div>
                            @enderror

                        </div>
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

