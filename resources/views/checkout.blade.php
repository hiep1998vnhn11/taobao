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
        <img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
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
                        <div id="collapseOne" class="accordion-body in collapse">
                            <div class="accordion-inner">
                                <div class="row-fluid">
                                    <div class="span6">
                                        <h4>Lựa chọn phương thức thanh toán</h4>
                                        <p>Bằng cách tạo tài khoản, bạn sẽ có thể mua sắm nhanh hơn, cập nhật trạng thái đơn hàng và theo dõi các đơn hàng bạn đã thực hiện trước đó.</p>
                                        <form action="#" method="post">
                                            <fieldset>
{{--                                                <label class="radio" for="register">--}}
{{--                                                    <input type="radio" name="account" value="register" id="momo" checked="checked">Momo--}}
{{--                                                    <img class="payment-logo" src="https://upload.wikimedia.org/wikipedia/vi/archive/f/fe/20201011055543%21MoMo_Logo.png" alt="New products" style="width:30px;height:30px;" >--}}
{{--                                                </label>--}}
{{--                                                <label class="radio" for="guest">--}}
{{--                                                    <input type="radio" name="account" value="guest" id="visa">VISA--}}
{{--                                                    <img class="payment-logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Former_Visa_%28company%29_logo.svg/1280px-Former_Visa_%28company%29_logo.svg.png" alt="New products" style="width:30px;" >--}}
{{--                                                </label>--}}
                                                <label class="radio" for="cod-paid">
                                                    <input type="radio" name="account" value="cod-paid" id="cod-paid">Tiền mặt
                                                </label>
                                                <br>
{{--                                                <button class="btn btn-inverse" data-toggle="collapse" data-parent="#collapse2">Continue</button>--}}
                                            </fieldset>
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
                        <div id="collapseTwo" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <div class="row-fluid">
                                    <div class="span6">
                                        <h4>Thông tin cá nhân</h4>
                                        <div class="control-group">
                                            <label class="control-label">Họ</label>
                                            <div class="controls">
                                                <input type="text" placeholder="" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Tên</label>
                                            <div class="controls">
                                                <input type="text" placeholder="" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Địa chỉ Email</label>
                                            <div class="controls">
                                                <input type="text" placeholder="" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Số điện thoại</label>
                                            <div class="controls">
                                                <input type="text" placeholder="" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Fax</label>
                                            <div class="controls">
                                                <input type="text" placeholder="" class="input-xlarge">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span6">
                                        <h4>Địa chỉ</h4>
                                        <div class="control-group">
                                            <label class="control-label">Công ty</label>
                                            <div class="controls">
                                                <input type="text" placeholder="" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Số tài khoản:</label>
                                            <div class="controls">
                                                <input type="text" placeholder="" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label"><span class="required">*</span> Địa chỉ 1:</label>
                                            <div class="controls">
                                                <input type="text" placeholder="" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Địa chỉ 2:</label>
                                            <div class="controls">
                                                <input type="text" placeholder="" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label"><span class="required">*</span> Thành phố:</label>
                                            <div class="controls">
                                                <input type="text" placeholder="" class="input-xlarge">
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
                        <div id="collapseThree" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <div class="row-fluid">
                                    <div class="control-group">
                                        <label for="textarea" class="control-label">Lời nhắn</label>
                                        <div class="controls">
                                            <textarea rows="3" id="textarea" class="span12"></textarea>
                                        </div>
                                    </div>
                                    <button class="btn btn-inverse pull-right">Xác nhận</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
