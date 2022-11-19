<div id="footer" class="nh-row">
   <div id="footer-row-7" class="nh-row   ">
      <div class="container">
         <div class="row">
            <div class="col-sm-4">
               <div class="item_block" style="">
                  <div class="menu-footer-vertical box-ft ">
                     <div class="footer-logo">
                        <img src="{{$setting->logo}}" alt="{{$setting->company}}">
                     </div>
                     <div class="address-ft">
                        <p>
                           <span>{{$setting->company}} :</span>
                        </p>
                        <p>
                           <span>Địa chỉ:</span>
                           {{$setting->address1}}
                        </p>
                        <p>
                           <i class="fa fa-phone" aria-hidden="true"></i> Hotline: 
                           <a href="tel:{{$setting->phone1}}" style="display:inline-block;">{{$setting->phone1}}</a>/
                           <a href="tel:{{$setting->phone2}}" style="display:inline-block;">{{$setting->phone2}}</a>
                        </p>
                        <p>
                           <i class="fa fa-envelope" aria-hidden="true"></i> email:
                           <a href="mailto:{{$setting->email}}" style="display:inline-block;">{{$setting->email}}</a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="item_block" style="">
                  <div class="menu-footer-vertical  box-ft ">
                     <p class="title-menu-ft">Dịch vụ tại Đồ Gỗ Nội Thất Quốc Trưởng</p>
                     <div class="list-menu-fy">
                        <ul>
                           @foreach ($servicehome as $service)
                           <li>
                              <a href="{{route('serviceDetail', ['slug'=>$service->slug])}}">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    {{$service->name}}
                              </a>
                           </li>
                           @endforeach
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="item_block" style="">
                  <div class="contact-footer-custom ">
                     <div class="menu-footer-vertical  box-ft contact-footer-custom ">
                        <p class="title-menu-ft">Đăng ký tư vấn miễn phí</p>
                        <p class="slogan">Vui lòng để lại thông tin của bạn, chúng tôi sẽ liên hệ trong thời gian sớm nhất.</p>
                        <form id="footer_contact" class="frm-required form-contact" method="POST" action="{{route('postcontact')}}" novalidate="novalidate">
                           @csrf
                           <div class="row">
                              <input class="form-control hidden" type="text" name="title" value="Đăng ký tư vấn miễn phí" placeholder="Tiêu đề">
                              <div class="col-sm-6 col-xs-12">
                                 <div class="form-group"> <input class="form-control required" type="text" name="name" placeholder="Họ và tên" aria-required="true"></div>
                              </div>
                              <div class="col-sm-6 col-xs-12">
                                 <div class="form-group"> <input class="form-control required" type="phone" name="phone" placeholder="Số điện thoại" aria-required="true"></div>
                              </div>
                              <div class="col-sm-12 col-xs-12">
                                 <div class="form-group"><textarea class="form-control" name="mess" placeholder="Mô tả chi tiết các yêu cầu của bạn" rows="1"></textarea></div>
                              </div>
                              <div class="col-sm-12 col-xs-12">
                                 <div class="form-group list-button">
                                    <div class="btn-content"> <button type="submit" class="btn btn-submit"><span class="name">Gửi</span></button></div>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="footer-row-46" class="nh-row  bottom-footer ">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="item_block" style="">
                  <p class="coppyright">
                     Copyright 2022 © Đồ Gỗ Nội Thất Quốc Trưởng, Design By SBT
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>