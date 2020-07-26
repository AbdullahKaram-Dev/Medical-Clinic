@extends('back.admin-app')

@section('title')
    All Departments
@stop

@section('content')

<div class="content-wrapper">
<section class="content">
<div class="container-fluid">

<div class="row">
{{--Start--}}
    @if(isset($departments) && count($departments) >0)
        @php $counter = 1 @endphp
    <div class="card-body">
        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                </div>
                <div class="col-sm-12 col-md-6">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">

                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                Name
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                Department Description
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                Avatar
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($departments as $department)
                        <tr role="row" class="odd">
                            <td>{{$counter++}}</td>
                            <td class="sorting_1">
                                {{$department->name}}
                            </td>
                            <td>
                              <div>
                                <a href="{{route('delete-department',$department->id)}}" class="btn btn-sm btn-danger mr-2">
                                    Delete
                                </a>
                                <a href="{{route('edit-department',$department->id)}}" class="btn btn-sm btn-primary mr-2">
                                    Update
                                </a>
                                <a href="{{route('doctors-department',$department->id)}}" class="btn btn-sm btn-link mr-2">
                                      Show All Doctors In Department
                                </a>
                              </div>
                             {{$department->description}}
                            </td>
                            <td>
                                <img src="{{asset('storage/'.$department->avatar)}}" width="250" height="250">
                            </td>
                        </tr>
                        @endforeach
                        {{$departments->links()}}
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
                                        <strong>No Departments Found yet !</strong>
                                        <br>
                                        <hr>
                                        <a href="{{route('add-department-form')}}" class="btn btn-outline-info">Click Here To Add One</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{{--End--}}
</div>

</div>
</section>
</div>
@endsection
