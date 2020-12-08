@extends('layouts.dashboard-layout')
@section('content')
    <div class="header center-block">
        <h1 class="page-header">
            <strong>ORDERS</strong>
        </h1>
    </div>
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Ngày đặt</th>
                                    <th>Tên KH</th>
                                    <th>Mã SP</th>
                                    <th>Số lượng</th>
                                    <th>Địa điểm</th>
                                    <th>Trạng thái</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>12/3/2020</td>
                                    <td>Nguyen Hieu</td>
                                    <td>234</td>
                                    <td>4</td>
                                    <td>Giai Phóng, Hoang Mai, Ha Noi</td>
                                    <td>Chờ lấy hàng</td>
                                    <td>
                                        <button type="button" class="btn btn-edit" value="Edit">
                                            <span class="glyphicon glyphicon-remove"></span>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12/3/2020</td>
                                    <td>Nguyen Hieu</td>
                                    <td>234</td>
                                    <td>4</td>
                                    <td>Giai Phóng, Hoang Mai, Ha Noi</td>
                                    <td>Chờ lấy hàng</td>
                                    <td>
                                        <button type="button" class="btn btn-edit" value="Edit">
                                            <span class="glyphicon glyphicon-remove"></span>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12/3/2020</td>
                                    <td>Nguyen Hieu</td>
                                    <td>234</td>
                                    <td>4</td>
                                    <td>Giai Phóng, Hoang Mai, Ha Noi</td>
                                    <td>Chờ lấy hàng</td>
                                    <td>
                                        <button type="button" class="btn btn-edit" value="Edit">
                                            <span class="glyphicon glyphicon-remove"></span>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12/3/2020</td>
                                    <td>Nguyen Hieu</td>
                                    <td>234</td>
                                    <td>4</td>
                                    <td>Giai Phóng, Hoang Mai, Ha Noi</td>
                                    <td>Chờ lấy hàng</td>
                                    <td>
                                        <button type="button" class="btn btn-edit" value="Edit">
                                            <span class="glyphicon glyphicon-remove"></span>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /. ROW  -->
        <footer>
        </footer>
    </div>
    <!-- /. PAGE INNER  -->
@endsection
