@extends('layouts.back_app')



@section('title')
    Add Itm
@endsection



@section('back_script_style_on_tha_body')

@endsection


@section('back_content')

    {{-- ===================================star errrror name============================================ --}}
    @if ($errors->any())

        <div class="container mt-3">
            <div class="row">
                @foreach ($errors->all() as $error)
                    <div class="col-md-3">
                        <div class="card bg-info">
                            <div class="card-header">
                                <h3 class="card-title">Notify</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div  class="card-body">
                                <h6 class="">{{$error}}</h6>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                @endforeach

            </div>
        </div>
    @endif
    {{-- ===================================end errrrorrre name============================================---}}




        <div class="container">
            <div class="card card-info">
                <div class="card-header"><h3 class="card-title">Add Itm</h3></div>
                <form role="form" method="post" action="{{route('insert_itm')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
    {{-------------------------------------------- name itm -----------------------------------------------------------}}
                    <div class="form-group ">
                        <label for="exampleInputName">Name Itm </label>
                        <input type="text" name="name_itm" class="form-control" id="exampleInputName" placeholder="Enter Itm">
                    </div>
{{-------------------------------------------- description_itm-----------------------------------------------------------}}

                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description_itm" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>
{{-------------------------------------------- status itm -----------------------------------------------------------}}
                    <label for="exampleInputName">Status </label>

                    <div class="form-group">



                        @foreach(\App\Status::all() as $status)
                            <div class="form-check">
                                <input id="{{$status->id}}" class="form-check-input" type="checkbox" name="status[]" value="{{$status->id}}">
                                <label for="{{$status->id}}" class="form-check-label">{{$status->status}}</label>
                            </div>
                        @endforeach

                    </div>

{{-------------------------------------------- made material  itm -----------------------------------------------------------}}

                        <label for="exampleInputName">Made Material </label>

                        <div class="form-group">

                            @foreach(\App\Material::all() as $material)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="material[]"  id="inlineCheckbox{{$material->id}}" value="{{$material->id}}">
                                    <label class="form-check-label" for="inlineCheckbox{{$material->id}}">{{$material->mater_name}}</label>
                                </div>
                            @endforeach

                        </div>

{{-------------------------------------------- Price itm -----------------------------------------------------------}}
                    <div class="form-group">
                        <label >Price</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                            </div>
                            <input type="number" name="price" class="form-control small" >
                        </div>
                        <label >discount</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                            </div>
                            <input type="number" name="discount" class="form-control small" >
                        </div>
                    </div>
{{-------------------------------------------- color itm -----------------------------------------------------------}}


                    <div  id="colorx" class="form-group " style="margin-top: 20px">

                        <label >Color</label>
                        <div class="card-footer  clearfix bg-info " style="border-radius: 10px;">
                            <button type="button" id="plus_color" class="btn btn-danger float-right"><i class="fas fa-plus"></i> Add Color</button>
                        </div>

                        <section id="colorx" style="margin-top: 20px"></section>
                    </div>

                        <script>
                            var click_pluse = document.getElementById('plus_color').addEventListener('click',function (){
                                ///alert('dfdf');
                                var mak_inp_color = document.createElement('input');
                                mak_inp_color.type = 'color';
                                mak_inp_color.name = 'color[]';
                                document.getElementById('colorx').appendChild(mak_inp_color);

                            });
                        </script>


{{-------------------------------------------- Unit itm -----------------------------------------------------------}}
                    <div class="form-group">
                        <label>Unit</label>
                        <div class="select2-purple" data-select2-id="44">
                            <select class="select2 select2-hidden-accessible" name="unit[]" multiple="" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;" data-select2-id="15" tabindex="-1" aria-hidden="true">
                                @foreach(\App\Unit::all() as $unit)
                                <option value="{{$unit->id}}">{{$unit->unit_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

{{-------------------------------------------- size itm -----------------------------------------------------------}}
<style>.select2-container--default .select2-selection--multiple .select2-selection__choice{background-color: #17a2b8;}</style>
                    <div class="form-group">
                        <label>Size</label>
                        <select class="select2 select2-hidden-accessible" name="size[]" multiple="" data-placeholder="Select a State" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
                            @foreach(\App\Size::all() as $size)
                                <option value="{{$size->id}}">{{$size->size}}</option>
                            @endforeach
                        </select>
                    </div>


{{-------------------------------------------- Number itm -----------------------------------------------------------}}

                    <div class="form-group">
                        <label for="exampleInputNumber">Number of itm is Exists</label>
                        <input type="number" name="number_itm" class="form-control" id="exampleInputNumber" placeholder="Enter Number">
                    </div>
{{-------------------------------------------- product itm -----------------------------------------------------------}}

                    <div class="form-group">
                        <label for="exampleInputEmail1">product</label>
                        <select class="form-control" name="product_id">

                            @foreach(\App\Product::all() as  $product)
                                <option value="{{$product->id}}"> {{$product->name}}</option>
                            @endforeach

                        </select>
                    </div>
{{-------------------------------------------- img itm-----------plus_img------------------------------------------------}}

<div class="form-group">
    <label >Imges Itm</label>

    <div class="card-footer  clearfix bg-info " style="border-radius: 10px;">
        <button type="button" id="plus_img" class="btn btn-danger float-right"><i class="fas fa-plus"></i> Add Img</button>
    </div>


</div>

        <div id="imgx" class="row">
            <label></label>

{{----
                <div id="z"  class="input-group col-lg-4">
                    <div class="custom-file">
                        <input type="file" name="img[]" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" >Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text" >Upload</span>
                    </div>
                </div>
---}}



        </div>

{{--------------------------------------------------------------------------------------------------}}
<script>
    document.getElementById('plus_img').addEventListener('click',function (){





        var input = document.createElement('input');
        input.type = "file";
        input.name = "img[]";
        input.className = "custom-file-input"
        input.id = ""

        var label = document.createElement('label');
        label.className = "custom-file-label";
        label.textContent = "Choose file";

        var div2 = document.createElement('div');
        div2.className = "custom-file";

        div2.appendChild(input);
        div2.appendChild(label);
        //*****************************************/*

        var span = document.createElement('span');
        span.className = "input-group-text";
        span.textContent = "Upload";


        var div3 = document.createElement('div');
        div3.className = "input-group-append"

        div3.appendChild(span);

    //***********************************************

        var div1 = document.createElement('div');
        div1.className = "input-group col-lg-4";
        div1.appendChild(div2);
        div1.appendChild(div3);

        document.getElementById('imgx').appendChild(div1);



    });
</script>

{{--------------------------------------------------------------------------------------------------}}
                    <div class="form-group"><label for="exampleInputNumber"></label></div>

{{-------------------------------------------- cheek_bbox itm  and submit-----------------------------------------------------------}}
                    <div class="form-group"><label for="exampleInputNumber">Ratifiy Itm</label></div>
                    <div class="form-check ">
                        <input type="checkbox" name="ratify" value="1" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label text-primary" for="exampleCheck1">Ratify</label>
                    </div>

        </div>
        <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-info btn-block">Submit</button>
                </div>
            </form>
        </div>



@endsection
