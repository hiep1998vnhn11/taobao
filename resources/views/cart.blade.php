@extends('layouts.app')

@section('content')
    <section class="header_text sub">
        <img class="pageBanner" src="/images/pageBanner.png" alt="New products">
        <h4><span>Shopping Cart</span></h4>
    </section>
    <section class="main-content">
        <div class="row">
            <div class="span11">
                <h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
                @if($items_order->count() > 0)
                    {{$priceTotal = 0}}
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
                        <tbody>
                        {{$count = 1}}
                        @foreach($items_order as $item)
                            <tr id="item{{$item->id}}">
                                <td>{{$count}}</td>
                                <td><a href="product_detail.html"><img alt="" src="themes/images/ladies/9.jpg"></a></td>
                                <td>{{$item->name}}</td>
                                <td><input type="text" placeholder={{$item->number}} class="input-mini"></td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->price*$item->number}}</td>
                                <td>
                                    <button type="button" class="btn btn-danger" value="Delete" id="item_del"
                                            onclick="del_item({{$item->id}}, {{$item->order_id}})"><span
                                            class="glyphicon glyphicon-remove"></span></button>
                                </td>
                            </tr>
                            {{$priceTotal = $priceTotal + $item->price*$item->number}}
                            {{$count = $count+1}}
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
                    <button class="btn" type="button" onclick="window.location.href='/updateOrder'">Update</button>
                    <button class="btn" type="button" onclick="window.location.href='/products'">Continue</button>
                    <button class="btn btn-inverse" type="submit" id="checkout"
                            onclick="window.location.href='/checkout'">Checkout
                    </button>
                </p>
            </div>
        </div>
        <script type="text/javascript">
            function del_item(item) {
                console.log(item)
                var result = confirm("Are you sure to delete this item?");
                if (result) {
                    $.ajax({
                        type: 'delete',
                        url: '{{url('')}}',
                        data: ({
                            _token: $('meta[name="csrf-token"]').attr('content'),
                            'id': item
                        }),
                        // success: function (data) {
                        //     $('#user').html(data.users);
                        //     $('#post').html(data.posts);
                        // }
                    });
                }
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
    </section>
@endsection

