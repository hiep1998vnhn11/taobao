@extends('layouts.dashboard-layout')
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
                    <img class="image" src="http://digital-art-gallery.com/oid/0/1300x648_403_Knight_by_the_lake_2d_fantasy_knight_lake_warrior_picture_image_digital_art.jpg">
                </div>
            </div>
            <div class="text-center">
                <button class="file-upload">
                    <input type="file" class="file-input">Upload Image
                </button>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="registration-form">
                <div class="form-group">
                    <input type="text" class="form-control item" id="masp" placeholder="Mã SP">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control item" id="product_name" placeholder="Tên SP">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control item" id="branch" placeholder="Thương hiệu">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control item" id="count" placeholder="Số lượng">
                </div>
                <div class="form-group">
                    <input type="numeric" class="form-control item" id="price" placeholder="Giá">
                </div>
                <div class="form-group">
                    <input type="numeric" class="form-control item" id="taobao_link" placeholder="Link Taobao">
                </div>
                <div class="form-group">
                    <textarea class="form-control item" rows="4" placeholder="Description"></textarea>
                </div>
                <div class="form-group text-center">
                    <button type="button" class="btn btn-info create-account center-btn">Thêm mới</button>
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
            curElement.attr('src', e.target.result);
        };

        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });
</script>
@endsection

