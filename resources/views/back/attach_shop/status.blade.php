@extends('layouts.back_app')


@section('title')
    Status
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
                  <h3 class="card-title">Status</h3>
            <form method="get" action="{{route('insert_status')}}">
                  <div class="input-group input-group-sm">
                      <input  style="max-width: 322px" name="new_status"  type="text" placeholder="Enter new status" class="form-control">
                      <span class="input-group-append">
                    <button  onclick="" type="submit" class="btn btn-info btn-flat">Add Status +</button>
                  </span>
                  </div>
            </form>
                  {{--  ERRORE WITH CHEEK status  --}}
                  @if ($errors->has('new_status'))
                      <span class="text-danger "role="alert">
                            <strong>
                                {{ $errors->first('new_status') }}.!!!!!!!!!!
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
                          <th>Status</th>
                          <th>Edit</th>
                          <th>Delect</th>

                      </tr>
                      </thead>
                      <tbody>
                      @foreach(\App\Status::all() as $status)


                          <tr>
                              <td >{{$status->id}}.</td>

                              <td >
                                 <d id="{{$status->status}}">{{$status->status}}</d>

                                  <form method="get" action="{{route('insert_edit_status')}}">
                                      <input name="id" type="hidden" value="{{$status->id}}">
                                  <input  style="display:none" name="new_status_edit"  class="form-control " type="text" id="inp{{$status->id}}" onchange="submit()" value="{{$status->status}}">
                                  </form>

                              </td>

                              <td>
                                  <a   id="x{{$status->id}}" class="btn  btn-sm bg-info">
                                      <i class="fas fa-edit"></i> Edit
                                  </a>
                              </td>

                              <td>
                                  <a href="{{route('delete_status',['id' => $status->id])}}"  class="btn btn-sm bg-danger ">
                                      <i class="fas fa-trash"></i> Delete
                                  </a>
                              </td>

                          </tr>

                          <script>document.getElementById('x'+{{$status->id}}).onclick= function (){document.getElementById('inp'+{{$status->id}}).style.display = 'block' ;document.getElementById('{{$status->status}}').style.display = 'none';}</script>
                      @endforeach
                      </tbody>
                  </table>
              </div>
              <!-- /.card-body -->
          </div>



      </div>
  </div>




@endsection
