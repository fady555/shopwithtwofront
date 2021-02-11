@extends('layouts.back_app')

@section('title')

@endsection


@section('back_content')

    <form role="form" action="{{route('insert_edit')}}" method="post"  enctype="multipart/form-data" >
        @csrf
        <div class="card-body">

            @if(Session::has('alert-password-same'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-info"></i> Alert!</h5>
                    {{ Session::get('alert-password-same') }}.
                </div>

            @endif

                @if(Session::has('alert-edit-success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-info"></i> Alert!</h5>
                        {{ Session::get('alert-edit-success') }}.
                    </div>

                @endif



            {{-- ===================================star errrror name============================================ --}}
            @if ($errors->any())
                <div class="input-group mb-3">
                    <ul>

                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible ">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                                {{$error}}
                            </div>
                        @endforeach

                    </ul>
                </div>
            @endif
                {{-- ===================================id user============================================ --}}
                        <input type="hidden" name="id" value="{{$user->id}}" >

                {{-- ===================================first name============================================ --}}
            <div class="form-group">
                <label for="exampleInputEmail1">{{__('First name')}}</label>
                <input type="text" name="first_name" value="{{$user->f_name}}" class="form-control" id="exampleInputEmail1" placeholder="{{__('First name')}}">
            </div>
            {{-- ===================================last name============================================ --}}
            <div class="form-group">
                <label for="exampleInputEmail1">{{__('Last name')}}</label>
                <input type="text"name="last_name" value="{{$user->l_name}}"   class="form-control" id="exampleInputEmail1" placeholder="{{__('Last name')}}">
            </div>
            {{-- ===================================email============================================ --}}
            <div class="form-group">
                <label for="exampleInputEmail1">{{__('email')}}</label>
                <input type="email" name="email" value="{{$user->email}}" class="form-control" id="exampleInputEmail1" placeholder="{{__('email')}}">
            </div>

            {{-- ===================================password=======and cofirm===================================== --}}
            <div class="form-group">
                <label for="exampleInputEmail1">{{__('Old password')}}</label>
                <input type="password" name="password_old" class="form-control" id="exampleInputEmail1" placeholder="{{__('Password old')}}">
            </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">{{__('New password')}}</label>
                    <input type="password" name="password_new" class="form-control" id="exampleInputEmail1" placeholder="{{__(' write new pass or leave empty')}}">
                </div>
            <div class="form-group">
                <label for="exampleInputEmail1">{{__('Confirm password')}}</label>
                <input type="password" name="password_confirmation_new" class="form-control" id="exampleInputEmail1" placeholder="{{__('Confirm password')}}">
            </div>
            {{-- ===================================mobil============================================ --}}
            <div class="form-group">
                <label for="exampleInputEmail1">{{__('mobil')}}</label>
                <input type="text" name="mobil" value="{{$user->mobil}}" class="form-control" id="exampleInputEmail1" placeholder="{{__('mobil')}}">
            </div>

            {{-- ===================================role============================================ --}}

            <div class="col-sm-6">
                <!-- select -->
                <div class="form-group">
                    <label>Role</label>
                    <select class="form-control" name="role">

                        <option value="{{$user->role_id}}">@php $x =  \App\Role::where('id','=',$user->role_id)->get() ;echo $x[0]->role; @endphp</option>

                    @foreach(\App\Role::all() as $role)
                            <option value="{{$role->id}}">{{$role->role}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            {{-- ===================================avatare ============================================ --}}


            <div class="form-group">
                <label for="exampleInputFile">{{__('Avatare')}}</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="img_user" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text" id=""> <img src="<?php echo str_replace('public','',url('/'))."storage/app/".$user->img; ?>" height="100px" width="100px" style="vertical-align: revert" />                        </label>
</span>
                    </div>
                </div>
            </div>


            {{-- ===================================city ============================================ --}}

            <div class="form-group col-sm-4">
                <label>{{__('City')}}</label>
                <select class="form-control" name="city">
                    @foreach($cities as $city)
                        <option value="{{$city->id}}">{{$city->name}}</option>
                    @endforeach

                </select>
            </div>


        </div><!-- /.card-body -->


        <div class="card-footer">
            <button type="submit" class="btn btn-block btn-primary ">Save</button>
        </div>
    </form>

@endsection
