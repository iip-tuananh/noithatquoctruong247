@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
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
   <div id="content-row-30" class="nh-row  title-main bottom  ">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-xs-12">
               <div class="breacrumb-img clearfix">
                  <div class="text-align">
                     <ol class="breadcrumb bread-list">
                        <li> <a href="{{route('home')}}">Trang chủ</a></li>
                        <li class="active "> <a>Liên hệ</a></li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="content-row-67" class="nh-row   ">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-xs-12">
               <div class="box_module bottom box-contacts">
                  <div class="clearfix">
                     <div class="row">
                        <div class="col-sm-6 col-xs-12">
                           <div class="box">
                              <div class="title_style3">
                                 <h3>{{$setting->company}}</h3>
                              </div>
                              <div class="contact-content">
                                 <p>{{$setting->webname}}</p>
                                 <p><strong>Địa chỉ :</strong> <span>{{$setting->address1}}</span></p>
                                 <p><strong>Hotline :</strong> <span>{{$setting->phone1}}</span></p>
                                 <p><strong>Email :</strong> <span>{{$setting->email}}</span></p>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                           {{-- <div class="img-res"> <img src="{{url('frontend/images/aboutus.jpg')}}" class="img-responsive" alt="Liên hệ" style="width: 100%"></div> --}}
                           <div class="row">
                              <div class="col-xs-12">
                                 <form id="frm-send-contact" class="frm-required form-contact margin-t-10" action="{{route('postcontact')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                       <input class="form-control required" type="text" name="name" placeholder="Họ và tên" required></div>
                                    <div class="form-group"> 
                                       <input class="form-control required" type="text" name="phone" placeholder="Số điện thoại" required></div>
                                    <div class="form-group"> 
                                       <input class="form-control required" type="text" name="email" placeholder="Email" aria-required="true"></div>
                                    <div class="form-group">
                                       <textarea id="content_textarea" name="mess" class="form-control required" rows="3" placeholder="Ghi chú" required></textarea>
                                    </div>
                                    <div class="form-group"> 
                                       <button type="submit" class="bt btn-default txt-upper btn-submit">
                                             <span class="name">Gửi yêu cầu</span>
                                       </button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="box_module box_maps" style="margin-bottom: 50px;"> 
               {!!$setting->iframe_map!!}    
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection