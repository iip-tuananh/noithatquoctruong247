@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div id="main" class="nh-row home">
<div id="content-row-38" class="nh-row nhslider">
    <div class="row">
        <div class="col-sm-12 col-xs-12">
            <div class="mighty-slider">
                <div class="silder-element owl-theme">
                    @foreach ($banner as $item)
                        <div class="item">
                            <div class="image">
                                <img src="{{$item->image}}" alt="{{$item->image}}" width="100%" height="100%" />
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <script type="text/javascript">
                $(".silder-element").owlCarousel({
                    loop: true,
                    stopOnHover: true,
                    margin: 10,
                    navigation: true,
                    pagination: false,
                    autoPlay: true,
                    Timeout: 10000,
                    itemsCustom: [
                        [0, 1],
                        [768, 1],
                        [992, 1],
                    ],
                });
            </script>
        </div>
    </div>
</div>
<div id="content-row-71" class="nh-row bk-black">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="why-akisa">
                    <div class="title-why">
                        <h2>Tại sao chọn Đồ Gỗ Nội Thất Quốc Trưởng</h2>
                        <p><img nh-lazy data-src="{{url('frontend/images/1585125169-512041082-custom.png')}}" alt="" width="150" height="25" /></p>
                    </div>
                    <div class="content-why">
                        <div class="row">
                            <div class="col-sm-4 col-xs-6">
                                <div class="item">
                                    <div class="icon-img">
                                        <div class="icon"><img nh-lazy data-src="{{url('frontend/images/1583376074-28237-custom.png')}}" alt="Thiết kế sáng tạo" width="100%" height="100%" /></div>
                                    </div>
                                    <div class="info-text">
                                        <h3>Thiết kế sáng tạo</h3>
                                        <p class="hidden-xs">Với đội ngũ Thợ có chuyên môn năng lực cao, năng động, sáng tạo, Đồ Gỗ Nội Thất Quốc Trưởng luôn mang đến những thiết kế ấn tượng, độc đáo, dẫn đầu xu thế.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <div class="item">
                                    <div class="icon-img">
                                        <div class="icon"><img nh-lazy data-src="{{url('frontend/images/1583376074-7426-custom.png')}}" width="100%" height="100%" alt="Kết hợp phong thủy" /></div>
                                    </div>
                                    <div class="info-text">
                                        <h3>Kết hợp phong thủy</h3>
                                        <p class="hidden-xs">Với trên 10 năm kinh nghiệm, Đồ Gỗ Nội Thất Quốc Trưởng tự tin đảm bảo cho khách hàng mặt bằng công năng thông minh, mà vẫn tính toán kỹ lưỡng về phong thủy.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <div class="item">
                                    <div class="icon-img">
                                        <div class="icon"><img nh-lazy data-src="{{url('frontend/images/1583376074-9747-custom.png')}}" width="100%" height="100%" alt="Thi công chuẩn xác" /></div>
                                    </div>
                                    <div class="info-text">
                                        <h3>Thi công chuẩn xác</h3>
                                        <p class="hidden-xs">Thi công đúng với hồ sơ thiết kế đã thống nhất với khách hàng, đảm bảo thời gian thực hiện đã cam kết.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <div class="item">
                                    <div class="icon-img">
                                        <div class="icon"><img nh-lazy data-src="{{url('frontend/images/1583376075-12368-custom.png')}}" width="100%" height="100%" alt="Cam kết chất lượng" /></div>
                                    </div>
                                    <div class="info-text">
                                        <h3>Cam kết chất lượng</h3>
                                        <p class="hidden-xs">Chúng tôi cam kết về chất lượng dịch vụ sản phẩm đã cung cấp, và thời gian bảo hành cho mọi công trình đã thi công, sữa chữa .</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <div class="item">
                                    <div class="icon-img">
                                        <div class="icon"><img nh-lazy data-src="{{url('frontend/images/1583376075-8777-custom.png')}}" width="100%" height="100%" alt="Đảm bảo tiến độ" /></div>
                                    </div>
                                    <div class="info-text">
                                        <h3>Đảm bảo tiến độ</h3>
                                        <p class="hidden-xs">Đảm bảo tiến độ thực hiện hợp đồng của từng khách hàng. Cam kết chịu mọi trách nhiệm do nguyên nhân từ Đồ Gỗ Nội Thất Quốc Trưởng.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <div class="item">
                                    <div class="icon-img">
                                        <div class="icon"><img nh-lazy data-src="{{url('frontend/images/1583376075-1870-custom.png')}}" width="100%" height="100%" alt="Hỗ trợ 24/7" /></div>
                                    </div>
                                    <div class="info-text">
                                        <h3>Hỗ trợ 24/7</h3>
                                        <p class="hidden-xs">Bộ phận CSKH của Đồ Gỗ Nội Thất Quốc Trưởng luôn lắng nghe và hỗ trợ mọi thắc mắc của khách hàng nhanh nhất có thể.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="content-row-84" class="nh-row mar-50">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="col-inner introduct-akisa">
                    <h2><a href="{{route('aboutUs')}}">Đồ Gỗ Nội Thất Quốc Trưởng</a>
                        <p><img src="{{url('frontend/images/1585125169-512041082-custom.png')}}" alt="" style="height: 25px;" /></p>
                    </h2>
                    {!!$aboutUs->content!!}
                    <div class="row">
                        <div class="col-sm-6 col-xs-6">
                            <div class="col-inner">
                                <div class="featured-box icon-box-left text-left">
                                    <div class="icon-box-img">
                                        <div class="icon">
                                            <div class="icon-inner"><img nh-lazy data-src="{{url('frontend/images/12.png')}}" alt="" /></div>
                                        </div>
                                    </div>
                                    <div class="icon-box-text last-reset">
                                        <p>+50 Nhân sự</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <div class="col-inner">
                                <div class="featured-box icon-box-left text-left">
                                    <div class="icon-box-img">
                                        <div class="icon">
                                            <div class="icon-inner"><img nh-lazy data-src="{{url('frontend/images/13.png')}}" alt="" /></div>
                                        </div>
                                    </div>
                                    <div class="icon-box-text last-reset">
                                        <p>10 năm phát triển</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <div class="col-inner">
                                <div class="featured-box icon-box-left text-left">
                                    <div class="icon-box-img">
                                        <div class="icon">
                                            <div class="icon-inner"><img nh-lazy data-src="{{url('frontend/images/14.png')}}" alt="" /></div>
                                        </div>
                                    </div>
                                    <div class="icon-box-text last-reset">
                                        <p>+200 dự án</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <div class="col-inner">
                                <div class="featured-box icon-box-left text-left">
                                    <div class="icon-box-img">
                                        <div class="icon">
                                            <div class="icon-inner"><img nh-lazy data-src="{{url('frontend/images/15.png')}}" alt="" /></div>
                                        </div>
                                    </div>
                                    <div class="icon-box-text last-reset">
                                        <p>Thi công trọn gói, sửa chữa đồ gỗ.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item_block dk-home" data-method="get"></div>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="video-box">
                    <div class="slider-img-company">
                        <div class="box-slide-images-detail">
                            <div class="view-images-large">
                                <img src="{{$aboutUs->image}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="content-row-89" class="nh-row">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="title-intro">
                    <h2>Các dịch vụ tại Đồ Gỗ Nội Thất Quốc Trưởng</h2>
                    <p><img src="{{url('frontend/images/1585125169-512041082-custom.png')}}" alt="" style="height: 25px;" /></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="content-row-94" class="nh-row">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="box-product-style5 clearfix">
                    {{-- <div class="tab-product clearfix">
                        <div class="row">
                            <div class="col-sm-3 col-xs-12">
                                <div class="title-all">
                                    <h3><a href="{{route('allListProCate',['danhmuc'=>$item->slug])}}">{{languageName($item->name)}}</a></h3>
                                </div>
                            </div>
                            <div class="col-sm-7 col-xs-12">
                                @if (count($item->typeCate) > 0)
                                <div class="list-title">
                                    <ul class="list-title-txt clearfix">
                                        @foreach ($item->typeCate as $i)
                                        <li><a href="{{route('allListProType',['danhmuc'=>$item->slug,'loaidanhmuc'=>$i->slug])}}" class="tab-item">{{languageName($item->name)}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                
                            </div>
                            <div class="col-sm-2 col-xs-12 hidden-xs">
                                <div class="view-all">
                                    <a href="{{route('allListProCate',['danhmuc'=>$item->slug])}}"> Xem tất cả <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="content-tab-product">
                        <div class="tab-content fixCol">
                            <div class="row">
                                @foreach ($servicehome as $service)
                                <div class="list-item col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                    @include('layouts.product.item',['service'=>$service])
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="content-row-119" class="nh-row bak-cl">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="block-news">
                    <ul class="nav_title clearfix">
                        <li class="active">
                            <h2><a href="javascript:;">Tin tức và sự kiện</a></h2>
                        </li>
                    </ul>
                    <div class="img-title"><img src="{{url('frontend/images/1585125169-512041082-custom.png')}}" alt="" width="150" height="25" /></div>

                    <div class="row">
                        <ul>
                            @foreach ($hotnews as $item)
                                <div class="col-md-4 col-sm-4 col-xs-6 list-item box-blogs">
                                    <div class="item-blogs clearfix">
                                        <div class="img-blogs">
                                            <a class="img-news" href="{{route('detailBlog',['slug'=>$item->slug])}}">
                                                <img src="{{$item->image}}" />
                                            </a>
                                        </div>
                                        <div class="info">
                                            <p><a href="{{route('detailBlog',['slug'=>$item->slug])}}">{{date_format($item->created_at,'d/m/Y')}}</a></p>
                                            <h3 class="title-blogs-item"><a href="{{route('detailBlog',['slug'=>$item->slug])}}">{{languageName($item->title)}}</a></h3>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection