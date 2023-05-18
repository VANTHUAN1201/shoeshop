@extends('template.index')
@section('content')
<div class="detail-product-container">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="#">Nike</a></li>
        <li class="breadcrumb-item active" aria-current="page">NIKE PHANTOM GX ACADEMY TF LUMINOUS - BARELY VOLT/GRIDIRON/BARELY GRAPE</li>
    </ol>
    </nav>
    <div class="main-detail">
        <div class="detail-left">
            <div class="list-img-detail">
                <button>&and;</button>
                <img src="assets/image/nike_phantom_gx1.jpg" alt="">
                <img src="assets/image/nike_phantom_gx1.jpg" alt="">
                <img src="assets/image/nike_phantom_gx1.jpg" alt="">
                <img src="assets/image/nike_phantom_gx1.jpg" alt="">
                <button>&or;</button>
            </div>
            <img src="assets/image/nike_phantom_gx1.jpg" alt="" class="root-image">
        </div>
        <div class="detail-right">
            <h3>NIKE PHANTOM GX ACADEMY TF LUMINOUS - BARELY VOLT/GRIDIRON/BARELY GRAPE</h3>
            <p>Giá tiền:400.000 VNĐ</p>
            <p>Nhà cung cấp: Nike</p>
            <p>Màu</p>
            <div style="display:flex;">
                <button type="button" id="trang" class="btn btn-outline-dark">Trắng</button>
                <button type="button" id="xanh" class="btn btn-outline-dark">Xanh</button>
                <button type="button" id="do" class="btn btn-outline-dark">Đỏ</button>
            </div>

            <p>Kích thước</p>
            <div style="display:flex;">
                <Button type="button" class="btn btn-outline-dark">39</Button>
                <Button type="button" class="btn btn-outline-dark">40</Button>
                <Button type="button" class="btn btn-outline-dark">41</Button>
                <Button type="button" class="btn btn-outline-dark">42</Button> 
            </div>
            <br>
            <div style="display:flex; width:35%; justify-content:space-between">
                <Button type="button" class="btn btn-dark" >Mua ngay</Button>
                <a name="" id="" class="btn btn-primary" href="/cart" >Thêm giỏ hàng</a>
                <!-- <Button type="button" class="btn btn-danger">Thêm giỏ hàng</Button> -->
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('.btn').click(function(){
            id = this.attr('id')
            var cl_btn = document.getElementByClassName('.btn')
            cl_btn.removeClass('clicked')
            var btn = document.getElementById(id)
            btn.addClass('clicked')
        })
    })
</script>
@endsection