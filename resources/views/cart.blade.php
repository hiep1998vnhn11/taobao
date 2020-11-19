@extends('layouts.app')

@section('content')
    <section class="header_text sub">
        <img class="pageBanner" src="/images/pageBanner.png" alt="New products">
        <h4><span>Shopping Cart</span></h4>
    </section>
    <section class="main-content">
        <div class="row">
            <div class="span9">
                <h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
                @if($items_order->count() > 0)
                    {{$priceTotal = 0}}
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Remove</th>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items_order as $item)
                            <tr>
                                <td><input type="checkbox" value="option1"></td>
                                <td><a href="product_detail.html"><img alt="" src="themes/images/ladies/9.jpg"></a></td>
                                <td>{{$item->name}}</td>
                                <td><input type="text" placeholder={{$item->number}} class="input-mini"></td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->price*$item->number}}</td>
                            </tr>
                            {{$priceTotal = $priceTotal + $item->price*$item->number}}
                        @endforeach
                        </tbody>
                    </table>
                    <p class="cart-total right">
                        <strong>Sub-Total</strong>: {{$priceTotal}}<br>
                        <strong>VAT (10%)</strong>: {{$priceTotal*0.1}}<br>
                        <strong>Total</strong>: {{$priceTotal*1.1}}<br>
                    </p>
                @else
                    <h2>Hiện tại bạn chưa có món hàng nào. Hãy shopping đi nhé!!!</h2>
                @endif
                <hr/>
                <p class="buttons center">
                    <button class="btn" type="button">Update</button>
                    <button class="btn" type="button">Continue</button>
                    <button class="btn btn-inverse" type="submit" id="checkout">Checkout</button>
                </p>
            </div>
            <div class="span3 col">
                <div class="block">
                    <h4 class="title">
                        <span class="pull-left"><span class="text">Randomize</span></span>
                        <span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a
                                class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
                    </h4>
                    <div id="myCarousel" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="active item">
                                <ul class="thumbnails listing-products">
                                    <li class="span3">
                                        <div class="product-box">
                                            <span class="sale_tag"></span>
                                            <a href="product_detail.html"><img alt="" src="themes/images/ladies/2.jpg"></a><br/>
                                            <a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
                                            <a href="#" class="category">Suspendisse aliquet</a>
                                            <p class="price">$261</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul class="thumbnails listing-products">
                                    <li class="span3">
                                        <div class="product-box">
                                            <a href="product_detail.html"><img alt="" src="themes/images/ladies/4.jpg"></a><br/>
                                            <a href="product_detail.html" class="title">Tempor sem sodales</a><br/>
                                            <a href="#" class="category">Urna nec lectus mollis</a>
                                            <p class="price">$134</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
