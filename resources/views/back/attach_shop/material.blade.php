@extends('layouts.back_app')



@section('title')
    Material
@endsection



@section('back_content')

    <div class="container">
        {{----------------------------------------------------------------------------------------------------}}
        @if(session()->has('mess') && session()->has('color') )
            <div class="card {{session()->get('color')}}">
                <div class="card-header">
                    <h3 class="card-title">Success</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    {{session()->get('mess')}}
                </div>
                <!-- /.card-body -->
            </div>
        @endif
        {{----------------------------------------------------------------------------------------------------}}

        <div class="row">



            <div class="card col-lg-12">
                <div class="card-header">
                    <h3 class="card-title">material</h3>
                    <form method="get" action="{{route('insert_material')}}">
                        <div class="input-group input-group-sm">
                            <input style="max-width: 322px" name="new_material" type="text" placeholder="Enter new material" class="form-control">
                            <span class="input-group-append">
                    <button type="submit" class="btn btn-info btn-flat">Add material +</button>
                  </span>
                        </div>
                    </form>
                    {{--  ERRORE WITH CHEEK status  --}}
                    @if ($errors->has('new_material'))
                        <span class="text-danger "role="alert">
                            <strong>
                                {{ $errors->first('new_material') }}.!!!!!!!!!!
                            </strong>
                    </span>
                    @endif
                    {{--  ERRORE WITH CHEEK status  --}}
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>material</th>
                            <th>Edit</th>
                            <th>Delect</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach(\App\Material::all() as $material)


                            <tr>
                                <td >{{$material->id}}.</td>

                                <td >
                                    <d id="{{$material->mater_name}}">{{$material->mater_name}}</d>

                                    <form method="get" action="{{route('insert_edit_material')}}">
                                        <input name="id" type="hidden" value="{{$material->id}}">
                                        <input  style="display:none" name="new_material_edit"  class="form-control " type="text" id="inp{{$material->id}}" onchange="submit()" value="{{$material->mater_name}}">
                                    </form>

                                </td>

                                <td>
                                    <a   id="x{{$material->id}}" class="btn  btn-sm bg-info">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                </td>

                                <td>
                                    <a href="{{route('delete_material',['id' => $material->id])}}"  class="btn btn-sm bg-danger ">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                </td>

                            </tr>

                            <script>document.getElementById('x'+{{$material->id}}).onclick= function (){document.getElementById('inp'+{{$material->id}}).style.display = 'block' ;document.getElementById('{{$material->mater_name}}').style.display = 'none';}</script>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>



        </div>
    </div>



@endsection
