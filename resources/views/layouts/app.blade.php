<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Taobao ITSS II</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--[if ie]>
    <meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
    <!-- bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-responsive.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrappage.css') }}" rel="stylesheet"/>

    <!-- global styles -->
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet"/>

    <!-- scripts -->
    <script src="{{ asset('js/jquery-1.7.2.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/superfish.js') }}"></script>
    <script src="{{ asset('js/jquery.scrolltotop.js') }}"></script>
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->
    
    <!-- FontAwesome Styles-->
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet" />
</head>
<body>
<div id="top-bar" class="container">
    <div class="row">
{{--        <div class="span4">--}}
{{--            <form method="POST" class="" action="{{route('search_item_name')}}">--}}
{{--                @csrf--}}
{{--                <input id="keyword" name="search_keyword" type="text"--}}
{{--                       class="input-block-level search-query text-secondary" Placeholder="eg. T-sirt">--}}
{{--            </form>--}}
{{--        </div>--}}
        <div class="span12">
            <div class="account pull-right">
                <ul class="user-menu">
                    @if (Auth::check() && Auth::user()->isAdmin() == 1)
                        <li><a href="{{url('/dashboard')}}">DASHBOARD</a></li>
                        <li><a href="{{ url('/cart') }}">Giỏ Hàng</a></li>
                        <li><a href="{{ url('/checkout') }}">Thanh Toán</a></li>
                    @else
                        <li><a href="{{ url('/login') }}">Giỏ Hàng</a></li>
                        <li><a href="{{ url('/login') }}">Thanh Toán</a></li>
                    @endif
                    @guest
                        @if (Route::has('login'))
                            <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                        @endif
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Đăng kí</a></li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="logged_name nav-link dropdown-toggle"
                               href="{{ route('logout') }}" role="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false" v-pre
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <span>{{ Auth::user()->username }}</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="wrapper" class="container">

    @yield('content')

    <section id="footer-bar">
        <div class="row">
            <div class="span3">
                <h4>Navigation</h4>
                <ul class="nav">
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Thông tin</a></li>
                    <li><a href="#">Liên hệ</a></li>
                    <li><a href="#">Giỏ hàng</a></li>
                    <li><a href="#">Đăng kí</a></li>
                </ul>
            </div>
            <div class="span4">
                <h4>My Account</h4>
                <ul class="nav">
                    <li><a href="#">Tài khoản</a></li>
                    <li><a href="#">Lịch sử đơn hàng</a></li>
                    <li><a href="#">Wishlist</a></li>
                </ul>
            </div>
            <div class="span5">
                <p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
                <p>Công ty TNHH không thành viên ITSS-VN 61</p>
                <br/>
                <span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
            </div>
        </div>
    </section>
    <section id="copyright">
        <span>BlackPink ITSS II 2020</span>
    </section>
</div>
<script src="{{ asset('js/common.js') }}"></script>
<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
<script type="text/javascript">
    $(function () {
        $(document).ready(function () {
            $('.flexslider').flexslider({
                animation: "fade",
                slideshowSpeed: 4000,
                animationSpeed: 600,
                controlNav: false,
                directionNav: true,
                controlsContainer: ".flex-container" // the container that holds the flexslider
            });
        });
    });
</script>
{{--jquery.autocomplete.js--}}
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.10/jquery.autocomplete.min.js"></script>
<script>
    $(function () {
        $("#keyword").autocomplete({
            serviceUrl: '/search-product',
            paramName: "keyword",
            onSelect: function (suggestion) {
                $("#keyword").val(suggestion.value);
            },
            transformResult: function (response) {
                return {
                    suggestions: $.map($.parseJSON(response), function (item) {
                        return {
                            value: item.name,
                        };
                    })
                };
            },
        });
    })
</script>
</body>
</html>
custom css item suggest search
<style>
    .autocomplete-suggestions {
        border: 1px solid #999;
        background: #FFF;
        overflow: auto;
    }

    .autocomplete-suggestion {
        padding: 2px 5px;
        white-space: nowrap;
        overflow: hidden;
    }

    .autocomplete-selected {
        background: #F0F0F0;
    }

    /*.autocomplete-suggestions strong { font-weight: normal; color: #3399FF; }*/
    .autocomplete-group {
        padding: 2px 5px;
    }

    .autocomplete-group strong {
        display: block;
        border-bottom: 1px solid #000;
    }
</style>
