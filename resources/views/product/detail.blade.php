@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
{{languageName($product->description)}}
@endsection
@section('image')
@php
$img = json_decode($product->images);
@endphp
{{url(''.$img[0])}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div id="main" class="nh-row ">
    <div id="content-row-26" class="nh-row  title-main bottom  ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="breacrumb-img clearfix">
                        <div class="text-align">
                            <ol class="breadcrumb bread-list">
                                <li> <a href="{{route('home')}}">Trang chủ</a></li>
                                <li> <a href="{{route('allListProCate',['danhmuc'=>$product->cate->slug])}}">{{languageName($product->cate->name)}}</a></li>
                                <li class="active"> <a>{{languageName($product->name)}}</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content-row-63" class="nh-row   ">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-xs-12">
                    <link rel="stylesheet" type="text/css"
                        href="{{asset('frontend/css/slick.css')}}" />
                    <link rel="stylesheet" type="text/css"
                        href="{{asset('frontend/css/slick-theme.css')}}" />
                    <script type="text/javascript"
                        src="{{asset('frontend/js/slick.min.js')}}"></script>
                    <div class="product-detail">
                        @php
                            $img = json_decode($product->images);
                        @endphp
                        <div class="top-detail-product">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="slider-detail">
                                        <div class="slider slider-single">
                                            @foreach ($img as $item)
                                            <div class="item-single">
                                                <div class="img">
                                                    <a>
                                                        <img src="{{$item}}" />
                                                    </a>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-7 col-xs-12 col-sm-offset-3">
                                                <div class="slider slider-nav row">
                                                    @foreach ($img as $item)
                                                    <div class="col-xs-12 fix-col">
                                                        <div class="item-nav">
                                                            <div class="img"> 
                                                                <a href="#"> 
                                                                    <img src="{{$item}}" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        $('.slider-single').slick({
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                    arrows: true,
                                    fade: false,
                                    adaptiveHeight: true,
                                    infinite: false,
                                    useTransform: true,
                                    speed: 400,
                                    cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
                                    });
                                    
                                    $('.slider-nav')
                                    .on('init', function(event, slick) {
                                        $('.slider-nav .slick-slide.slick-current').addClass('is-active');
                                    })
                                    .slick({
                                        slidesToShow: 6,
                                        slidesToScroll: 5,
                                        dots: false,
                                        focusOnSelect: false,
                                        infinite: false,
                                        responsive: [{
                                            breakpoint: 1024,
                                            settings: {
                                                slidesToShow: 6,
                                                slidesToScroll: 6,
                                            }
                                        }, {
                                            breakpoint: 640,
                                            settings: {
                                                slidesToShow: 3,
                                                slidesToScroll: 3,
                                            }
                                        }, {
                                            breakpoint: 420,
                                            settings: {
                                                slidesToShow: 3,
                                                slidesToScroll: 3,
                                        }
                                        }]
                                    });
                                    
                                    $('.slider-single').on('afterChange', function(event, slick, currentSlide) {
                                    $('.slider-nav').slick('slickGoTo', currentSlide);
                                    var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
                                    $('.slider-nav .slick-slide.is-active').removeClass('is-active');
                                    $(currrentNavSlideElem).addClass('is-active');
                                    });
                                    
                                    $('.slider-nav').on('click', '.slick-slide', function(event) {
                                    event.preventDefault();
                                    var goToSingleSlide = $(this).data('slick-index');
                                    
                                    $('.slider-single').slick('slickGoTo', goToSingleSlide);
                                    });
                                    </script>
                                    <div class="header-info">
                                        <h1 class="title-name-product">{{languageName($product->name)}}</h1>
                                        
                                    </div>
                                    <div class="content-house">
                                        {!!languageName($product->content)!!}
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <script type="text/javascript">
                                $(document).ready(function () {
                              $('.light-gallery').lightGallery({
                                  pager: true
                              });
                              });
                              
                              // slider thumb
                              $(".slider-thumb").owlCarousel({
                              itemsCustom: [
                                  [0, 2],
                                  [480, 3],
                                  [500, 3],
                                  [992, 5],
                                  [1024, 6],
                              ],
                              navigation: true,
                              pagination: false,
                              autoPlay: false,
                              });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <a href="https://zalo.me/{{$setting->phone1}}"><img style="margin-bottom: 15px; border-radius: 5px;"
                            src="{{url('frontend/images/akisa-km-thang-5-2022.jpg')}}"></a>
                    <div class="contact-custom ">
                        <span class="c-green title-lienhe">Đặt lịch tư vấn nhận báo giá </span>
                        <form id="contact_custom" class="frm-required form-contact" method="POST" action="">
                            <div class="form-group">
                                <input class="form-control required" type="text" name="full_name" placeholder="Họ và tên" />
                            </div>
                            <div class="form-group"> 
                                <input class="form-control required" type="email" name="email" placeholder="Email" />
                            </div>
                            <div class="form-group"> 
                                <input class="form-control required" type="phone" name="phone" placeholder="Số điện thoại" />
                            </div>
                            <input class="form-control hidden" type="text" name="title" value="Đặt lịch tư vấn nhận báo giá" placeholder="Tiêu đề" />
                            <div class="form-group">
                                <textarea class="form-control" name="content" placeholder="Mô tả chi tiết các yêu cầu của bạn" rows="5"></textarea></div>
                            <div class="form-group list-button">
                                <div class="btn-content"> 
                                    <button type="submit" class="btn btn-submit"><span class="name">Gửi yêu cầu</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="box-product default_left ">
                        <div class="title-theme6" id="title-block-89">
                            <p>Dự án liên quan</p>
                        </div>
                        <div class="box-detail-list-product">
                            <div class="row">
                                @foreach ($productlq as $item)
                                @php
                                    $img = json_decode($item->images);
                                @endphp
                                <div class="list-item col-lg-12  col-sm-12 col-xs-12">
                                    <div class="item-product hover-action-product style-view-2 clearfix">
                                        <div class="img border bg-img-13761"
                                            title="{{languageName($item->name)}}">
                                            <a href="{{route('detailProduct',['cate'=>$item->cate_slug,'type'=>$item->type_slug ? $item->type_slug : 'loai','id'=>$item->slug])}}" title="{{languageName($item->name)}}"
                                                alt="{{languageName($item->name)}}"
                                                title="{{languageName($item->name)}}">
                                                <img src="{{$img[0]}}"
                                                    alt="{{languageName($item->name)}}"
                                                    title="{{languageName($item->name)}}"
                                                    class="img-product"> </a></div>
                                        <div class="info">
                                            <p class="title-product"> <a
                                                    href="{{route('detailProduct',['cate'=>$item->cate_slug,'type'=>$item->type_slug ? $item->type_slug : 'loai','id'=>$item->slug])}}">
                                                    {{languageName($item->name)}}</a></p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col_left box-cate  clearfix">
                        <div class=" box-left box ">
                            <div class="title_style">
                                <p style="font-weight: 700; font-size: 18px;margin: 10px 0;"> Dịch vụ thiết kế Nhất Gia</p>
                                <div class="block-nav-left-mobile">
                                    <nav id="catalog-all-91" class="bs-docs-sidebar side-bar-left">
                                        <ul id="item-pro-ul-91" class="nav bs-docs-sidenav">
                                            @foreach ($categoryhome as $item)
                                            <li class="border-bottom">
                                                <a href="{{route('allListProCate',['danhmuc'=>$item->slug])}}" class=""> 
                                                    <span class="name"></span>{{languageName($item->name)}}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection