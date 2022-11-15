@extends('layouts.main.master')
@section('title')
Danh sách video của Gỗ Việt Luxury
@endsection
@section('description')
Danh sách video của Gỗ Việt Luxury
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3" data-background="{{url('frontend/img/5.jpg')}}" style="background-image: url(&quot;{{url('frontend/img/5.jpg')}}&quot;);">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-left caption mt-90">
                <h5>Kênh youtube: govietluxury</h5>
				<h1>Video tổng hợp</h1>
			</div>
		</div>
	</div>
</div>
<section class="contact section-padding">
	<div class="container">
		<div class="row">
            @foreach ($list as $item)
            <div class="col-md-4 ">
				<div class="pricing-card">
                    <a class="vid" href="{{$item->link}}">
                       <img src="{{$item->image}}" alt="">
                       <div class="desc">
                          <div class="name">{{$item->name}}</div>
                       </div>
                       <div class="vid-butn">
                           <span class="icon">
                               <i class="ti-control-play"></i>
                           </span>
                       </div>
                   </a>
                    
                 </div>
			</div>
            @endforeach
			{{$list->links()}}
		</div>
	</div>
</section>

@endsection