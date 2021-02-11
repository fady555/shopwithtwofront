@extends('layouts.back_app')




@section('back_content')
    <div class="container">
        <div class="row">
        @foreach(\App\City::all() as $city)
            <div class="card card-danger col-lg-3">
                <div class="card-header">
                    <h4 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            {{$city->name}}
                        </a>
                    </h4>
                </div>
            </div>
        @endforeach
        </div>
    </div>


@endsection
