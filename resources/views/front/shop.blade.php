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

                        <h1 class="shop-title">Digital &amp; Electronics</h1>

                        <div class="wrap-right">

                            <div class="sort-item orderby ">
                                <select name="orderby" class="use-chosen" style="display: none;">
                                    <option value="menu_order" selected="selected">Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by newness</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select><div class="chosen-container chosen-container-single" style="width: 174px;" title=""><a class="chosen-single"><span>Default sorting</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off"></div><ul class="chosen-results"></ul></div></div>
                            </div>

                            <div class="sort-item product-per-page">
                                <select name="post-per-page" class="use-chosen" style="display: none;">
                                    <option value="12" selected="selected">12 per page</option>
                                    <option value="16">16 per page</option>
                                    <option value="18">18 per page</option>
                                    <option value="21">21 per page</option>
                                    <option value="24">24 per page</option>
                                    <option value="30">30 per page</option>
                                    <option value="32">32 per page</option>
                                </select><div class="chosen-container chosen-container-single" style="width: 96px;" title=""><a class="chosen-single"><span>12 per page</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off"></div><ul class="chosen-results"></ul></div></div>
                            </div>

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
                                            <figure><img src="assets/images/products/digital_20.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        <a href="#" class="btn add-to-cart">Add To Cart</a>
                                    </div>
                                </div>
                            </li>


                        </ul>
                        @endforeach
                    </div>

                    <div class="wrap-pagination-info">
                        <ul class="page-numbers">
                            <li><span class="page-number-item current">1</span></li>
                            <li><a class="page-number-item" href="#">2</a></li>
                            <li><a class="page-number-item" href="#">3</a></li>
                            <li><a class="page-number-item next-link" href="#">Next</a></li>
                        </ul>
                        <p class="result-count">Showing 1-8 of 12 result</p>
                        <p class="result-count">{{$itms->links()}}</p>
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
                        <h2 class="widget-title">Popular Products</h2>
                        <div class="widget-content">
                            <ul class="products">
                                <li class="product-item">
                                    <div class="product product-widget-style">
                                        <div class="thumbnnail">
                                            <a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                                <figure><img src="{{asset('assets/images/products/digital_01.jpg')}}" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
                                            <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                        </div>
                                    </div>
                                </li>

                                <li class="product-item">
                                    <div class="product product-widget-style">
                                        <div class="thumbnnail">
                                            <a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                                <figure><img src="{{asset('assets/images/products/digital_17.jpg')}}" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
                                            <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                        </div>
                                    </div>
                                </li>

                                <li class="product-item">
                                    <div class="product product-widget-style">
                                        <div class="thumbnnail">
                                            <a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                                <figure><img src="{{asset('assets/images/products/digital_18.jpg')}}" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
                                            <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                        </div>
                                    </div>
                                </li>

                                <li class="product-item">
                                    <div class="product product-widget-style">
                                        <div class="thumbnnail">
                                            <a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                                <figure><img src="{{asset('assets/images/products/digital_20.jpg')}}" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
                                            <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div><!-- brand widget-->


                    </form>



                </div><!--end sitebar-->

            </div><!--end row-->

        </div><!--end container-->

    </main>




@endsection
