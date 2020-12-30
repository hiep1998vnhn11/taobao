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
    <img class="pageBanner" src="../themes/images/pageBanner.png" alt="New products">
    <h4><span>{{$category->name}}</span></h4>
</section>
<section class="main-content">
    <div class="row">
        <div class="span12">
            <ul class="thumbnails listing-products">
                @foreach($paginator as $item)
                <li class="span3">
                    <div class="product-box" style="height: 400px;">
                        <span class="sale_tag"></span>
                        <a href="{{ url("/product-detail/".$item->id) }}"><img alt="" src="{{$item->image}}" style="height: 250px; width: 270px"></a><br />
                        <a href="{{ url("/product-detail/".$item->id) }}" class="title">{{$item->name}}</a><br />
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