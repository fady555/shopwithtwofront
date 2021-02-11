@extends('layouts.back_app')


@section('title')
    Add Users +
@endsection


@section('back_content')

    <form role="form" action="{{route('insert_user')}}" method="post"  enctype="multipart/form-data" >
       @csrf
        <div class="card-body">

            @if(Session::has('alert-add-user'))
                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-info"></i> Alert!</h5>
                    {{ Session::get('alert-add-user') }}.
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
            {{-- ===================================first name============================================ --}}
            <div class="form-group">
                <label for="exampleInputEmail1">{{__('First name')}}</label>
                <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" placeholder="{{__('First name')}}">
            </div>
            {{-- ===================================last name============================================ --}}
            <div class="form-group">
                <label for="exampleInputEmail1">{{__('Last name')}}</label>
                <input type="text"name="last_name"  class="form-control" id="exampleInputEmail1" placeholder="{{__('Last name')}}">
            </div>
            {{-- ===================================email============================================ --}}
            <div class="form-group">
                <label for="exampleInputEmail1">{{__('email')}}</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="{{__('email')}}">
            </div>

            {{-- ===================================password=======and cofirm===================================== --}}
            <div class="form-group">
                <label for="exampleInputEmail1">{{__('Password')}}</label>
                <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="{{__('Password')}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">{{__('Confirm password')}}</label>
                <input type="password" name="password_confirmation" class="form-control" id="exampleInputEmail1" placeholder="{{__('Confirm password')}}">
            </div>
            {{-- ===================================mobil============================================ --}}
            <div class="form-group">
                <label for="exampleInputEmail1">{{__('mobil')}}</label>
                <input type="text" name="mobil" class="form-control" id="exampleInputEmail1" placeholder="{{__('mobil')}}">
            </div>

            {{-- ===================================role============================================ --}}

            <div class="col-sm-6">
                <!-- select -->
                <div class="form-group">
                    <label>Role</label>
                    <select class="form-control" name="role">
                        @foreach($roles as $role)
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
                        <label class="custom-file-label" for="exampleInputFile">{{__('Choose file')}}</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
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
            <button type="submit" class="btn btn-block btn-primary ">Submit</button>
        </div>
    </form>

@endsection
