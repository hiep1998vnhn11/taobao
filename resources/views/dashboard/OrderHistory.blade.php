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
                                    <th>Mã Hóa Đơn</th>
                                    <th>Địa điểm</th>
                                    <th>Trạng thái</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($paginator as $item)
                                        <tr>
                                            <td>{{$item->updated_at}}</td>
                                            <td>{{$item->username}}</td>
                                            <td>{{$item->id}}</td>
                                            <td>Location Location Location</td>
                                            <td>{{$item->status}}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Trạng thái
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <div><a class="dropdown-item" href="/status1/{{$item->id}}">Chờ lấy hàng</a></div>
                                                        <div><a class="dropdown-item" href="/status2/{{$item->id}}">Đang giao</a></div>
                                                        <div><a class="dropdown-item" href="/status3/{{$item->id}}">Đã nhận hàng</a></div>
                                                    </div>
                                                </div>
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
        <!-- /. ROW  -->
        <footer>
        </footer>
    </div>
    <!-- /. PAGE INNER  -->
@endsection
