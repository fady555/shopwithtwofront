@extends('layouts.back_app')





@section('back_content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title ">Users</h3>

        </div>
        <!-- /.card-header -->
        <div class="card-body">


            @if(Session::has('alert-delete-user'))
                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-info"></i> Alert!</h5>
                    {{ Session::get('alert-delete-user') }}.
                </div>

            @endif



            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">

                    <div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example1_length"><label>Show
                            <form method="get" action="{{route('show_user_pag')}}">

                                <select onchange="this.form.submit()" name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm">
                                    @if(session()->has('pag'))
                                    <option value="10">{{session()->get('pag')}}</option>
                                    @endif
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>

                            </form>


                                entries</label></div></div>
                    <div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:  <form action="{{route('show_user_search')}}" method="get"><input onchange="this.form.submit" type="search" name="search" class="form-control form-control-sm" placeholder="" value="<?php echo $xx; ?>" aria-controls="example1"></form></label></div></div>
                </div>

                <button type="button" class="btn  btn-block btn-primary btn-link"> <a href="{{route('add_user')}}"><h3 class="text-white">Add</h3> </a> </button>

                <div class="row">
                    <div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">

                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">id</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">F name</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">L name</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Email</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Mobil</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Role</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Photo</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Created at </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Updated at </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Process </th>
                            </tr>
                            </thead>
                            <tbody>



                            @foreach($users as $user)

                                <tr role="row" class="odd">
                                    <td tabindex="0" class="sorting_1">{{$user->id}}</td>
                                    <td>{{$user->f_name}}</td>
                                    <td>{{$user->l_name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->mobil}}</td>
                                    <td>{{ !empty($user->user_role) ? $user->user_role->role:'' }}
                                    <td><img src="<?php echo str_replace('public','',url('/'))."storage/app/".$user->img; ?>" height="50px" width="50px" style="vertical-align: revert" />  </td>
                                    <td>{{$user->created_at}}</td>
                                    <td>{{$user->updated_at}}</td>

                                    <td >
                                        <a  href="{{route('edit_user',['id'=>$user->id])}}"><i class="fas fa-edit text-primary"></i></a>
                                        <form class="d-inline" action="{{ route('delete_user', ['id' => $user->id]) }}" method="post">
                                            <label><input  style="display: none;"  type="submit"  /><i class="fas fa-trash-alt text-danger"></i> </label>
                                            @method('delete')
                                            @csrf
                                        </form>{{-- Route::delete('/delete-user/{id}'--}}
{{--
                                        <form action="{{ route('delete_user', ['id' => $user->id]) }}" method="post">
                                            <input class="btn btn-default" type="submit" value="Delete" />
                                            @csrf
                                        </form>     {{-- Route::post('/delete-user/{id}'--}}
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">id</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">F name</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Last name</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Email</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Mobil</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Role</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Photo</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Created at </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Updated at </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Process</th>
                            </tr>
                            </tfoot>
                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing @php echo count($users) @endphp  from  @php  echo \App\User::count() ; //count($users)  @endphp entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                               {{$users->links()}}
                        </div></div></div></div>
        </div>
        <!-- /.card-body -->
    </div>

@endsection
