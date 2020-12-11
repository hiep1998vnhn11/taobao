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
                                            <td>Status Status Status</td>
                                            <td>
                                                <button type="button" class="btn btn-edit" value="Edit">
                                                    <span class="glyphicon glyphicon-remove"></span>
                                                </button>
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
