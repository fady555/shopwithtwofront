@extends('layouts.back_app')



@section('title')
    Itms
@endsection


@section('back_content')

    @php empty($productSelect)?$productSelect = []:""; //if(empty($productSelect)){$productSelect = [];} @endphp

    @foreach(\App\Product::all() as $product)

                @if(!empty($productSelect[$product->id])) checked{{$product->id}} @endif
    @endforeach
<div class="container mt-3">
    <div class="card">
        <div class="card-header border-0">

            <a href="{{route('add_itm')}}" class="btn btn-app  active  bg-info"><i class="fas fa-plus-circle"></i> Add Itm </a>

            <button type="button" class="btn btn-lg  btn-block btn-secondary mb-2" data-toggle="modal" data-target="#modal-secondary">
                Itms of @php if(empty($productSelect)){echo "All";} @endphp
            @for($pc = 0; $pc<count($productSelect);$pc++)
                <span> {{\App\Product::find($productSelect[$pc])->name}} </span>,,
                @endfor
            </button>
{{--------------------------------------------------------------------------------------------------------------}}
        <form method="get" action="{{route('show_itms')}}">
            <label for="exampleInputName">Show By Prducts</label>
            <div class="form-group">
                @foreach(\App\Product::all() as $product)
                    <div class="form-check form-check-inline">
                        <input  @if(in_array($product->id,$productSelect)) checked @endif class="form-check-input" onchange="submit();" type="checkbox" name="products[]"  id="inlineCheckbox{{$product->id}}" value="{{$product->id}}">
                        <label class="form-check-label" for="inlineCheckbox{{$product->id}}">{{$product->name}}</label>
                    </div>
                @endforeach
            </div>
        </form>
{{--------------------------------------------------------------------------------------------------------------}}

            <div class="card-tools">
                <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                </a>
                <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
                <thead>
                <tr>
                    <th>Itm</th>
                    <th>Price</th>
                    <th>Descount</th>
                    <th>N-Itm </th>
                    <th>N-Buy </th>
                    <th>Stars</th>
                    <th>User Add </th>
                    <th>Product</th>
                    <th>More</th>
                    <th>Edite</th>
                </tr>
                </thead>


                <tbody>



@foreach($itms as $itm)
                <tr>
                    <td><img  @if(!empty(json_decode($itm->img)[0])) src="<?php echo str_replace('public','',url('/'))."storage/app/".json_decode($itm->img)[0]; ?>"  @endif  class="img-circle img-size-32 mr-2">{{$itm->name}}</td>


                    <td>${{$itm->price}} USD</td>
                    <td><small class="text-info mr-1"><i class="fas fa-arrow-down"></i>{{ 100-($itm->discount/$itm->price*100)  }}%</small>{{$itm->discount}}$</td>
                    <td>{{$itm->number_of_itm}}</td>
                    <td>{{$itm->number_of_buy}}</td>
                    <td>
                        <i class="text-warning fas fa-star"><span class="text-dark">{{$itm->stars}}</span></i>
                    </td>
                    <td>{{\App\User::find($itm->user_id_add)->f_name}}    </td>

                    <td> {{$itm->itm_belong_to_product->name}}</td>
                    <td><a href="{{route('show_itm',['id'=> $itm->id])}}" class="text-muted"><i class="fas fa-search"></i></a></td>
                    <td><a href="{{route('edit_itm',['id'=> $itm->id])}}" class="text-muted"><i class="fas fa-edit"></i></a></td>
                </tr>
@endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>










@endsection
