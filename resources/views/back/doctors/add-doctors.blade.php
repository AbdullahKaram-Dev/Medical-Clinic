@extends('back.admin-app')

@section('title')
    Add New Doctor
@stop

@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
    <form action="{{route('add-doctor')}}" method="POST" enctype="multipart/form-data" role="form">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="NameDoctor">Name Doctor</label>
                <input type="text" name="name" value="{{old('name')}}" class="form-control" id="NameDoctor" placeholder="Enter Name">
            </div>
            @error('name')
                <div class="text-xs text-red">
                    {{$message}}
                </div>
            @enderror

            <div class="form-group">
                <label for="TitleDoctor">Doctor Title Jop</label>
                <input type="text" name="title_jop" value="{{old('title_jop')}}" class="form-control" id="TitleDoctor" placeholder="Enter Title">
            </div>
            @error('title_jop')
            <div class="text-xs text-red">
                {{$message}}
            </div>
            @enderror

            <div class="form-group">
                <label for="exampleInputEmail1">Doctor Email address</label>
                <input type="email" name="email" value="{{old('email')}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            @error('email')
            <div class="text-xs text-red">
                {{$message}}
            </div>
            @enderror

            <div class="form-group">
                <label for="exampleInputFile">Doctor Avatar</label>
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

                <div class="form-group">
                    <label for="DoctorLinkFacebook">Doctor Facebook Link</label>
                    <input type="text" name="facebook_link" value="{{old('facebook_link')}}" class="form-control" id="DoctorLinkFacebook" placeholder="Enter Doctor Link Facebook">
                </div>
                @error('facebook_link')
                <div class="text-xs text-red">
                    {{$message}}
                </div>
                @enderror

                <div class="form-group">
                    <label for="DoctorLinkTwitter">Doctor Twitter Link</label>
                    <input type="text" name="twitter_link" value="{{old('twitter_link')}}" class="form-control" id="DoctorLinkTwitter" placeholder="Enter Doctor Link Twitter">
                </div>
                @error('twitter_link')
                <div class="text-xs text-red">
                    {{$message}}
                </div>
                @enderror

                <div class="form-group">
                    <label for="DoctorLinkLinked-In">Doctor Linked-In Link</label>
                    <input type="text" name="linked-in_link" value="{{old('linked-in_link')}}" class="form-control" id="DoctorLinkLinked-In" placeholder="Enter Doctor Link Linked-In">
                </div>
                @error('linked-in_link')
                <div class="text-xs text-red">
                    {{$message}}
                </div>
                @enderror

                <div class="form-group">
                    <label for="DoctorMobile">Doctor Mobile-Number</label>
                    <input type="number" name="mobile_number" value="{{old('mobile_number')}}" class="form-control" id="DoctorMobile" placeholder="Enter Doctor Mobile Number">
                </div>
                @error('mobile_number')
                <div class="text-xs text-red">
                    {{$message}}
                </div>
                @enderror

            </div>

            <div class="form-group">
                <label for="DoctorStatus">Doctor Status</label>
                <select id="DoctorStatus" class="form-control" name="status">
                    <option value="active">Active</option>
                    <option value="deactivate">Deactivate</option>
                </select>
            </div>
            @error('status')
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
