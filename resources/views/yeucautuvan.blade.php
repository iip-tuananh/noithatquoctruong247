@extends('layouts.main.master')
@section('title')
Yêu cầu tư vấn
@endsection
@section('description')
Yêu cầu tư vấn
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div id="main" class="nh-row contact">
    <div id="content-row-28" class="nh-row  title-main bottom  ">
       <div class="container">
          <div class="row">
             <div class="col-sm-12 col-xs-12">
                <div class="breacrumb-img clearfix">
                   <div class="text-align">
                      <ol class="breadcrumb bread-list">
                         <li> <a href="{{route('home')}}">Trang chủ</a></li>
                         <li class="active "> <a>Gửi yêu cầu tư vấn</a></li>
                      </ol>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div id="content-row-65" class="nh-row   ">
       <div class="container">
          <div class="row">
             <div class="col-sm-5 col-xs-12"> 
                <a href="https://zalo.me/{{$setting->phone1}}">
                    <img style="margin-top: 21px; border-radius: 5px; max-width: 120%;" src="{{url('frontend/images/km-thang-5-2022-2.jpg')}}">
                </a>
            </div>
             <div class="col-sm-7 col-xs-12">
                <div class="consultation-request ">
                   <div class="mart15 fll w100"></div>
                   @include('layouts.main.form')
                </div>
             </div>
          </div>
       </div>
    </div>
    <div id="content-row-82" class="nh-row   ">
       <div class="container">
          <div class="row">
             <div class="col-sm-12 col-xs-12">
                <div class=" box-product-style5 clearfix">
                   <div class="tab-product tabs-house clearfix">
                      <div class="row">
                         <div class="col-xs-12">
                            <div class="title-all">
                               <h3> Các mẫu thiết kế đẹp của Nhất Gia</h3>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="content-tab-product">
                      <div class="tab-content fixCol">
                         <div class="row">
                             @foreach ($list as $item)
                             <div class="list-item col-lg-3  col-sm-12 col-xs-6 ">
                                @include('layouts.product.item',['pro'=>$item])
                             </div>
                             @endforeach
                            
                         </div>
                      </div>
                   </div>
                   <div class="clearfix"></div>
                   <div class="warp-loading-block hidden">
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
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection