@extends('layouts.back_app')




@section('back_content')
<div class="container">
    <div class="card card-danger">
        <div class="card-header"><h3 class="card-title">Country</h3></div>
        <div class="card-body">
            <div class="row">
                {{------------------------------------------------------------------------------------------}}
                @foreach($countries as $country)
                <div class="col-md-3">
                    <div class="card card-primary collapsed-card">
                        <div class="card-header " style="display: grid;">
                            <h4 class="card-title">name       :{{substr($country->name,0,19)}}  <span class="badge badge-danger right">{{count($country->country_has_many_states)}}</span> </h4>
                            <h3 class="card-title">sortname   :{{$country->sortname}}</h3>
                            <h3 class="card-title">phone code :{{$country->phonecode}}</h3>

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
                                    <h3 class="card-title">States</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body" style="display: block;">
                                    @for($i=0 ;$i < count($country->country_has_many_states);$i++ )
{{--
                                        <button type="button" class="btn btn-block bg-gradient-danger">
                                            {{$country->country_has_many_states[$i]['name']}}
                                        </button>
--}}
                                        <div class="card card-primary collapsed-card">
                                            <div class="card-header">
                                                <h3 class="card-title">{{$country->country_has_many_states[$i]['name']}}</h3>

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
