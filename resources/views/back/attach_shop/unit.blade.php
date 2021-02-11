@extends('layouts.back_app')



@section('title')
    Unit
@endsection




@section('back_content')




    <div class="continer">
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
                    <h3 class="card-title">Unit</h3>
                    <h3 class="card-title">(code)</h3>
                    <form method="get" action="{{route('insert_unit')}}">
                        <div class="input-group input-group-sm">
                            <input style="max-width: 322px" name="new_unit" type="text" placeholder="Enter new unit" class="form-control">
                            <input style="max-width: 322px" name="new_code" type="text" placeholder="Enter new unit code" class="form-control">
                            <span class="input-group-append"><button type="submit" class="btn btn-info btn-flat">Add unit +</button></span>
                        </div>
                    </form>
                    {{--  ERRORE WITH CHEEK status  --}}
                    @if ($errors->has('new_code'))
                        <span class="text-danger "role="alert">
                            <strong>
                                {{ $errors->first('new_code') }}.!!!!!!!!!!
                            </strong>
                    </span>
                    @endif
                    {{--  ERRORE WITH CHEEK status  --}}
                    {{--  ERRORE WITH CHEEK status  --}}
                    @if ($errors->has('new_unit'))
                        <span class="text-danger "role="alert">
                            <strong>
                                {{ $errors->first('new_unit') }}.!!!!!!!!!!
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
                            <th>Unit</th>
                            <th>Edit</th>
                            <th>Delect</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach(\App\Unit::all() as $unit)


                            <tr>
                                <td >{{$unit->id}}.</td>

                                <td >
                                    <d id="{{$unit->unit_name}}">{{$unit->unit_name}}({{$unit->unit_code}})</d>

                                    <form method="get" action="{{route('insert_edit_unit')}}">
                                        <input name="id" type="hidden" value="{{$unit->id}}">
                                        <input  style="display:none" name="new_unit_edit"  class="form-control " type="text" id="inp{{$unit->id}}" onchange="submit()" value="{{$unit->unit_name}}({{$unit->unit_code}})">
                                    </form>

                                </td>





                                <td>
                                    <a   id="x{{$unit->id}}" class="btn  btn-sm bg-info">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                </td>

                                <td>
                                    <a href="{{route('delete_unit',['id' => $unit->id])}}"  class="btn btn-sm bg-danger ">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                </td>

                            </tr>

                            <script>document.getElementById('x'+{{$unit->id}}).onclick= function (){document.getElementById('inp'+{{$unit->id}}).style.display = 'block' ;document.getElementById('{{$unit->unit_name}}').style.display = 'none';}</script>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>



        </div>
    </div>


@endsection
