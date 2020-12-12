@extends('layouts.dashboard-layout')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

@section('content')
    <div class="header center-block align-center">
        <h1 class="page-header">
            <strong>Cập nhật thông tin sản phẩm</strong>
        </h1>
    </div>
    <form method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="col-sm-4">
            <div class="containers">
                <div class="imageWrapper">
                    <img class="image" src="{{$item->image}}" id="preview" alt="product image"/>
                </div>
            </div>
            <div class="text-center">
                <button class="file-upload">
                    <input type="file" name="product_image" class="file-input">Upload Image
                </button>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="registration-form">
                <div class="form-group">
                    <input type="text" class="form-control item" name="product_name" id="product_name" value="{{$item->name}}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control item" name="brand" id="brand" value="{{$item->brand}}" placeholder="{{$item->brand}}">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control item" name="number" id="count" value="{{$item->number_in_shop}}" placeholder="{{$item->number_in_shop}}">
                </div>
                <div class="form-group">
                    <input type="numeric" class="form-control item" name="price" id="price" value="{{$item->price}}" placeholder="{{$item->price}}">
                </div>
                <div class="form-group">
                    <input type="numeric" class="form-control item" name="link" id="taobao_link" value="{{$item->link}}" placeholder="{{$item->link}}">
                </div>
                <div class="form-group">
                    <textarea type="text" class="form-control item" rows="4" name="description">{{$item->description}}</textarea>
                </div>
                <div class="form-group">
                    <label>Chọn chủng loại sản phầm:</label>

                    <select name="category" id="category">
                        <option value="2">Đồ Nam</option>
                        <option value="1">Đồ Nữ</option>
                        <option value="3">Đồ Thể Thao</option>
                        <option value="5">Giày</option>
                        <option value="4">Túi Sách</option>
                    </select>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-info create-account center-btn">Cập Nhật</button>
                </div>
            </div>
        </div>
    </form>

    <script type="text/javascript">
        document.getElementById("category").selectedIndex = {{$item->category_id}}

        $('.file-input').change(function(){
            var curElement = $(this).parent().parent().find('.image');
            console.log(curElement);
            var reader = new FileReader();

            reader.onload = function (e) {
                // get loaded data and render thumbnail.
                $('#preview').attr('src', e.target.result);
            };

            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });
    </script>
@endsection

