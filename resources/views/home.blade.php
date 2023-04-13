@extends('template.index')
@section('content')
<div class="container-fluid" style="padding:10px">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="900">
                <img src="assets/image/banner4.jpg" class="d-block w-100" alt="..." style=" max-height: 938px;">
            </div>
            <div class="carousel-item" data-bs-interval="900">
                <img src="assets/image/banner2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="900">
                <img src="assets/image/banner3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/image/banner4.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div>
    <div class="container-fluid">
        <div>
            <h1 style="color: red; text-align:center;">Sản phẩm hot</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-4 ">
            <div class="col">
                <div class="card">
                    <img src="assets/image/nike_phantom_gx2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="" class="card-title">NIKE PHANTOM GX ACADEMY TF LUMINOUS - BARELY VOLT/GRIDIRON/BARELY GRAPE</a><br>
                        <a href="">350.000đ</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/image/nike_phantom_gx2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href=""class="card-title">NIKE PHANTOM GX ACADEMY TF LUMINOUS - BARELY VOLT/GRIDIRON/BARELY GRAPE</a><br>
                        <a href="">350.000đ</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/image/nike_phantom_gx2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href=""class="card-title">NIKE PHANTOM GX ACADEMY TF LUMINOUS - BARELY VOLT/GRIDIRON/BARELY GRAPE </a><br>
                        <a href="">350.000đ</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/image/nike_phantom_gx2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="" class="card-title">NIKE PHANTOM GX ACADEMY TF LUMINOUS - BARELY VOLT/GRIDIRON/BARELY GRAPE</a><br>
                        <a href="">350.000đ</a>
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align:right">
            <a href="">Xem thêm</a>
        </div>
    </div>
</div>
<div>
    <div class="container-fluid">
        <div>
            <h1 style="color: red; text-align:center;">Sản phẩm mới</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-4 ">
            <div class="col">
                <div class="card">
                    <img src="assets/image/nike_phantom_gx2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="" class="card-title">NIKE PHANTOM GX ACADEMY TF LUMINOUS - BARELY VOLT/GRIDIRON/BARELY GRAPE</a><br>
                        <a href="">350.000đ</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/image/nike_phantom_gx2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href=""class="card-title">NIKE PHANTOM GX ACADEMY TF LUMINOUS - BARELY VOLT/GRIDIRON/BARELY GRAPE </a><br>
                        <a href="">350.000đ</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/image/nike_phantom_gx2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href=""class="card-title">NIKE PHANTOM GX ACADEMY TF LUMINOUS - BARELY VOLT/GRIDIRON/BARELY GRAPE </a><br>
                        <a href="">350.000đ</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/image/nike_phantom_gx2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="" class="card-title">NIKE PHANTOM GX ACADEMY TF LUMINOUS - BARELY VOLT/GRIDIRON/BARELY GRAPE</a><br>
                        <a href="">350.000đ</a>
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align:right">
            <a href="">Xem thêm</a>
        </div>
    </div>
</div>
@endsection