@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
Tin tức nổi bật và mới nhất tại Gỗ Việt Luxury
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
@endsection
@section('content')
<div id="main" class="nh-row news">
    <div id="content-row-39" class="nh-row  title-main bottom  ">
       <div class="container">
          <div class="row">
             <div class="col-md-12 col-xs-12">
                <div class="breacrumb-img clearfix">
                   <div class="text-align">
                      <ol class="breadcrumb bread-list">
                         <li> <a href="{{route('home')}}">Trang chủ</a></li>
                         <li class="active "> <a>{{$title_page}}</a></li>
                      </ol>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div id="content-row-72" class="nh-row   ">
       <div class="container">
          <div class="row">
             <div class="col-sm-12 col-xs-12">
                <div class="title_list name-cate text-center">
                   <h1>{{$title_page}}</h1>
                </div>
                <div class="clear-both"></div>
                <div class="wrap-list">
                    @if (count($blog)>0)
                   <div class="row">
                    @foreach ($blog as $item)
                      <div class=" col-md-4 col-sm-4 col-xs-6  list-item box-blogs ">
                         <div class="item-blogs clearfix">
                            <div class="img-blogs"> 
                                <a class="img-news" href="{{route('detailBlog',['slug'=>$item->slug])}}"> 
                                    <img src="{{$item->image}}"> 
                                </a>
                            </div>
                            <div class="info">
                               <h2 class="title-blogs-item"> 
                                   <a href="{{route('detailBlog',['slug'=>$item->slug])}}">{{languageName($item->title)}}</a>
                                </h2>
                            </div>
                         </div>
                      </div>
                    @endforeach
                   </div>
                   @else 
                   <h3>Nội dung đang cập nhật...</h3>
                   @endif
                </div>
                <nav class="nav-page" aria-label="Page navigation navigation-page">
                   <center>
                      {{$blog->links()}}
                   </center>
                </nav>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection