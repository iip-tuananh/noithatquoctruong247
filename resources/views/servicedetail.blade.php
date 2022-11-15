@extends('layouts.main.master')
@section('title')
{{($detail_service->name)}}
@endsection
@section('description')
{{languageName($detail_service->description)}}
@endsection
@section('image')
@php
	$img = json_decode($detail_service->image);
@endphp
{{$img[0]}}
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
								<li> <a href="#">Dịch vụ</a></li>
								<li class="active"> <a>{{($detail_service->name)}}</a></li>
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
							$img = json_decode($detail_service->image);
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
										<h1 class="title-name-product">{{$detail_service->name}}</h1>
										
									</div>
									<div class="content-house">
										{!!languageName($detail_service->content)!!}
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
					@if (isset($bannerAds))
					<a href="https://zalo.me/{{$setting->phone1}}"><img style="margin-bottom: 15px; border-radius: 5px;"
							src="{{$bannerAds->image}}"></a>
					@endif
					<div class="contact-custom ">
						<span class="c-green title-lienhe">Đặt lịch tư vấn nhận báo giá </span>
						<form id="contact_custom" class="frm-required form-contact" method="POST" action="">
							@csrf
							<div class="form-group">
								<input class="form-control required" type="text" name="name" placeholder="Họ và tên" />
							</div>
							<div class="form-group"> 
								<input class="form-control required" type="email" name="email" placeholder="Email" />
							</div>
							<div class="form-group"> 
								<input class="form-control required" type="phone" name="phone" placeholder="Số điện thoại" />
							</div>
							<input class="form-control hidden" type="text" name="title" value="Đặt lịch tư vấn nhận báo giá" placeholder="Tiêu đề" />
							<div class="form-group">
								<textarea class="form-control" name="mess" placeholder="Mô tả chi tiết các yêu cầu của bạn" rows="5"></textarea></div>
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
							<p>Dịch vụ liên quan</p>
						</div>
						<div class="box-detail-list-product">
							<div class="row">
								@foreach ($servicehome as $service)
								@if ($service->id != $detail_service->id)
									@php
										$img = json_decode($service->image);
									@endphp
									<div class="list-item col-lg-12  col-sm-12 col-xs-12">
										<div class="item-product hover-action-product style-view-2 clearfix">
											<div class="img border bg-img-13761"
												title="{{$service->name}}">
												<a href="{{route('serviceDetail',['slug'=>$service->slug])}}" title="{{$service->name}}"
													alt="{{$service->name}}"
													title="{{$service->name}}">
													<img src="{{$img[0]}}"
														alt="{{$service->name}}"
														title="{{$service->name}}"
														class="img-product"> </a></div>
											<div class="info">
												<p class="title-product"> <a
														href="{{route('serviceDetail',['slug'=>$service->slug])}}">
														{{$service->name}}</a></p>
											</div>
										</div>
									</div>
								@endif
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection