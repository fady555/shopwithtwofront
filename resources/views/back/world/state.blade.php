@extends('layouts.back_app')




@section('back_content')
    <div class="container">
        <div class="card card-danger">
            <div class="card-header"><h3 class="card-title">State</h3></div>
            <div class="card-body">
                <div class="row">
                    {{------------------------------------------------------------------------------------------}}
                    @foreach($states as $state)
                        <div class="col-md-3">
                            <div class="card card-primary collapsed-card">
                                <div class="card-header " style="display: grid;">
                                    <h4 class="card-title">N:{{substr($state->name,0,15)}}  <span class="badge badge-danger right">{{count($state->state_has_many_city)}}</span> </h4>


                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-chevron-circle-down"> Show More</i>
                                        </button>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>



                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="card card-primary collapsed-card ">

                                        <div class="card-header">
                                            <h3 class="card-title">City</h3>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                            <!-- /.card-tools -->
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body" style="display: block;">
                                            @for($i=0 ;$i < count($state->state_has_many_city);$i++ )
                                                {{--
                                                                                        <button type="button" class="btn btn-block bg-gradient-danger">
                                                                                            {{$country->country_has_many_states[$i]['name']}}
                                                                                        </button>
                                                --}}
                                                <div class="card card-primary collapsed-card">
                                                    <div class="card-header">
                                                        <h3 class="card-title">{{$state->state_has_many_city[$i]['name']}}</h3>

                                                        <div class="card-tools">
                                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                                            </button>
                                                        </div>
                                                        <!-- /.card-tools -->
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class="card-body">

                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>

                                            @endfor
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                                <!-- /.card-body -->





                            </div>
                            <!-- /.card -->
                        </div>
                    @endforeach
                    {{------------------------------------------------------------------------------------------}}
                </div>
            </div>
        </div>
    </div>





@endsection
