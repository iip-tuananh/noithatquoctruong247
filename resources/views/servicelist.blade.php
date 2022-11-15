@extends('layouts.main.master')
@section('title')
Công trình - Dự án
@endsection
@section('description')
Dưới đây là những dự án mà StarWindows đã và đang tham gia triển khai thi công
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('js')
@endsection
@section('css')
@endsection
@section('content')
<div class="breadcrumbs">
   <div class="container-fluid">
      <div class="row">
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="breadcrumbs-content">
               <div class="breadcrumb-image">
                  <div class="image">
                     <img class=" lazyloaded" src="{{url('frontend/images/br-03.jpg')}}" data-src="{{url('frontend/images/br-03.jpg')}}" alt="Breadcrumb" style="width: 100%;">
                  </div>
                  <div class="container">
                     <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                           <div class="title-box">
                              <h1 class="title">
                                 Công trình - Dự án
                              </h1>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="nav-breadcrumbs">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="content-box">
                     <div class="nav">
                        <nav class="woocommerce-breadcrumb"><a href="{{route('home')}}">Trang chủ</a>&nbsp;/&nbsp;<span>Công trình - Dự án</span></nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<main class="main main-page main-projects">
    <section class="lth-projects">
       <div class="container">
          <div class="row">
             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="module module_projects module_projects_list">
                   <div class="module_title">
                      <p class="infor">Dưới đây là những dự án mà StarWindows đã và đang tham gia triển khai thi công</p>
                   </div>
                   <div class="module_content">
                      <div class="groups-box">
                          @foreach ($list as $item)
                          @php
                              $img = json_decode($item->image);
                          @endphp
                          <div class="item">
                            <div class="content">
                               <div class="content-image">
                                  <div class="image">
                                     <a href="{{route('serviceDetail',['slug'=>$item->slug])}}" title="" class="image">
                                     <img class=" ls-is-cached lazyloaded" src="{{$img[0]}}" data-src="{{$img[0]}}" alt="{{$item->name}}" width="936" height="554">
                                     </a>
                                  </div>
                               </div>
                               <div class="content-box">
                                  <h3 class="content-name">
                                     <a href="{{route('serviceDetail',['slug'=>$item->slug])}}" title="{{$item->name}}">
                                     {{$item->name}} </a>
                                  </h3>
                                  <p>{!!$item->description!!}</p>
                               </div>
                            </div>
                         </div>
                          @endforeach
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
 </main>
@endsection