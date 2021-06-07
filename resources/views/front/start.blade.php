@extends('layouts.front_app')

@section('title_front') {{__('lang_front.home')}} @endsection

@section('boody_front')





    <main id="main">
        <div class="container">

            <!--MAIN SLIDE-->
            <div class="wrap-main-slide">
                <div class="slide-carousel owl-carousel style-nav-1 owl-loaded owl-drag" data-items="1" data-loop="1" data-nav="true" data-dots="false">



                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2340px, 0px, 0px); transition: all 0s ease 0s; width: 8190px;"><div class="owl-item cloned" style="width: 1170px;"><div class="item-slide">
                                    <img src="{{asset('assets/images/main-slider-1-2.jpg')}}" alt="" class="img-slide">
                                    <div class="slide-info slide-2">
                                        <h2 class="f-title">Extra 25% Off</h2>
                                        <span class="f-subtitle">On online payments</span>
                                        <p class="discount-code">Use Code: #FA6868</p>
                                        <p class="s-subtitle">TRansparent Bra Straps</p>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 1170px;"><div class="item-slide">
                                    <img src="{{asset('assets/images/main-slider-1-3.jpg')}}" alt="" class="img-slide">
                                    <div class="slide-info slide-3">
                                        <h2 class="f-title">Great Range of <b>Exclusive Furniture Packages</b></h2>
                                        <span class="f-subtitle">Exclusive Furniture Packages to Suit every need.</span>
                                        <p class="sale-info">Stating at: <b class="price">$225.00</b></p>
                                        <a href="#" class="btn-link">Shop Now</a>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 1170px;"><div class="item-slide">
                                    <img src="{{asset('assets/images/main-slider-1-1.jpg')}}" alt="" class="img-slide">
                                    <div class="slide-info slide-1">
                                        <h2 class="f-title">Kid Smart <b>Watches</b></h2>
                                        <span class="subtitle">Compra todos tus productos Smart por internet.</span>
                                        <p class="sale-info">Only price: <span class="price">$59.99</span></p>
                                        <a href="#" class="btn-link">Shop Now</a>
                                    </div>
                                </div></div><div class="owl-item" style="width: 1170px;"><div class="item-slide">
                                    <img src="{{asset('assets/images/main-slider-1-2.jpg')}}" alt="" class="img-slide">
                                    <div class="slide-info slide-2">
                                        <h2 class="f-title">Extra 25% Off</h2>
                                        <span class="f-subtitle">On online payments</span>
                                        <p class="discount-code">Use Code: #FA6868</p>
                                        <h4 class="s-title">Get Free</h4>
                                        <p class="s-subtitle">TRansparent Bra Straps</p>
                                    </div>
                                </div></div><div class="owl-item" style="width: 1170px;"><div class="item-slide">
                                    <img src="{{asset('assets/images/main-slider-1-3.jpg')}}" alt="" class="img-slide">
                                    <div class="slide-info slide-3">
                                        <h2 class="f-title">Great Range of <b>Exclusive Furniture Packages</b></h2>
                                        <span class="f-subtitle">Exclusive Furniture Packages to Suit every need.</span>
                                        <p class="sale-info">Stating at: <b class="price">$225.00</b></p>
                                        <a href="#" class="btn-link">Shop Now</a>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 1170px;"><div class="item-slide">
                                    <img src="{{asset('assets/images/main-slider-1-1.jpg')}}" alt="" class="img-slide">
                                    <div class="slide-info slide-1">
                                        <h2 class="f-title">Kid Smart <b>Watches</b></h2>
                                        <span class="subtitle">Compra todos tus productos Smart por internet.</span>
                                        <p class="sale-info">Only price: <span class="price">$59.99</span></p>
                                        <a href="#" class="btn-link">Shop Now</a>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 1170px;"><div class="item-slide">
                                    <img src="{{asset('assets/images/main-slider-1-2.jpg')}}" alt="" class="img-slide">
                                    <div class="slide-info slide-2">
                                        <h2 class="f-title">Extra 25% Off</h2>
                                        <span class="f-subtitle">On online payments</span>
                                        <p class="discount-code">Use Code: #FA6868</p>
                                        <h4 class="s-title">Get Free</h4>
                                        <p class="s-subtitle">TRansparent Bra Straps</p>
                                    </div>
                                </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-right" aria-hidden="true"></i></button></div><div class="owl-dots disabled"></div></div>
            </div>

            <!--BANNER-->
            <div class="wrap-banner style-twin-default">
                <div class="banner-item">
                    <a href="#" class="link-banner banner-effect-1">
                        <figure><img src="{{asset('assets/images/home-1-banner-1.jpg')}}" alt="" width="580" height="190"></figure>
                    </a>
                </div>
                <div class="banner-item">
                    <a href="#" class="link-banner banner-effect-1">
                        <figure><img src="{{asset('assets/images/home-1-banner-2.jpg')}}" alt="" width="580" height="190"></figure>
                    </a>
                </div>
            </div>

            <!--On Sale-->
            <div class="wrap-show-advance-info-box style-1 has-countdown">
                <h3 class="title-box">On Sale</h3>
                <div class="wrap-countdown mercado-countdown" data-expire="2020/12/12 12:34:56"><span><b>00</b> Days</span> <span><b>0</b> Hrs</span> <span><b>00</b> Mins</span> <span><b>00</b> Secs</span></div>
                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container owl-loaded owl-drag" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive="{&quot;0&quot;:{&quot;items&quot;:&quot;1&quot;},&quot;480&quot;:{&quot;items&quot;:&quot;2&quot;},&quot;768&quot;:{&quot;items&quot;:&quot;3&quot;},&quot;992&quot;:{&quot;items&quot;:&quot;4&quot;},&quot;1200&quot;:{&quot;items&quot;:&quot;5&quot;}}">










                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 824px;">


                            <div class="owl-item" style="width: 206px;">
                                <div class="product product-style-2 equal-elem " style="height: 140px;">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="{{asset('assets/images/products/tools_equipment_3.jpg')}}" width="800" height="800" alt=""></figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item sale-label">sale</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                    </div>
                                </div>
                            </div>

                            @foreach(\App\Itm::where('number_of_buy','>','20')->get() as $itm)
                                <div class="owl-item" style="width: 206px;">
                                    <div class="product product-style-2 equal-elem " style="height: 140px;">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/tools_equipment_3.jpg" width="800" height="800" alt=""></figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item sale-label">sale</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach



                        </div>
                    </div>
                    <div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><i class="fa fa-angle-left" aria-hidden="true"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-right" aria-hidden="true"></i></button></div><div class="owl-dots disabled"></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev disabled"><i class="fa fa-angle-left" aria-hidden="true"></i></button><button type="button" role="presentation" class="owl-next disabled"><i class="fa fa-angle-right" aria-hidden="true"></i></button></div><div class="owl-dots disabled"></div></div>
            </div>

            <!--Latest Products-->
            <div class="wrap-show-advance-info-box style-1">
                <h3 class="title-box">Latest Products</h3>
                <div class="wrap-top-banner">
                    <a href="#" class="link-banner banner-effect-2">
                        <figure><img src="{{asset('assets/images/digital-electronic-banner.jpg')}}" width="1170" height="240" alt=""></figure>
                    </a>
                </div>
                <div class="wrap-products">
                    <div class="wrap-product-tab tab-style-1">
                        <div class="tab-contents">
                            <div class="tab-content-item active" id="digital_1a" style="height: 325px;">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container owl-loaded owl-drag" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive="{&quot;0&quot;:{&quot;items&quot;:&quot;1&quot;},&quot;480&quot;:{&quot;items&quot;:&quot;2&quot;},&quot;768&quot;:{&quot;items&quot;:&quot;3&quot;},&quot;992&quot;:{&quot;items&quot;:&quot;4&quot;},&quot;1200&quot;:{&quot;items&quot;:&quot;5&quot;}}">










                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1869px;">


                                            <div class="owl-item" style="width: 233.6px;">
                                                <div class="product product-style-2 equal-elem " style="height: 316px;">
                                                    <div class="product-thumnail">
                                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                            <figure><img src="{{asset('assets/images/products/digital_04.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                        </a>
                                                        <div class="group-flash">
                                                            <span class="flash-item new-label">new</span>
                                                        </div>
                                                        <div class="wrap-btn">
                                                            <a href="#" class="function-link">quick view</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                                    </div>
                                                </div>
                                            </div>

                                            @foreach(\App\Itm::paginate(20) as $itm)
                                            <div class="owl-item " style="width: 233.6px;">
                                                <div class="product product-style-2 equal-elem " style="height: 316px;">
                                                    <div class="product-thumnail">
                                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                            <figure><img @if(!empty(json_decode($itm->img)[0])) src="<?php echo str_replace('public','',url('/'))."storage/app/".json_decode($itm->img)[0]; ?>"  @endif width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                        </a>
                                                        <div class="group-flash">
                                                            <span class="flash-item new-label">new</span>
                                                        </div>
                                                        <div class="wrap-btn">
                                                            <a href="#" class="function-link">quick view</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach




                                        </div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><i class="fa fa-angle-left" aria-hidden="true"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-right" aria-hidden="true"></i></button></div><div class="owl-dots disabled"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Product Categories-->
            <div class="wrap-show-advance-info-box style-1">
                <h3 class="title-box">Product Categories</h3>

                <div class="wrap-top-banner">
                    <a href="#" class="link-banner banner-effect-2">
                        <figure><img src="{{asset('assets/images/fashion-accesories-banner.jpg')}}" width="1170" height="240" alt=""></figure>
                    </a>
                </div>

                <div class="wrap-products">
                    <div class="wrap-product-tab tab-style-1">
                        <div class="tab-control">
                            @foreach(\App\Product::paginate(10) as $product)
                            <a href="#fashion_{{$product->id}}" class="tab-control-item">{{$product->name}}</a>
                            @endforeach
                        </div>

                        <div class="tab-contents " id="to_active">
                            @foreach(\App\Product::paginate(10) as $product)
                            <div class="tab-content-item" id="fashion_{{$product->id}}" style="height: 343px;">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container owl-loaded owl-drag" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive="{&quot;0&quot;:{&quot;items&quot;:&quot;1&quot;},&quot;480&quot;:{&quot;items&quot;:&quot;2&quot;},&quot;768&quot;:{&quot;items&quot;:&quot;3&quot;},&quot;992&quot;:{&quot;items&quot;:&quot;4&quot;},&quot;1200&quot;:{&quot;items&quot;:&quot;5&quot;}}">



                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1869px;">

                                            @foreach(\App\Itm::where('product_id',$product->id)->get() as $itm)

                                                <div class="owl-item active" style="width: 233.6px;"><div class="product product-style-2 equal-elem " style="height: 316px;">
                                                        <div class="product-thumnail">
                                                            <a href="detail.html" title="{{$itm->description}}">

                                                                <figure><img @if(!empty(json_decode($itm->img)[0])) src="<?php echo str_replace('public','',url('/'))."storage/app/".json_decode($itm->img)[0]; ?>"  @endif  width="800" height="800" alt=""></figure>
                                                            </a>
                                                            <div class="group-flash">
                                                                <span class="flash-item sale-label">sale</span>
                                                            </div>
                                                            <div class="wrap-btn">
                                                                <a href="#" class="function-link">quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <a href="#" class="product-name"><span>[{{$itm->name}}]{{$itm->description}}</span></a>
                                                            <div class="wrap-price"><ins><p class="product-price">{{$itm->price}}</p></ins> <del><p class="product-price">{{$itm->discount}}</p></del></div>
                                                        </div>
                                                    </div></div>
                                            @endforeach

                                        </div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><i class="fa fa-angle-left" aria-hidden="true"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-right" aria-hidden="true"></i></button></div><div class="owl-dots disabled"></div>
                                </div>
                            </div>
                            @endforeach()
                            <script>
                                document.getElementById('to_active').children[0].classList.add('active');
                            </script>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </main>







@endsection
