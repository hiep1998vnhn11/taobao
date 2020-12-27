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
        <img class="pageBanner" src="../themes/images/pageBanner.png" alt="New products" >
        <h4><span>Mô tả sản phẩm</span></h4>
    </section>
    <section class="main-content">
        <div class="row">
            <div class="span9">
                <div class="row">
                    <div class="span4">
                        <!-- <a href="#" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="{{$product->image}}"></a> -->
                        
                        <!-- Slide show images -->
                        <div class="slideshow-container">

                            <div class="mySlides">
                                <img src="{{$product->image}}" style="width:100% ;height: 300px">
                            </div>

                            @foreach($listImage as $image)
                                <div class="mySlides">
                                    <img src="{{$image->url}}" style="width:100% ;height: 300px">
                                </div>
                                            
                            @endforeach

                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        </div>
                        
                    </div>
                    <div class="span5">
                        <h4><strong>{{$product->name}}</strong></h4>
                    </div>
                    <div class="span5">
                        <address>
                            <strong>Thương Hiệu:</strong> <span>{{$product->brand}}</span><br>
                            <strong>Điểm đánh giá:</strong> <span>{{$product->star}}</span><br>
                            <strong>Số lượng còn lại trong shop: </strong><span>{{$product->number_in_shop}}</span><br>
                            <strong><a href="{{$product->link}}">Taobao Link</a></strong> <br>
                        </address>
                        <h4><strong>Giá: {{$product->price}}.000</strong></h4>
                        <div id="message">
                        @if(Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif
                        </div>
                    </div>
                    <div class="span5">
                        <form class="form-inline" action="/addToCart" method="post">
                            @csrf
                            <input type="hidden" name="productId" value={{$product->id}}/>
                            <label>Số lượng:</label>
                            <input type="text" class="span1" placeholder="1" name="quality" value="1" id="quality_input">
                            <button class="btn btn-inverse" type="submit">Mua ngay</button>
                        </form>
                        <button class="btn btn-default btn-block" onclick="addItemOrder({{$product->id}})">Giỏ hàng</button>
                    </div>
                </div>
                <br/>
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
                    <div class="">
                        <br>
                        <h4 class="title">
                            <span class="pull-left"><span class="text"><strong>SET ĐỒ GỢI Ý</strong></span></span>
                            <span class="pull-right">
										<a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>
									</span>
                        </h4>
                        <div id="myCarousel-1" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="active item">
                                    <ul class="thumbnails listing-products">
                                        @foreach($set as $item)
                                            <li class="span3">
                                                <div class="product-box" style="height: 370px">
                                                    <span class="sale_tag"></span>
                                                    <a href="{{ url("/product-detail/".$item->id) }}"><img alt="" src="{{$item->image}}" style="height: 250px; width: 200px"></a><br/>
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
                                                <div class="product-box" style="height: 370px">
                                                    <span class="sale_tag"></span>
                                                    <a href="{{ url("/product-detail/".$item->id) }}"><img alt="" src="{{$item->image}}" style="height: 250px; width: 200px"></a><br/>
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
        <script type="text/javascript">
            function addItemOrder(itemId) {
                    $.ajax({
                        type: 'post',
                        url: '{{url('addItem')}}',
                        data: ({
                            _token: $('meta[name="csrf-token"]').attr('content'),
                            'id': itemId,
                            'quality': $("#quality_input").val()
                        }),
                        success: function (data) {
                            $("#message").html(data.message);
                        }
                    });
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
        <script>
            var slideIndex = 1;
                showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {slideIndex = 1}    
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
            }
        </script>
    </section>
@endsection
