@extends('back.admin-app')

@section('title')
    Add New Department
@stop

@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
    <form action="{{route('add-department')}}" method="POST" enctype="multipart/form-data" role="form">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="NameDoctor">Department Name</label>
                <input type="text" name="name" value="{{old('name')}}" class="form-control" id="NameDoctor" placeholder="Enter Name">
            </div>
            @error('name')
                <div class="text-xs text-red">
                    {{$message}}
                </div>
            @enderror

            <div class="form-group">
                <label for="TitleDoctor">Department Description</label>
                <input type="text" name="description" value="{{old('description')}}" class="form-control" id="TitleDoctor" placeholder="Enter Title">
            </div>
            @error('description')
            <div class="text-xs text-red">
                {{$message}}
            </div>
            @enderror

            <div class="form-group">
                <label for="exampleInputFile">Department Avatar</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="avatar" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
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
