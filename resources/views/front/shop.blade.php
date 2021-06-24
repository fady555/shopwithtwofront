<?php
echo "the respose array ";

    echo "<pre>";
    echo "category_arr";
print_r($category_arr);
    echo "product_arr";
print_r($product_arr);
    echo "arr_status";
print_r($arr_status);
//print_r($min_price);
//print_r($max_price);
    echo "arr_mater";
print_r($arr_mater);
    echo "arr_size";
print_r($arr_size);
    echo "arr_size";
//print_r($itms_popular);

    echo "</pre>";

;?>

<?php
echo "the request array";

    echo "<pre>";
print_r($_GET);
    echo "</pre>";

?>


@extends('layouts.front_app')



@section('title_front')      {{__('lang_front.shop')}}        @endsection

@section('boody_front')




    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>

                    <li class="item-link"><span> shop </span></li>
                    <li class="item-link"><a href="{{route('shop')}}" class="link"><i  class="fa fa-refresh"> refresh filter</i></a></li>

                </ul>
            </div>
            <div class="row">

                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

                    <div class="banner-shop">
                        <a href="#" class="banner-link">
                            <figure><img src="assets/images/shop-banner.jpg" alt=""></figure>
                        </a>
                    </div>

                    <div class="wrap-shop-control">

                        <h1 class="shop-title">{{__('lang_front.filter')}}</h1>

                        <div class="wrap-right">




                            <div class="change-display-mode">
                                <a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
                                <a href="list.html" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>
                            </div>

                        </div>

                    </div><!--end wrap shop control-->

                    <div class="row">
                        @foreach($itms as $itm)
                        <ul class="product-list grid-products equal-container">

                            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem " style="height: 386px;">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="<?php echo str_replace('public','',url('/')).'storage/app/'.json_decode($itm->img)[0]?>" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>{{$itm->name}} </span></a>
                                        <div class="wrap-price"><span class="product-price">{{$itm->discount}}</span><del><p class="product-price">{{$itm->price}}</p></del> </div>
                                        <div class="">
                                            color
                                            [


                                            @foreach(json_decode($itm->color) as $col=>$hcol)
                                                <button class="btn btn-sm" style="background-color: {{$hcol}};"></button>
                                            @endforeach

                                            ]
                                        </div>
                                        <a href="#" class="btn add-to-cart">{{__('lang_front.add_to_card')}} </a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                        @endforeach
                    </div>

                    <div class="wrap-pagination-info">
                        <ul class="page-numbers">

                            <li><a class="page-number-item next-link" href="{{$itms->previousPageUrl()}}">Previous</a></li>

                            @for($pag = 0 ; $pag < $itms->total() ; $pag++)

                            <li><a class="page-number-item  @if( isset($_GET['page']) && $_GET['page'] == $pag+1) current @endif" href="?page={{$pag+1}}">{{$pag+1}}</a></li>
                            @endfor


                            <li><a class="page-number-item next-link" href="{{$itms->nextPageUrl()}}">Next</a></li>
                        </ul>
                        <p class="result-count">Showing 1-{{count($itms)}} of {{count($itms)*$itms->total()}} result</p>
                    </div>
                </div><!--end main products area-->


                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">

                    <form id="filter_form" method="get" action="{{route('shop')}}">

                    <div class="widget mercado-widget categories-widget">
                        <h2 class="widget-title">All Categories</h2>
                        <div class="widget-content">
                            <ul class="list-category">

                                @foreach(\App\Category::with('category_has_many_product')->get() as $category)


                                    @if(count($category->category_has_many_product) > 0 )

                                        <li class="category-item has-child-cate">


                                            <a href="javascript:;" >
                                               <label @if(in_array($category->id,$category_arr)) style="color: green;" @endif  for="{{$category->id}}CAT">
                                                   @if(app()->getLocale() === 'ar') {{$category->name_ar}} @else {{$category->name}} @endif
                                               </label>
                                            </a>
                                            <!------------input checkbox to filter------------->
                                            <input
                                                type="checkbox"
                                                id="{{$category->id}}CAT"
                                                name="categories[]"
                                                value="{{$category->id}}"
                                                onchange="filter_form.submit()"
                                                @if(in_array($category->id,$category_arr)) checked @endif
                                                style="display: none;"
                                            />



                                            <span class="toggle-control">+</span>
                                            <ul class="sub-cate">
                                                @foreach(\App\Product::where('category_id',"=",$category->id)->get() as $product)
                                                <li class="category-item">
                                                        <a href="javascript:;"  class="cate-link">
                                                            <label @if(in_array($product->id,$product_arr)) style="color: green;"   @endif  for="{{$product->id}}PROD">
                                                            @if(app()->getLocale() === 'ar') {{$product->name_ar}} @else {{$product->name}} @endif . ({{\App\Itm::where('product_id',$product->id)->count()}})
                                                            </label>
                                                        </a>

                                                        <!------------input checkbox to filter------------->
                                                        <input
                                                            type="checkbox"
                                                            id="{{$product->id}}PROD"
                                                            name="products[]"
                                                            value="{{$product->id}}"
                                                            onchange="filter_form.submit()"
                                                            @if(in_array($product->id,$product_arr)) checked @endif
                                                            style="display: none;"
                                                        />
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>

                                    @else

                                        <li class="category-item">
                                            <a  href="javascript:;" onclick="filter_form.submit()" @if(in_array($category->id,$category_arr)) style="color: green;" @endif  class="cate-link">
                                                <label for="{{$category->id}}CAT" >@if(app()->getLocale() === 'ar') {{$category->name_ar}} @else {{$category->name}} @endif </label>
                                            </a>
                                            <!------------input checkbox to filter------------->
                                            <input
                                                type="checkbox"
                                                id="{{$category->id}}CAT"
                                                name="categories[]"
                                                value="{{$category->id}}"
                                                onchange="filter_form.submit()"
                                                @if(in_array($category->id,$category_arr)) checked @endif
                                                style="display: none;"
                                            />
                                        </li>

                                    @endif

                                @endforeach

                            </ul>
                        </div>
                    </div><!-- Categories widget-->

                    <div class="widget mercado-widget filter-widget">
                            <h2 class="widget-title">Status</h2>
                            <div class="widget-content">
                                <ul class="list-style vertical-list has-count-index">

                                    @foreach(\App\Status::all() as $status)
                                        <li class="list-item">
                                            <a class="filter-link @if(in_array($status->id,$arr_status)) active @endif"  href="javascript:;">
                                                <label for="{{$status->id}}status">@if(app()->getLocale() == 'en'){{$status->status}} @else no lang  @endif</label>
                                                <input
                                                    type="checkbox"
                                                    name="status[]"
                                                    value="{{$status->id}}"
                                                    id="{{$status->id}}status"
                                                    onchange="filter_form.submit()"
                                                    @if(in_array($status->id,$arr_status)) checked @endif
                                                    style="display: none;"

                                                />
                                            </a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div><!-- status -->

                    <div class="widget mercado-widget filter-widget">
                            <h2 class="widget-title">Prise</h2>
                            <div class="widget-content">
                                Min:<input placeholder="Min" class="input-sm" name="min_price" style="width: 70px;" type="number" value="{{$min_price}}" >
                                Max:<input placeholder="Max" class="input-sm" name="max_price" style="width: 70px;" type="number" value="{{$max_price}}">
                                <input type="submit" class="btn btn-danger " value="Filter">
                            </div>
                        </div><!-- price -->

                    <div class="widget mercado-widget filter-widget">
                            <h2 class="widget-title">material</h2>
                            <div class="widget-content">
                                <ul class="list-style vertical-list has-count-index">

                                    @foreach(\App\Material::all() as $material)
                                        <li class="list-item">
                                            <a class="filter-link @if(in_array($material->id,$arr_mater)) active @endif"  href="javascript:;">
                                                <label for="{{$material->id}}mat">@if(app()->getLocale() == 'en'){{$material->mater_name}} @else no lang  @endif</label>
                                                <input
                                                    type="checkbox"
                                                    name="materils[]"
                                                    value="{{$material->id}}"
                                                    id="{{$material->id}}mat"
                                                    onchange="filter_form.submit()"
                                                    @if(in_array($material->id,$arr_mater)) checked @endif
                                                    style="display: none;"

                                                />
                                            </a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div><!-- material -->

                    <div class="widget mercado-widget filter-widget">
                        <h2 class="widget-title">Size</h2>
                        <div class="widget-content">
                            <ul class="list-style inline-round ">
                                @foreach(\App\Size::all() as $size)
                                <li class="list-item"><a class="filter-link @if(in_array($size->id,$arr_size)) active @endif " href="javascript;:"><label for="{{$size->id}}siz">{{ substr($size->size,0,3) }}</label></a></li>

                                    <input
                                        type="checkbox"
                                        name="sizes[]"
                                        value="{{$size->id}}"
                                        id="{{$size->id}}siz"
                                        onchange="filter_form.submit()"
                                        @if(in_array($size->id,$arr_size)) checked @endif
                                        style="display: none;"

                                    />
                                @endforeach
                            </ul>
                            <div class="widget-banner">
                                <figure><img src="{{asset('assets/images/size-banner-widget.jpg')}}" width="270" height="331" alt=""></figure>
                            </div>
                        </div>
                    </div><!-- Size -->


                    <div class="widget mercado-widget widget-product">
                        <h2 class="widget-title">{{__('lang_front.pop_product')}}</h2>
                        <div class="widget-content">
                            <ul class="products">


                                @foreach(\App\Itm::Where('number_of_buy','>',10)->take(5)->orderBy('number_of_buy', 'DESC')->get() as $itm_pop)

                                    <li class="product-item">
                                        <div class="product product-widget-style">
                                            <div class="thumbnnail">
                                                <a href="detail.html" title="{{$itm_pop->description}}">
                                                    <figure><img src="<?php echo str_replace('public','',url('/')).'storage/app/'.json_decode($itm_pop->img)[0]?>" alt=""></figure>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>[ {{$itm_pop->name}} ]{{$itm_pop->description}}</span></a>
                                                <div class="wrap-price"><span class="product-price">{{$itm_pop->discount}}</span></div>
                                                color
                                                [


                                                @foreach(json_decode($itm_pop->color) as $col=>$hcol)
                                                    <button class="btn btn-sm" style="background-color: {{$hcol}};"></button>
                                                @endforeach

                                                ]
                                            </div>
                                        </div>
                                    </li>

                                @endforeach



                            </ul>
                        </div>
                    </div><!-- brand widget-->


                    </form>



                </div><!--end sitebar-->

            </div><!--end row-->

        </div><!--end container-->

    </main>




@endsection
