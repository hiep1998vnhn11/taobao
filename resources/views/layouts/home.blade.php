@extends('layouts.app')

@section('content')
    <section class="navbar main-menu">
        <div class="navbar-inner main-menu">
            <a href="/" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
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

    <section  class="homepage-slider" id="home-slider">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="themes/images/carousel/banner-1.jpg" alt="" />
                </li>
                <li>
                    <img src="themes/images/carousel/banner-2.jpg" alt="" />
                    <div class="intro">
                        <h1>Mid season sale</h1>
                        <p><span>Up to 50% Off</span></p>
                        <p><span>On selected items online and in stores</span></p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="header_text">
        Những sản phẩm mới luôn được chúng tôi cập nhật liên tục bắt kịp xu hướng thời trang thế giới
        <br/>Đừng bỏ lỡ cơ hội sở hữu những sản phẩm tuyệt với với mức giá chỉ có tại Taobao.com
    </section>
    <section class="main-content">

        <div class="row">
            <div class="span12">
                <div class="pull-right" style="padding-right: 30px">
                    <!-- <form method="POST" class="" action="{{route('search_item_name')}}">
                        @csrf
                        <input id="keyword" name="search_keyword" type="text"
                               class="input-block-level search-query text-secondary" Placeholder="eg. T-sirt">
                    </form> -->
                    <form method="POST" class="form-search" action="{{route('search_item_name')}}">
                        <div class="input-append">
                            @csrf
                            <input id="keyword" name="search_keyword" type="text"
                                class="search-query text-secondary" Placeholder="eg. T-sirt"
                                style="width: 280px; height: 25px;"
                            >
                            <button type="submit" class="btn" style="color: #fff; background-image: none; background-color: #eb4800; line-height: 25px; width: 50px;"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="span12">
                <ul class="thumbnails listing-products">
                    @foreach($paginator as $item)
                        <li class="span3">
                            <div class="product-box" style="height: 400px">
                                <span class="sale_tag"></span>
                                <a href="{{ url("/product-detail/".$item->id) }}"><img alt="" src="{{$item->image}}" style="height: 250px; width: 270px"></a><br/>
                                <a href="{{ url("/product-detail/".$item->id) }}" class="title">{{$item->name}}</a><br/>
                                <p class="price">{{$item->price}}.000đ</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <hr>
                @if ($paginator->hasMorePages())
                    <li>
                        <a href="{{ $paginator->nextPageUrl() }}">
                            <span><i class="fa fa-angle-double-right"></i></span>
                        </a>
                    </li>
                @else
                    <li class="disabled">
                        <span><i class="fa fa-angle-double-right"></i></span>
                    </li>
                @endif
                <div class="pagination pagination-small pagination-centered">
                    {{ $paginator ->links('vendor.pagination.default')}}
                </div>
            </div>
        </div>
    </section>
@endsection
