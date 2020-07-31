@extends('back.admin-app')

@section('title')
    Add Gallery Photo
@stop

@section('content')

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">

            <form method="post" action="{{route('gallery-upload')}}" enctype="multipart/form-data">
                @csrf
                <div class="row ">
                    <div class="col-md-12 ml-4 mt-4  mb-1" ><p class="text-primary">Please Upload Only 6 Photos</p></div>
                    <div class="col-md-12  ml-4">
                        <input type="file" name="file[]" id="file" accept="image/*" multiple />
                    </div>
                    <div class="col-md-2  ml-4 mt-2">
                        <p class="text-primary">Select Gallery Status</p>
                        <select id="DoctorStatus" class="form-control" name="status">
                            <option value="deactivate">Deactivate</option>
                            <option value="active">Active</option>
                        </select>
                    </div>
                    <div class="col-md-12  m-4">
                        <input type="submit"  class="btn btn-success" />
                    </div>
                </div>
            </form>
            <br />
            <div class="progress">
                <div class="progress-bar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                    0%
                </div>
            </div>
            <br />
            <div id="status" class="row">

            </div>
            <br/>

            </div>
        </section>
    </div>

@endsection


@section('scripts')
<script>
    $(document).ready(function(){

        $('form').ajaxForm({
            beforeSend:function(){
                $('#status').empty();
                $('.progress-bar').text('0%');
                $('.progress-bar').css('width', '0%');
            },
            uploadProgress:function(event, position, total, percentComplete){
                $('.progress-bar').text(percentComplete + '%');
                $('.progress-bar').css('width', percentComplete + '%');
            },
            success:function(data)
            {
                if(data.success)
                {
                    $('#status').html('<div class="text-success text-center col-md-12"><b>'+data.success+'</b></div><br /><br />');
                    $('#status').append(data.image);
                    $('.progress-bar').text('Uploaded');
                    $('.progress-bar').css('width', '100%');
                }else{

                    $('#status').html('<div class="text-danger text-center col-md-12"><b>'+data.error+'</b></div><br /><br />');
                    $('.progress-bar').css('width', '0%');

                }
            }

        });
    });
</script>
@stop
