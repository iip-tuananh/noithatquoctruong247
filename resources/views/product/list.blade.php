@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('js')
@endsection
@section('css')
@endsection
@section('content')
<div id="main" class="nh-row products">
   <div id="content-row-29" class="nh-row  title-main bottom ">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-xs-12">
               <div class="breacrumb-img clearfix">
                  <div class="text-align">
                     <ol class="breadcrumb bread-list">
                        <li> <a href="{{route('home')}}">Trang chủ</a></li>
                        <li class="active "> <a>{{$title}}</a></li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="content-row-66" class="nh-row   ">
      <div class="container">
         <div class="row">
            <div class="col-sm-12 col-xs-12">
               <form id="form-list" method="POST" action="">
                  <div id="load-list-data">
                     <div class="top-list-product-subpage">
                        <div class="name-cate">
                           <h1>{{$title}}</h1>
                           <p> <img src="{{url('frontend/images/1585125169-512041082-custom.png')}}" alt="">
                           </p>
                        </div>
                        <div class="description-cate">
                           <p style="text-align: justify;"><span style="font-weight: 400;">Với chúng tôi, mẫu thiết kế
                                 nội thất đẹp không chỉ đơn thuần là lý thuyết hình khối, màu sắc hay bố cục...ở đó còn
                                 là nơi gieo niềm vui, sự thư giãn của chủ nhân. Quan niệm khác lạ ấy chính là
                              </span><em>“kim chỉ nam”</em> <span style="font-weight: 400;">cho mọi bản thiết kế thành
                                 công, gặt hái sự hài lòng tuyệt đối từ khách hàng. Hãy cùng Nhất Gia, thưởng lãm hàng ngàn
                                 công trình nội thất với ngàn cá tính để thấy được vẻ ĐẸP riêng hiện hữu trong từng công
                                 trình.</span></p>
                        </div>
                     </div>
                     <div class="cate-child-product">
                        <div class="row">
                           <div class="col-sm-10 col-xs-12 col-sm-offset-1">
                              <div class="row">
                                 @if (isset($typeList))
                                     @foreach ($typeList as $item)
                                     <div class="col-sm-3 col-xs-6">
                                       <div class="item-child"> <a
                                             href="{{route('allListProType',['danhmuc'=>$cateno->slug,'loaidanhmuc'=>$item->slug])}}"> {{languageName($item->name)}}
                                          </a></div>
                                    </div>
                                     @endforeach
                                 @elseif(isset($typeTwoList))
                                    @foreach ($typeTwoList as $item)
                                     <div class="col-sm-3 col-xs-6">
                                       <div class="item-child"> <a
                                             href="{{route('allListTypeTwo',['danhmuc'=>$cateno->slug,'loaidanhmuc'=>$type->slug,'thuonghieu'=>$item->slug])}}"> {{languageName($item->name)}}
                                          </a></div>
                                    </div>
                                     @endforeach
                                 @endif
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="box-detail-list-product ">
                        <div class="row">
                           @foreach ($list as $item)
                           <div class="list-item list-category col-md-3 col-sm-3 col-xs-6 ">
                              @include('layouts.product.item',['pro'=>$item])
                           </div>
                           @endforeach
                           
                        </div>
                        {{$list->links()}}
                     </div>
                     
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div id="content-row-83" class="nh-row  mb-30 ">
      <div class="container">
         <div class="row">
            <div class="col-sm-12 col-xs-12">
               <div class="consultation-request ">
                  <div class="mart15 fll w100"></div>
                  @include('layouts.main.form')
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection