@extends('layouts.main.master')
@section('title')
Đặt bàn tại Lynh
@endsection
@section('description')
Bún đậu mắm tôm Lynh
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('content')
<div class="breadcrumb_background">
   <div class="title_full">
      <div class="container a-center">
         <h1 class="title_page">Hoàn tất đặt hàng</h1>
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
                  <li><strong><span>Hoàn tất đặt hàng</span></strong></li>
               </ul>
            </div>
         </div>
      </div>
   </section>
</div>
<div class="content inner-pg cart-pg clearfix">
   <div class="container">
      <article>
         <div class="row">
             <div class="col-sm-12 col-md-6">
                <form class="woocommerce-cart-form">
                    <div class="table-responsive">
                       <table class="table cart-table table-hover">
                          <thead>
                             <tr>
                                <th class="product-name">Thông tin sản phẩm</th>
                                <th class="product-price">Đơn giá</th>
                                <th class="product-quantity">Số lượng</th>
                                <th class="product-subtotal">Thành tiền</th>
                             </tr>
                          </thead>
                          @php $total = 0; $qty = 0 ; @endphp
                          @foreach((array) session('cart') as $id => $details)
                                   @php 
                                   $total += ($details['price'] - ($details['price']*($details['discount']/100))) * $details['quantity'] ;
                                   $qty += $details['quantity'] ;
                                   @endphp
                          @endforeach
                          <tbody class="cart_list_up">
                             @foreach ($cart as $id => $details)
                             <tr class="cart-item">
                                <td class="product-name" data-title="Product">
                                   <a href="#">{{ languageName($details['name']) }}</a>
                                </td>
                                <td class="product-price" data-title="Price">
                                   <span>{{ number_format($details['price'] - ($details['price']*($details['discount']/100))) }}₫</span>
                                </td>
                                <td class="product-quantity" data-title="Quantity">
                                   <div class="quantity">
                                      <input type="number" disabled class="input-text qty text" value="{{$details['quantity']}}">
                                   </div>
                                </td>
                                <td class="product-subtotal" data-title="Total">
                                   <span>{{ number_format(($details['price'] - ($details['price']*($details['discount']/100)))*$details['quantity']) }}₫</span>
                                </td>
                             </tr>
                             @endforeach
                          </tbody>
                       </table>
                    </div>
                 </form>
             </div>
             <div class="col-sm-12 col-md-6">
                <form method="post" action="{{route('postBill')}}">
                    @csrf
					<div class="row">
						<div class="col-sm-4 col-md-4">
							<div class="form-group">
							    <label for="exampleInputtext1">Họ và tên</label>
							    <input type="text" class="form-control" name="billingName" required>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="form-group">
							    <label for="exampleInputEmail1">Địa chỉ</label>
							    <input type="text" class="form-control" name="billingAddress" required>
						  	</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="form-group">
							    <label for="exampleInputtext2">Số điện thoại</label>
							    <input type="text" class="form-control" name="billingPhone" required>
						  	</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12 col-md-12">
							<div class="js-cf-message"></div>
							<div class="form-group">
							    <label for="exampleInputtext3">Ghi chú</label>
							    <textarea class="form-control" rows="7" name="note"></textarea>
						  	</div>
						</div>
					</div>
			

				  	<div class="send-message">
				  		<button type="submit" class="btn btn-default">Đặt hàng</button>
			  		</div>
				</form>
             </div>
         </div>
         
      </article>
   </div>
</div>
@endsection