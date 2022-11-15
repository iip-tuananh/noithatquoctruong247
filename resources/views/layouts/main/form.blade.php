<div class="col-xs-12">
    <div class="title-head text-center">
        <p class="c-green title-lienhe">Nhận báo giá &amp; gửi yêu cầu tư vấn</p>
        <p> <img src="{{url('frontend/images/1585125169-512041082-custom.png')}}" alt=""></p>
        <p class="slogan">Sau khi nhận được yêu cầu của Quý khách, tư vấn viên của NHất Gia sẽ liên hệ trong thời gian
            sớm nhất.</p>
    </div>
    <form id="myForm" class="frm-required form-contact">
        <div class="border-consultation">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="form-group">
                        <input class="form-control required" type="text" name="full_name" placeholder="Họ và tên"
                            aria-required="true">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="form-group">
                        <input class="form-control required" type="phone" name="phone" placeholder="Số điện thoại"
                            aria-required="true">
                    </div>
                </div>
            </div>
            <div class="form-group hidden">
                <input class="form-control" type="text" value="Gửi yêu cầu tư vấn" name="title" placeholder="Tiêu đề">
            </div>
            <div class="form-group">
                <textarea class="form-control required" name="content" placeholder="Nội dung cần tư vấn"
                    aria-required="true"></textarea>
            </div>
        </div>
        <div class="form-group list-button">
            <div class="btn-content text-center"> 
                <button type="button" onclick="SubForm()" class="btn btn-submit"><span class="name">Gửi
                        yêu cầu tư vấn</span></button></div>
        </div>
        <div class="entry-contact">
            <div class="row">
                <div class="col-md-4">
                    <p><a href="tel:{{$setting->phone1}}">Hotline :{{$setting->phone1}}</a></p>
                </div>
                <div class="col-md-4">
                    <p><a href="tel:{{$setting->phone1}}">Hotline: {{$setting->phone1}}</a></p>
                </div>
                <div class="col-md-4">
                    <p><a href="mailto:{{$setting->email}}">Gmail: {{$setting->email}}</a></p>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    function SubForm() {
    $.ajax({
       url: "https://script.google.com/macros/s/AKfycbyVPkjQNEQYP-p_ZWMW0n9rJCeKQl33qDXOgEMZXOHT71rwYMqt5GTkN1qVgZHspbU9OA/exec",
       type: "post",
       data: $("#myForm").serializeArray(),
       success: function () {

          alert("Gửi thông tin thành công")
       },
       error: function () {
          alert("Gửi thông tin thất bại")
       }
    });
 }
 </script>