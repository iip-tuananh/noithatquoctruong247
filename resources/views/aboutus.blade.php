@extends('layouts.main.master')
@section('title')
Giới thiệu về Đồ Gỗ Nội Thất Quốc Trưởng
@endsection
@section('description')
Giới thiệu về chúng tôi
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div id="main" class="nh-row ">
   <div id="content-row-27" class="nh-row  title-main bottom  ">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-xs-12">
               <div class="breacrumb-img clearfix">
                  <div class="text-align">
                     <ol class="breadcrumb bread-list">
                     <li> <a href="{{route('home')}}">Trang chủ</a></li>
                     <li class="active "> <a>{{$aboutUs->title}}</a></li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="content-row-64" class="nh-row   ">
      <div class="container">
         <div class="row">
            <div class="col-sm-12 col-xs-12">
               <div class="detail-post">
                  <h1 class="title-news"> {{$aboutUs->title}}</h1>
                  <div class="ckeditor-post">
                  {!!$aboutUs->content!!}
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection