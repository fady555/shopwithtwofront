@extends('layouts.front_app')


@section('title_front')      {{__('lang_front.shop')}}        @endsection

@section('boody_front')




    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>

                    <li class="item-link"><span> shop </span></li>
                    <li class="item-link"><a href="#" class="link"><i onclick="document.forms[0].submit()" class="fa fa-refresh"> refresh filter</i></a></li>

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
                            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem " style="height: 386px;">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="assets/images/products/digital_22.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        <a href="#" class="btn add-to-cart">Add To Cart</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem " style="height: 386px;">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="assets/images/products/digital_10.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        <a href="#" class="btn add-to-cart">Add To Cart</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem " style="height: 386px;">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="assets/images/products/digital_01.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        <a href="#" class="btn add-to-cart">Add To Cart</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem " style="height: 386px;">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="assets/images/products/digital_21.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        <a href="#" class="btn add-to-cart">Add To Cart</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem " style="height: 386px;">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="assets/images/products/digital_15.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        <a href="#" class="btn add-to-cart">Add To Cart</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem " style="height: 386px;">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="assets/images/products/digital_17.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        <a href="#" class="btn add-to-cart">Add To Cart</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem " style="height: 386px;">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="assets/images/products/digital_05.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        <a href="#" class="btn add-to-cart">Add To Cart</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem " style="height: 386px;">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="assets/images/products/digital_07.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        <a href="#" class="btn add-to-cart">Add To Cart</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem " style="height: 386px;">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="assets/images/products/digital_02.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        <a href="#" class="btn add-to-cart">Add To Cart</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem " style="height: 386px;">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="assets/images/products/digital_09.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        <a href="#" class="btn add-to-cart">Add To Cart</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem " style="height: 386px;">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="assets/images/products/digital_06.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
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

                    </div>

                    <div class="wrap-pagination-info">
                        <ul class="page-numbers">
                            <li><span class="page-number-item current">1</span></li>
                            <li><a class="page-number-item" href="#">2</a></li>
                            <li><a class="page-number-item" href="#">3</a></li>
                            <li><a class="page-number-item next-link" href="#">Next</a></li>
                        </ul>
                        <p class="result-count">Showing 1-8 of 12 result</p>
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


                    <div class="widget mercado-widget filter-widget brand-widget">
                        <h2 class="widget-title">products</h2>
                        <div class="widget-content">
                            <ul class="list-style vertical-list list-limited" data-show="6">

                                <li class="list-item"><a class="filter-link active" href="#">Fashion Clothings</a></li>
                                <li class="list-item"><a class="filter-link " href="#">Laptop Batteries</a></li>
                                <li class="list-item default-hiden"><a class="filter-link " href="#">Printer &amp; Ink</a></li>



                                <li class="list-item"><a data-label="Show less<i class=&quot;fa fa-angle-up&quot; aria-hidden=&quot;true&quot;></i>" class="btn-control control-show-more" href="#">Show more<i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- brand widget i modifiy to categoy-->

                    <div class="widget mercado-widget filter-widget price-filter">
                        <h2 class="widget-title">Price</h2>
                        <div class="widget-content">
                            <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 15%; width: 45%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 15%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 60%;"></span></div>
                            <p>
                                <label for="amount">Price:</label>
                                <input type="text" id="amount" readonly="">
                                <button class="filter-submit">Filter</button>
                            </p>
                        </div>
                    </div><!-- Price-->

                    <div class="widget mercado-widget filter-widget">
                        <h2 class="widget-title">Color</h2>
                        <div class="widget-content">
                            <ul class="list-style vertical-list has-count-index">
                                <li class="list-item"><a class="filter-link " href="#">Red <span>(217)</span></a></li>
                                <li class="list-item"><a class="filter-link " href="#">Yellow <span>(179)</span></a></li>
                                <li class="list-item"><a class="filter-link " href="#">Black <span>(79)</span></a></li>
                                <li class="list-item"><a class="filter-link " href="#">Blue <span>(283)</span></a></li>
                                <li class="list-item"><a class="filter-link " href="#">Grey <span>(116)</span></a></li>
                                <li class="list-item"><a class="filter-link " href="#">Pink <span>(29)</span></a></li>
                            </ul>
                        </div>
                    </div><!-- Color -->

                    <div class="widget mercado-widget filter-widget">
                        <h2 class="widget-title">Size</h2>
                        <div class="widget-content">
                            <ul class="list-style inline-round ">
                                <li class="list-item"><a class="filter-link active" href="#">s</a></li>
                                <li class="list-item"><a class="filter-link " href="#">M</a></li>
                                <li class="list-item"><a class="filter-link " href="#">l</a></li>
                                <li class="list-item"><a class="filter-link " href="#">xl</a></li>
                            </ul>
                            <div class="widget-banner">
                                <figure><img src="assets/images/size-banner-widget.jpg" width="270" height="331" alt=""></figure>
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
                                                <figure><img src="assets/images/products/digital_01.jpg" alt=""></figure>
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
                                                <figure><img src="assets/images/products/digital_17.jpg" alt=""></figure>
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
                                                <figure><img src="assets/images/products/digital_18.jpg" alt=""></figure>
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
                                                <figure><img src="assets/images/products/digital_20.jpg" alt=""></figure>
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
