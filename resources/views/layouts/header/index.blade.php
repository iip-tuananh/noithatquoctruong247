<div id="header" class="nh-row">
   {{-- <div id="header-row-5" class="nh-row top-header">
      <div class="container">
         <div class="row">
            <div class="col-sm-4 col-xs-4">
               <div class="info-company">
                  <ul>
                     <li>
                        <a href="mailto:{{$setting->email}}"> <i class="fa fa-envelope"
                              aria-hidden="true"></i>{{$setting->email}} </a>
                     </li>
                     <li>
                        <a href="tel:{{$setting->phone1}}"> <i class="fa fa-phone"
                              aria-hidden="true"></i>{{$setting->phone1}} </a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-sm-8 col-xs-8">
               <div class="menu-top">
                  <ul class="content-toggle menu-top hidden-mobile clearfix">
                     <li><a href="{{route('pagecontent',['slug'=> 'gioi-thieu'])}}"> Giới thiệu </a></li>
                     <li>
                        <a href="{{route('yeuCauTuVan')}}"> <i class="fa fa-star"></i> Gửi yêu cầu tư vấn
                        </a>
                     </li>
                     <li><a href="{{route('allListBlog')}}"> Tin tức & Sự kiện </a></li>
                     <li><a href="{{route('lienHe')}}"> Liên hệ </a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div> --}}
   <div id="header-row-45" class="nh-row header-main">
      <div class="container">
         <div class="row">
            <div class="col-sm-2 col-xs-2">
               <div class="navbar-header">
                  <h1>
                     <a class="logo" href="{{route('home')}}"><img src="{{$setting->logo}}" alt="{{$setting->company}}"
                           width="100%" height="100%" /> </a>
                  </h1>
               </div>
            </div>
            <div class="col-sm-10 col-xs-10">
               <div class="wsmenucontainer clearfix">
                  <div class="overlapblackbg"></div>
                  <div class="wsmobileheader clearfix">
                     <a id="wsnavtoggle" class="animated-arrow"> <span></span> </a>
                  </div>
                  <div class="webslidemenu-horizontal">
                     <div class="wsmain">
                        <nav class="wsmenu clearfix">
                           <ul class="mobile-sub wsmenu-list">
                              <li>
                                 <a href="{{route('home')}}" class="navtext"> Trang chủ </a>
                              </li>
                              <li>
                                 <a href="{{route('aboutUs')}}" class="navtext"> Giới thiệu </a>
                              </li>
                              
                              <li>
                                 <a href="javascript: void(0);" class="navtext has-child"> Dịch vụ
                                       <i class="fa fa-caret-down"></i>
                                 </a>
                                 <ul class="wsmenu-submenu">
                                    @foreach ($servicehome as $service)
                                    <li>
                                       <span class="wsmenu-click02">
                                          <i class="wsmenu-arrow fa fa-angle-down"></i>
                                       </span>
                                       <a class="" href="{{route('serviceDetail',['slug'=>$service->slug])}}">{{$service->name}}</a>
                                       {{-- @if (count($type->typetwo) > 0)
                                          <ul class="wsmenu-submenu-sub">
                                             @foreach ($type->typetwo as $i)
                                             <li><a class=""
                                                href="{{route('allListTypeTwo',['danhmuc'=>$item->slug,'loaidanhmuc'=>$type->slug,'thuonghieu'=>$i->slug])}}">{{languageName($i->name)}}</a></li>
                                             @endforeach
                                          </ul>
                                       @endif --}}
                                    </li>
                                    @endforeach
                                 </ul>
                              </li>
                              
                              <li>
                                 <span class="wsmenu-click">
                                    <i class="wsmenu-arrow fa fa-angle-down"></i>
                                 </span>
                                 <a href="{{route('allListBlog')}}" class="navtext has-child"> Tin tức <i class="fa fa-caret-down"></i> </a>
                                 <ul class="wsmenu-submenu">
                                    @foreach ($blogCate as $item)
                                    <li>
                                       <a class="" href="{{route('listCateBlog',['slug'=>$item->slug])}}">{{languageName($item->name)}}</a>
                                    </li>
                                    @endforeach
                                 </ul>
                              </li>
                              <li>
                                 <a href="{{route('lienHe')}}" class="navtext"> Liên hệ </a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>