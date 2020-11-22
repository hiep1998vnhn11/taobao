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
        <img class="pageBanner" src="/images/pageBanner.png" alt="New products">
        <h4><span>Shopping Cart</span></h4>
    </section>
    <section class="main-content">
        <div class="row">
            <div class="span11">
                <h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
                @if($items_order->count() > 0)

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Total</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody id="tblist">
                        @foreach($items_order as $key=>$item)
                            <tr>
                                <td>{{$key}}</td>
                                <td><a href="{{ url("/product-detail/".$item->id) }}"><img alt="" src="{{$item->image}}" style="max-height: 100px; max-width: 100px;"></a></td>
                                <td>{{$item->name}}</td>
                                <td><input type="text" value={{$item->number}} class="input-mini" onchange="update_quality({{$item->id}})" id="quality-item{{$item->id}}"></td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->price*$item->number}}</td>
                                <td>
                                    <button type="button" class="btn btn-danger" value="Delete" id="item_del"
                                            onclick="del_item({{$item->id}})"><span
                                            class="glyphicon glyphicon-remove"></span></button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <p class="cart-total right" id="total">
                        <strong>Sub-Total</strong>: {{$total_paid}}<br>
                        <strong>VAT (10%)</strong>: {{$total_paid*0.1}}<br>
                        <strong>Total</strong>: {{$total_paid*1.1}}<br>
                    </p>
                @else
                    <h2>Hiện tại bạn chưa có món hàng nào. Hãy shopping đi nhé!!!</h2>
                @endif
                <hr/>
                <p class="buttons center">
                    <button class="btn" type="button" onclick="btn_update_click()">Update</button>
                    <button class="btn" type="button" onclick="window.location.href='/'">Continue</button>
                    <button class="btn btn-inverse" type="submit" id="checkout"
                            onclick="window.location.href='/checkout'">Checkout
                    </button>
                </p>
            </div>
        </div>
        <script type="text/javascript">
            function del_item(itemId) {
                console.log(itemId)
                var result = confirm("Are you sure to delete this item?");
                if (result) {
                    $.ajax({
                        type: 'delete',
                        url: '{{url('deleteItem')}}',
                        data: ({
                            _token: $('meta[name="csrf-token"]').attr('content'),
                            'id': itemId
                        }),
                        success: function (data) {
                            console.log(data);
                            $('#tblist').html(data.list)
                            $('#total').html(data.total)
                        }
                    });
                }
            }

            var list_change = []
            function update_quality(itemId) {
                var string = "quality-item" + itemId
                var quality = document.getElementById(string).value
                var changed_status = 0;
                for(let item of list_change)
                    if(item.id === itemId) {
                        changed_status = 1
                        item.quality = quality
                    }
                if(changed_status === 0)
                    list_change.push({id: itemId, quality: quality})
            }
            function btn_update_click() {
                $.ajax({
                    type: 'post',
                    url: '{{url('updateItem')}}',
                    data: ({
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        listItemUpdate: JSON.stringify(list_change)
                    }),
                    success: function (data) {
                        console.log(data);
                        $('#tblist').html(data.list)
                        $('#total').html(data.total)
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

