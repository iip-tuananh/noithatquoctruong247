@extends('layouts.main.master')
@section('title')
{{$pagecontentdetail->title}}
@endsection
@section('description')
{{$pagecontentdetail->title}}
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
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
                        <li class="active "> <a>{{$pagecontentdetail->title}}</a></li>
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
                   <h1 class="title-news"> {{$pagecontentdetail->title}}</h1>
                   <div class="ckeditor-post">
                    {!!$pagecontentdetail->content!!}
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>

@endsection