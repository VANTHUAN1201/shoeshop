@extends('admin.template.main-layout-admin')
@section('content-admin')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Thêm sản phẩm</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="display:flex; justify-content:space-evenly;">
                        <div>
                            <div>
                                <p style="margin:0">Tên sản Phẩm</p>
                                <input type="text" name="" value="" placeholder="Tên sản phẩm">
                            </div>
                            <br>
                            <div>
                                <p style="margin:0">Giá Bán</p>
                                <input type="text" name="" value="" placeholder="Giá Bán">
                            </div>
                            <br>
                            <div>
                                <p style="margin:0">Hãng</p>
                                <input type="text" name="" value="" placeholder="Hãng">
                            </div>
                            <br>
                        </div>
                        <div>
                            <div>
                                <p style="margin:0">Màu</p>
                                <input type="text" name="" value="" placeholder="Màu">
                            </div>
                            <br>
                            <div>
                                <p style="margin:0">Size</p>
                                <input type="text" name="" value="" placeholder="Size">
                            </div>
                            <br>
                            <div>
                                <p style="margin:0">Số lượng</p>
                                <input type="text" name="" value="" placeholder="Số lượng">
                            </div>
                        </div>
                    </div>
                    <div style="display:flex; justify-content:space-evenly; width:80%">
                        <button class="btn btn-danger" style="width:150px">Hủy</button>
                        <button class="btn btn-primary" style="width:150px">Lưu</button>
                    </div>
                    <br>
                    <!-- /.card-body -->
                </div>
            <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection