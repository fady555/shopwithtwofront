@extends('layouts.back_app')



@section('title')
    Size
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
                    <h3 class="card-title">Size</h3>
                    <form method="get" action="{{route('insert_size')}}">
                        <div class="input-group input-group-sm">
                            <input style="max-width: 322px" name="new_size" type="text" placeholder="Enter new size" class="form-control">
                            <span class="input-group-append">
                    <button type="submit" class="btn btn-info btn-flat">Add size +</button>
                  </span>
                        </div>
                    </form>
                    {{--  ERRORE WITH CHEEK status  --}}
                    @if ($errors->has('new_size'))
                        <span class="text-danger "role="alert">
                            <strong>
                                {{ $errors->first('new_size') }}.!!!!!!!!!!
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
                            <th>size</th>
                            <th>Edit</th>
                            <th>Delect</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach(\App\Size::all() as $size)


                            <tr>
                                <td >{{$size->id}}.</td>

                                <td >
                                    <d id="{{$size->size}}">{{$size->size}}</d>

                                    <form method="get" action="{{route('insert_edit_size')}}">
                                        <input name="id" type="hidden" value="{{$size->id}}">
                                        <input  style="display:none" name="new_size_edit"  class="form-control " type="text" id="inp{{$size->id}}" onchange="submit()" value="{{$size->size}}">
                                    </form>

                                </td>

                                <td>
                                    <a   id="x{{$size->id}}" class="btn  btn-sm bg-info">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                </td>

                                <td>
                                    <a href="{{route('delete_size',['id' => $size->id])}}"  class="btn btn-sm bg-danger ">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                </td>

                            </tr>

                            <script>document.getElementById('x'+{{$size->id}}).onclick= function (){document.getElementById('inp'+{{$size->id}}).style.display = 'block' ;document.getElementById('{{$size->size}}').style.display = 'none';}</script>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>



        </div>
    </div>



@endsection
