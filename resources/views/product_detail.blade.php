@extends('layouts.app')
@section('content')
    <section class="header_text sub">
        <img class="pageBanner" src="../themes/images/pageBanner.png" alt="New products" >
        <h4><span>Mô tả sản phẩm</span></h4>
    </section>
    <section class="main-content">
        <div class="row">
            <div class="span9">
                <div class="row">
                    <div class="span4">
                        <a href="#" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="{{$product->image}}"></a>

                    </div>
                    <div class="span5">
                        <h4><strong>{{$product->name}}</strong></h4>
                    </div>
                    <div class="span5">
                        <address>
                            <strong>Thương Hiệu:</strong> <span>{{$product->brand}}</span><br>
                            <strong>Điểm đánh giá:</strong> <span>{{$product->star}}</span><br>
                            <strong><a href="{{$product->link}}">Taobao Link</a></strong> <br>
                        </address>
                        <h4><strong>Giá: {{$product->price}}</strong></h4>
                    </div>
                    <div class="span5">
                        <form class="form-inline" action="/addToCart" method="post">
                            @csrf
                            <input type="hidden" name="productId" value={{$product->id}}/>
                            <label>Số lượng:</label>
                            <input type="text" class="span1" placeholder="1" name="quality" value="1">
                            <button class="btn btn-inverse" type="submit">Mua ngay</button>
                            <button class="btn btn-inverse" type="submit">Giỏ hàng</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="span9">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#home">Thông tin chi tiết</a></li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="home">
                                <p>{{$product->description}} </p>

                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="span9">
                        <br>
                        <h4 class="title">
                            <span class="pull-left"><span class="text"><strong>Sản Phần liên Quan</strong></span></span>
                            <span class="pull-right">
										<a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>
									</span>
                        </h4>
                        <div id="myCarousel-1" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="active item">
                                    <ul class="thumbnails listing-products">
                                        @foreach($listpro as $item)
                                            <li class="span3">
                                                <div class="product-box">
                                                    <span class="sale_tag"></span>
                                                    <a href="{{ url("/product-detail/".$item->id) }}"><img alt="" src="{{$item->image}}"></a><br/>
                                                    <a href="{{ url("/product-detail/".$item->id) }}" class="title">{{$item->name}}</a><br/>
                                                    <p class="price">{{$item->price}}.000đ</p>

                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul class="thumbnails listing-products">

                                        @foreach($listpro as $item)
                                            <li class="span3">
                                                <div class="product-box">
                                                    <span class="sale_tag"></span>
                                                    <a href="{{ url("/product-detail/".$item->id) }}"><img alt="" src="{{$item->image}}"></a><br/>
                                                    <a href="{{ url("/product-detail/".$item->id) }}" class="title">{{$item->name}}</a><br/>
                                                    <p class="price">{{$item->price}}.000đ</p>

                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
