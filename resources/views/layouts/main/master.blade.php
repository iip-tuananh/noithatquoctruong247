<!DOCTYPE html>
<html lang="vie">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" href="{{url(''.$setting->favicon)}}"
            type="image/x-icon" />
        <link rel="apple-touch-icon"
            href="{{url(''.$setting->favicon)}}">
        <meta name="robots" content="noodp,index,follow" />
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>@yield('title')</title>

        <link rel="canonical" href="{{\Request::url()}}" />
        <meta property="og:locale" content="vi_VN" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="@yield('title')" />
        <meta property="og:description" content="@yield('description')" />
        <meta property="og:url" content="{{\Request::url()}}" />
        <meta property="og:site_name" content="JicaFood" />
        <meta property="og:image" content="@yield('image')" />
        <meta property="og:image:secure_url" content="@yield('image')" />
        <meta property="og:image:width" content="548" />
        <meta property="og:image:height" content="343" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="@yield('description')" />
        <meta name="twitter:title" content="@yield('title')" />
        <meta name="twitter:image" content="@yield('image')" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/css.css')}}"/>
        <script type="text/javascript" src="{{asset('frontend/js/js.js')}}"></script>
    </head>
    <body>
        @include('layouts.header.index')
        @yield('content')
        @include('layouts.footer.index')
        <div class="element-page">
            <div class="warp-loading-all hidden">
                <div class="warp-bg"></div>
                <div class="sk-cube-grid ajax-loading-icon">
                    <div class="sk-cube sk-cube1"></div>
                    <div class="sk-cube sk-cube2"></div>
                    <div class="sk-cube sk-cube3"></div>
                    <div class="sk-cube sk-cube4"></div>
                    <div class="sk-cube sk-cube5"></div>
                    <div class="sk-cube sk-cube6"></div>
                    <div class="sk-cube sk-cube7"></div>
                    <div class="sk-cube sk-cube8"></div>
                    <div class="sk-cube sk-cube9"></div>
                </div>
            </div>
            <div id="add-cart-modal" class="modal fade wrap-cart-modal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
                            <div class="row">
                                <div class="col-sm-3 col-xs-4">
                                    <div class="image-cart-modal">
                                        <a href="#"> <img src="https://akisa.vn/" class="img-cart" /> </a>
                                    </div>
                                </div>
                                <div class="col-sm-9 col-xs-8 info-cart-modal">
                                    <p class="text-modal product-name-modal"></p>
                                    <p class="text-modal">được thêm vào giỏ hàng của bạn.</p>
                                    <p class="text-modal"><span class="price-modal"></span> <span class="dvt"> ₫ </span> <span class="price-sale-modal hidden"></span></p>
                                </div>
                                <div class="col-sm-3 col-xs-4 hidden-xs"></div>
                                <div class="col-sm-9 col-xs-12 info-cart-modal">
                                    <div class="button-modal btn-modal">
                                        <div class="row">
                                            <div class="col-sm-5 col-xs-12">
                                                <div class="form-group">
                                                    <a href="https://akisa.vn/order/card-info" class="btn btn-success col-md-12 col-xs-12"> <i class="fa fa-shopping-basket" aria-hidden="true"></i> Xem giỏ hàng </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-xs-12">
                                                <div class="form-group"><button class="btn btn-danger continue-shopping col-md-12 col-xs-12" data-dismiss="modal">Tiếp tục Mua hàng</button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 warp-related hidden">
                                    <div class="col-md-12 no-padding" style="margin-top: 10px;">
                                        <p class="text-modal">Sản phẩm cùng loại</p>
                                    </div>
                                    <div class="col-md-12 no-padding related-modal-cart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tuvanModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header"></div>
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
                            <div class="item_block modal-tv"  data-method="get"></div>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
