@extends('layouts.dashboard-layout')
@section('content')
    <div class="header center">
        <h1 class="page-header center-block align-center">
            <strong>PRODUCTS</strong>
        </h1>
    </div>
    <div id="page-inner">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="board">
                    <div class="panel panel-primary">
                        <div class="number">
                            <h3>
                                <h3>44,023</h3>
                                <small>Tổng giá trị</small>
                            </h3>
                        </div>
                        <div class="icon">
                            <i class="fa fa-eye fa-5x red"></i>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="board">
                    <div class="panel panel-primary">
                        <div class="number">
                            <h3>
                                <h3>32,850</h3>
                                <small>Đã bán</small>
                            </h3>
                        </div>
                        <div class="icon">
                            <i class="fa fa-shopping-cart fa-5x blue"></i>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="board">
                    <div class="panel panel-primary">
                        <div class="number">
                            <h3>
                                <h3>56,150</h3>
                                <small>Tồn kho</small>
                            </h3>
                        </div>
                        <div class="icon">
                            <i class="fa fa-comments fa-5x green"></i>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div>
                    <button class="btn btn-info left-bar" onclick="window.location.href='/addProduct'">
                        <span class="glyphicon glyphicon-plus"></span> Thêm sản phẩm
                    </button>
                </div>
                <br>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Mã SP</th>
                                    <th>Tên SP</th>
                                    <th>Đã bán</th>
                                    <th>Hàng tồn</th>
                                    <th>Bên bán</th>
                                    <th>Sửa thông tin</th>
                                    <th>Xóa</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($paginator as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td><a href="/product-detail/{{$item->id}}">{{$item->name}}</a></td>
                                        <td>000</td>
                                        <td>{{$item->number_in_shop}}</td>
                                        <td>{{$item->link}}</td>
                                        <td>
                                            <button type="button" class="btn btn-info" value="Edit">
                                                <span class="glyphicon glyphicon-edit"></span>
                                            </button>
                                        </td>
                                        <td>
                                            <meta name="csrf-token" content="{{ csrf_token() }}">
                                            <button type="button" class="btn btn-danger" value="Delete" id="item_del"
                                                    onclick="del_item({{$item->id}})"><span
                                                    class="glyphicon glyphicon-remove"></span></button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination pagination-small pagination-centered">
                                {{ $paginator ->links('vendor.pagination.default')}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <footer>
        </footer>
    </div>
    <script type="text/javascript">
        function del_item(itemId) {
            var token = $("meta[name='csrf-token']").attr("content");
            var result = confirm("Bạn có muốn xóa sản phẩm này?");
            if (result) {
                $.ajax({
                    type: 'DELETE',
                    url: "dashboard/deleteItem/"+itemId,
                    data: ({
                        "_token": token,
                        "id": itemId,
                    }),
                    success: function () {
                        alert("Sản phẩm id " + itemId + " đã được xóa thành công!");
                        window.location.reload();
                    },
                    error: function (){
                        alert("Sản phẩm id "+ itemId+ " hiện nằm trong 1 order, chưa thể xóa!");
                    }
                });
            }
        }
    </script>
@endsection
