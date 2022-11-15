@extends('layouts.main.master')
@section('title')
Giỏ hàng của bạn
@endsection
@section('description')
Bún đậu mắm tôm Lynh
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
<link href="{{asset('frontend/css/cartpage.scss.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="breadcrumb_background">
   <div class="title_full">
      <div class="container a-center">
         <h1 class="title_page">Giỏ hàng</h1>
      </div>
   </div>
   <section class="bread-crumb">
      <span class="crumb-border"></span>
      <div class="container">
         <div class="row">
            <div class="col-12 a-left">
               <ul class="breadcrumb">
                  <li class="home">
                     <a href="/"><span>Trang chủ</span></a>						
                     <span class="mr_lr">
                        &nbsp;
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-angle-right fa-w-8">
                           <path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" class=""></path>
                        </svg>
                        &nbsp;
                     </span>
                  </li>
                  <li><strong><span>Giỏ hàng</span></strong></li>
               </ul>
            </div>
         </div>
      </div>
   </section>
</div>
<section class="main-cart-page main-container col1-layout">
   <div class="main container cartpcstyle">
      <div class="wrap_background_aside padding-bottom-40">
         <div class="header-cart">
            <h3 class="title_cart">
               <span>Giỏ hàng của bạn</span>
            </h3>
            <div class="header-cart title_cart_pc hidden-sm hidden-xs">
            </div>
         </div>
         <div class="col-main cart_desktop_page cart-page">
            <div class="cart page_cart hidden-xs hidden-sm row">
               <form action="/cart" method="post" novalidate="" class="formcartpage col-lg-12 col-md-12 margin-bottom-0">
                  <div class="bg-scroll">
                     <div class="cart-thead">
                        <div style="width: 52%" class="a-left">Thông tin sản phẩm</div>
                        <div style="width: 17%" class="a-center">Đơn giá</div>
                        <div style="width: 18%" class="a-center">Số lượng</div>
                        <div style="width: 13%" class="a-right">Tổng tiền</div>
                     </div>
                     <div class="cart-tbody">
                        @php $total = 0; $qty = 0 ; @endphp
                        @foreach((array) session('cart') as $id => $details)
                        @php 
                        $total += ($details['price'] - ($details['price']*($details['discount']/100))) * $details['quantity'] ;
                        $qty += $details['quantity'] ;
                        @endphp
                        @endforeach
                        @foreach ($cart as $id => $details)
                        <div class="item-cart productid-44536719">
                           <div style="width: 19%" class="image">
                              <a class="product-image a-left" title="{{ url(''.$details['image']) }}" href="javascript:;">
                              <img width="75" height="auto" alt="{{ url(''.$details['image']) }}" src="{{ url(''.$details['image']) }}">
                              </a>
                           </div>
                           <div style="width: 33%" class="a-left contentcart">
                              <h3 class="product-name">
                                 <a class="text2line" href="javascript:;" title="{{ languageName($details['name']) }}">{{ languageName($details['name']) }}</a>
                              </h3>
                              <a class="remove-itemx remove-item-cart" title="Xóa" href="javascript:;" onclick="removeCartList({{$details['idpro']}})" data-id="44536719">
                                 <span>
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" class="svg-times svg-inline--fa fa-times fa-w-11">
                                       <path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" class=""></path>
                                    </svg>
                                    &nbsp;Xóa
                                 </span>
                              </a>
                           </div>
                           <div style="width: 17%" class="a-center">
                              <span class="cart-prices">
                              <span class="prices">{{ number_format($details['price'] - ($details['price']*($details['discount']/100))) }}₫</span> 
                              </span>
                           </div>
                           <div style="width: 18%" class="a-center">
                              <div class="input_qty_pr">
                                 <input type="text" maxlength="3" readonly="" min="0" class="check_number_here input-text number-sidebar input_pop input_pop qtyItem44536719" id="qtyItem44536719" name="Lines" disabled value="{{$details['quantity']}}">
                              
                              </div>
                           </div>
                           <div style="width: 13%;align-items: flex-end;padding-right: 0;" class="a-center">
                              <span class="cart-price">
                              <span class="price">{{ number_format(($details['price'] - ($details['price']*($details['discount']/100)))*$details['quantity']) }}₫</span> 
                              </span>
                           </div>
                        </div>
                        @endforeach
                     </div>
                  </div>
               </form>
               <div class="col-lg-12 col-md-12">
                  <div class="section bg_cart shopping-cart-table-total">
                     <div class="table-total col-lg-4 col-lg-offset-8 col-xl-4 col-xl-offset-8">
                        <table class="table">
                           <tbody>
                              <tr>
                                 <td coldspan="20" class="total-text">Tổng tiền: </td>
                                 <td class="txt-right totals_price price_end f-right">{{number_format($total)}}₫</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12">
                  <div class="f-right section continued">
                     <a href="javascript:;" class="btn-checkout-cart button_checkfor_buy" onclick="location.href='/thanh-toan.html'">Tiến hành thanh toán</a>
                     <a href="/" class="form-cart-continue">Tiếp tục mua hàng</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="wrap_background_aside padding-top-15 margin-bottom-40 padding-left-0 padding-right-0 cartmbstyle">
      <div class="cart-mobile container">
         <form novalidate="" class="margin-bottom-0">
            <div class="header-cart">
               <div class="title-cart title_cart_mobile">
                  <h3>Giỏ hàng</h3>
               </div>
            </div>
            <div class="header-cart-content">
               <div class="cart_page_mobile content-product-list">
                  @foreach ($cart as $id => $details)
                  <div class="item-product item productid-44536719 ">
                     <div class="item-product-cart-mobile">
                        <a href="javascript:;">	
                        </a><a class="product-images1" href="" title="{{ languageName($details['name']) }}">
                        <img width="80" height="150" src="{{ url(''.$details['image']) }}" alt="{{ languageName($details['name']) }}">
                        </a>
                     </div>
                     <div class="title-product-cart-mobile">
                        <h3>
                           <a href="javascript:;" title="{{ languageName($details['name']) }}">{{ languageName($details['name']) }}</a>
                        </h3>
                        <p>
                           Giá: <span>{{ number_format($details['price'] - ($details['price']*($details['discount']/100))) }}₫</span>
                        </p>
                     </div>
                     <div class="select-item-qty-mobile">
                        <div class="txt_center">
                           <input type="text" maxlength="3" min="1" class="input-text number-sidebar"  name="Lines" size="4" value="{{$details['quantity']}}" disabled>
                        </div>
                        <a class="button remove-item remove-item-cart" href="javascript:;" onclick="removeCartList({{$details['idpro']}})" data-id="44536719">Xoá</a>
                     </div>
                  </div>
                  @endforeach
               </div>
               <div class="header-cart-price">
                  <div class="title-cart">
                     <h3 class="text-xs-left">Tổng tiền</h3>
                     <a class="text-xs-right  totals_price_mobile">2.560.000₫</a>
                  </div>
                  <div class="checkout">
                     <button class="btn-proceed-checkout-mobile" title="Tiến hành thanh toán" type="button" onclick="window.location.href='/checkout'">
                     <span>Tiến hành thanh toán</span></button>
                     <button class="btn btn-white f-left" title="Tiếp tục mua hàng" type="button" onclick="window.location.href='/collections/all'">
                     <span>Tiếp tục mua hàng</span>
                     </button>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</section>
@endsection