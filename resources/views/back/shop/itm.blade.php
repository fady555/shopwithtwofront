@extends('layouts.back_app')



@section('title')

    {{$itm->name}}

@endsection





@section('back_content')




    <section class="content">

        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3 class="d-inline-block d-sm-none">ff</h3>
                        <div class="col-12">

                    @if(isset(json_decode($itm->img)[0]))
                        <img src="<?php echo str_replace('public','',url('/'))."storage/app/".json_decode($itm->img)[0]; ?>" class="product-image" alt="{{json_decode($itm->img)[0]}}">
                        </div>
                        <div class="col-12 product-image-thumbs">
                            @for($u=0;$u<count(json_decode($itm->img)) ; $u++)
                            <div class="product-image-thumb active"><img src="<?php echo str_replace('public','',url('/'))."storage/app/".json_decode($itm->img)[$u]; ?>" alt="Product Image"></div>
                            @endfor
                    @endif

                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h2 class="my-3">Avalibale Count( {{$itm->number_of_itm}} )</h2>
                        <h3 class="my-3">{{$itm->name}}</h3>
                        <p>{{$itm->description}}</p>

                        <hr>
{{-------------------------------------------------- color ---------------------------------------------------------}}
                        @if(!empty(json_decode($itm->color)))
                        <h4>Available Colors</h4>
                        <div class="btn-group btn-group-toggle " data-toggle="buttons">
                            @for($c = 0;$c <count(json_decode($itm->color));$c++)
                            <label class="btn btn-default text-center active">
                                {{$c}}
                                <br>
                                <i class="fas fa-circle fa-2x text-{{json_decode($itm->color)[$c]}}" style="color: {{json_decode($itm->color)[$c]}}"></i>
                            </label>
                            @endfor
                        </div>
                        @endif
{{-------------------------------------------------- size ---------------------------------------------------------}}
                        @if(!empty(json_decode($itm->size)))
                        <h4 class="mb-3 mt-3">Available Size</h4>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                            @for($si = 0 ; $si<count(json_decode($itm->size)) ; $si++)
                            <label class="btn btn-default text-center">
                                <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                                <span class="text-xl">{{strtoupper(substr(\App\Size::find(json_decode($itm->size)[$si])->size,0,1))}}</span>
                                <br>
                                {{\App\Size::find(json_decode($itm->size)[$si])->size}}
                            </label>
                            @endfor

                        </div>
                        @endif
{{-------------------------------------------------- status ---------------------------------------------------------}}
                        @if(!empty(json_decode($itm->status)))
                        <h4 class="mb-3 mt-3">Available Status</h4>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            @for($si = 0 ; $si<count(json_decode($itm->status)) ; $si++)
                                <label class="btn btn-default text-center">
                                    <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                                    <span class="text-xl">{{strtoupper(substr(\App\Status::find(json_decode($itm->status)[$si])->status,0,1))}}</span>
                                    <br>
                                    {{\App\Status::find(json_decode($itm->status)[$si])->status}}
                                </label>
                            @endfor
                        </div>
                        @endif
{{-------------------------------------------------- made material ---------------------------------------------------------}}
                        @if(!empty(json_decode($itm->made_material)))
                        <h4 class="mb-3 mt-3">Available Material</h4>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            @for($si = 0 ; $si<count(json_decode($itm->made_material)) ; $si++)
                                <label class="btn btn-default text-center">
                                    <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                                    <span class="text-xl">{{strtoupper(substr(\App\Material::find(json_decode($itm->made_material)[$si])->mater_name,0,1))}}</span>
                                    <br>
                                    {{\App\Material::find(json_decode($itm->made_material)[$si])->mater_name}}
                                </label>
                            @endfor
                        </div>
                        @endif
{{-------------------------------------------------- unit  ---------------------------------------------------------}}
                        @if(!empty(json_decode($itm->unit)))
                        <h4 class="mb-3 mt-3">Available Unit</h4>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            @for($si = 0 ; $si<count(json_decode($itm->unit)) ; $si++)
                                <label class="btn btn-default text-center">
                                    <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                                    <span class="text-xl">{{strtoupper(substr(\App\Unit::find(json_decode($itm->unit)[$si])->unit_name,0,1))}}</span>
                                    <br>
                                    {{\App\Unit::find(json_decode($itm->unit)[$si])->unit_name}}
                                </label>
                            @endfor
                        </div>
                        @endif
{{------------------------------------------------------------------------------------------------------------}}

                        <div class="bg-gray py-2 px-3 mt-4">
                            <h2 class="mb-0">
                                ${{$itm->discount}}
                            <s class="text-black-50"> ${{$itm->price}} </s>
                            </h2>
                            <h4 class="mt-0">
                                <small>Ex Tax: $80.00 </small>
                            </h4>
                        </div>

                        <div class="mt-4">
                            <div class="btn btn-primary btn-lg btn-flat">
                                <i class="fas fa-cart-plus fa-lg mr-2"></i>
                                Add to Cart
                            </div>

                            <div class="btn btn-default btn-lg btn-flat">
                                <i class="fas fa-heart fa-lg mr-2"></i>
                                Add to Wishlist
                            </div>
                        </div>

                        <div class="mt-4 product-share">
                            <a href="#" class="text-gray">
                                <i class="fab fa-facebook-square fa-2x"></i>
                            </a>
                            <a href="#" class="text-gray">
                                <i class="fab fa-twitter-square fa-2x"></i>
                            </a>
                            <a href="#" class="text-gray">
                                <i class="fas fa-envelope-square fa-2x"></i>
                            </a>
                            <a href="#" class="text-gray">
                                <i class="fas fa-rss-square fa-2x"></i>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="row mt-4">
                    <nav class="w-100">
                        <div class="nav nav-tabs" id="product-tab" role="tablist">
                            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                            <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
                        </div>
                    </nav>
                    <div class="tab-content p-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> {{$itm->description}} </div>
                        <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>








@endsection
