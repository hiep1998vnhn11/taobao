@extends('layouts.app')

@section('content')
<section class="navbar main-menu">
    <div class="navbar-inner main-menu">
        <a href="/" class="logo pull-left"><img src="../themes/images/logo.png" class="site_logo" alt=""></a>
        <nav id="menu" class="pull-right">
            <ul>
                <li><a href="{{ url('/products/1') }}">Đồ nữ</a></li>
                <li><a href="{{ url('/products/2') }}">Đồ nam</a></li>
                <li><a href="{{ url('/products/3') }}">Đồ thể thao</a></li>
                <li><a href="{{ url('/products/4') }}">Túi sách</a></li>
                <li><a href="{{ url('/products/5') }}">Giày</a></li>
            </ul>
        </nav>
    </div>
</section>

<section class="header_text sub">
    <img class="pageBanner" src="themes/images/pageBanner.png" alt="New products">
    <h4><span>Thanh toán</span></h4>
</section>
<section class="main-content">
    <div class="row">
        <div class="span12">
            <div class="accordion" id="accordion2">
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Phương thức thanh toán</a>
                    </div>
                    <div id="collapseOne" class="">
                        <div class="accordion-inner">
                            <div class="row-fluid">
                                <div class="span6">
                                    <h4>Lựa chọn phương thức thanh toán</h4>
                                    <p>Bằng cách tạo tài khoản, bạn sẽ có thể mua sắm nhanh hơn, cập nhật trạng thái đơn hàng và theo dõi các đơn hàng bạn đã thực hiện trước đó.</p>
                                    <form action="#" method="post" id="detail_method">
                                        <div id="detail_method_label"></div>
                                        <label class="radio" for="visa">
                                            <input type="radio" name="method" value="visa" id="visa">VISA
                                            <img class="payment-logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Former_Visa_%28company%29_logo.svg/1280px-Former_Visa_%28company%29_logo.svg.png" alt="New products" style="width:30px;">
                                        </label>
                                        <label class="radio" for="cod">
                                            <input type="radio" name="method" value="cod" id="cod-paid">Tiền mặt
                                        </label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Thông tin tài khoản</a>
                    </div>
                    <div id="collapseTwo" class="">
                        <div class="accordion-inner">
                            <div class="row-fluid">
                                <div class="span6">
                                    <h4>Thông tin cá nhân</h4>
                                    <div class="control-group">
                                        <label class="control-label">Tên</label>
                                        <div class="controls">
                                            <div id="detail_name_label"></div>
                                            <input type="text" name="name" class="input-xlarge" id="detail_name">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Địa chỉ Email</label>
                                        <div class="controls">
                                            <div id="detail_email_label"></div>
                                            <input type="text" placeholder="" class="input-xlarge" id="detail_email">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Số điện thoại</label>
                                        <div class="controls">
                                            <div id="detail_phone_label"></div>
                                            <input type="text" placeholder="" class="input-xlarge" id="detail_phone">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Fax</label>
                                        <div class="controls">
                                            <input type="text" placeholder="" class="input-xlarge" id="detail_fax">
                                        </div>
                                    </div>
                                </div>
                                <div class="span6">
                                    <h4>Địa chỉ</h4>
                                    <div class="control-group">
                                        <label class="control-label">Công ty</label>
                                        <div class="controls">
                                            <input type="text" placeholder="" class="input-xlarge" id="detail_company">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Số tài khoản:</label>
                                        <div class="controls">
                                            <input type="text" placeholder="" class="input-xlarge" id="detail_bank">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label"><span class="required">*</span> Địa chỉ:</label>
                                        <div class="controls">
                                            <div id="detail_address_label"></div>
                                            <input type="text" placeholder="" class="input-xlarge" id="detail_address">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label"><span class="required">*</span> Post:</label>
                                        <div class="controls">
                                            <input type="text" placeholder="" class="input-xlarge">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">Xác nhận Order</a>
                    </div>
                    <div id="collapseThree" class="">
                        <div class="accordion-inner">
                            <div class="row-fluid">
                                <div class="control-group">
                                    <label for="detail_message" class="control-label">Lời nhắn</label>
                                    <div class="controls">
                                        <div id="detail_message_label"></div>
                                        <textarea rows="3" id="detail_message" class="span12"></textarea>
                                    </div>
                                </div>
                                <button class="btn btn-inverse pull-right" onclick="createDetail()">Xác nhận</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="detail_alert">
                @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
    <script type="text/javascript">
        function createDetail() {
            $("#detail_method input[type='radio']:checked").val()
            $.ajax({
                type: 'post',
                url: '/create_detail',
                data: ({
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    'address': $("#detail_address").val(),
                    'name': $("#detail_name").val(),
                    'email': $("#detail_email").val(),
                    'phone': $("#detail_phone").val(),
                    'message': $("#detail_message").val(),
                    'method': $("#detail_method input[type='radio']:checked").val()
                }),
                success: function(data) {
                    $("#detail_alert").html(data.message);
                    setTimeout(function() {
                        window.location.href = "{{URL::to('cart')}}"
                    }, 3000)
                },
                error: function(data) {
                    var errors = $.parseJSON(data.responseText).errors;
                    $.each(errors, function(index, value) {
                        $(`#detail_${index}_label`).html(`<div class = "invalid-feedback" role = "alert" ><strong >${value}</strong></div>`)
                    });
                }
            });
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</section>
@endsection