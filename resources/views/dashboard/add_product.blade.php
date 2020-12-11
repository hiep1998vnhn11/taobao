@extends('layouts.dashboard-layout')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

@section('content')
    <div class="header center-block align-center">
        <h1 class="page-header">
            <strong>Thêm sản phẩm</strong>
        </h1>
    </div>
    <form method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="col-sm-4">
            <div class="containers">
                <div class="imageWrapper">
                    <img class="image" src="#" id="preview" alt="product image"/>
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
                    <input type="text" class="form-control item" name="product_name" id="product_name" placeholder="Tên SP">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control item" name="brand" id="brand" placeholder="Thương hiệu">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control item" name="number" id="count" placeholder="Số lượng">
                </div>
                <div class="form-group">
                    <input type="numeric" class="form-control item" name="price" id="price" placeholder="Giá">
                </div>
                <div class="form-group">
                    <input type="numeric" class="form-control item" name="link" id="taobao_link" placeholder="Link Taobao">
                </div>
                <div class="form-group">
                    <textarea class="form-control item" rows="4" name="description" placeholder="Description"></textarea>
                </div>
                <div class="form-group">
                    <label>Chọn chủng loại sản phầm:</label>

                    <select name="category">
                        <option value="2">Đồ Nam</option>
                        <option value="1">Đồ Nữ</option>
                        <option value="3">Đồ Thể Thao</option>
                        <option value="5">Giày</option>
                        <option value="4" selected>Túi Sách</option>
                    </select>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-info create-account center-btn">Thêm mới</button>
                </div>
            </div>
        </div>
    </form>

    <script type="text/javascript">
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

