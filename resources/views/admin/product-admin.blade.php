@extends('admin.template.main-layout-admin')
@section('content-admin')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header" style="display:flex; justify-content:space-between;width:100%">
                    <h2 class="card-title">Sản phẩm</h2>
                    <div></div>
                    <a href="/admin/product/add" class="btn btn-primary">Thêm sản phẩm</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên SP</th>
                            <th>Hình Ảnh</th>
                            <th>Danh Mục</th>
                            <th>Size</th>
                            <th>Màu</th>
                            <th>Số Lượng</th>
                            <th>Giá</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>NIKE PHANTOM GX ACADEMY TF LUMINOUS - BARELY VOLT/GRIDIRON/BARELY GRAPE</td>
                            <td><img src="http://127.0.0.1:8000/assets/image/nike_air_academy9_1.jpg" alt="" style="width: 50%;height: 50%;">
                            </td>
                            <td>Nike</td>
                            <td>37</td>
                            <td>Trắng</td>
                            <td>5</td>
                            <td>450.000</td>
                            <td>xóa - sửa</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>NIKE PHANTOM GX ACADEMY TF LUMINOUS - BARELY VOLT/GRIDIRON/BARELY GRAPE</td>
                            <td><img src="http://127.0.0.1:8000/assets/image/nike_air_academy9_1.jpg" alt="" style="width: 50%;height: 50%;">
                            </td>
                            <td>Nike</td>
                            <td>37</td>
                            <td>Trắng</td>
                            <td>5</td>
                            <td>450.000</td>
                            <td>xóa - sửa</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>NIKE PHANTOM GX ACADEMY TF LUMINOUS - BARELY VOLT/GRIDIRON/BARELY GRAPE</td>
                            <td><img src="http://127.0.0.1:8000/assets/image/nike_air_academy9_1.jpg" alt="" style="width: 50%;height: 50%;">
                            </td>
                            <td>Nike</td>
                            <td>37</td>
                            <td>Trắng</td>
                            <td>5</td>
                            <td>450.000</td>
                            <td>xóa - sửa</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>NIKE PHANTOM GX ACADEMY TF LUMINOUS - BARELY VOLT/GRIDIRON/BARELY GRAPE</td>
                            <td><img src="http://127.0.0.1:8000/assets/image/nike_air_academy9_1.jpg" alt="" style="width: 50%;height: 50%;">
                            </td>
                            <td>Nike</td>
                            <td>37</td>
                            <td>Trắng</td>
                            <td>5</td>
                            <td>450.000</td>
                            <td>xóa - sửa</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>NIKE PHANTOM GX ACADEMY TF LUMINOUS - BARELY VOLT/GRIDIRON/BARELY GRAPE</td>
                            <td><img src="http://127.0.0.1:8000/assets/image/nike_air_academy9_1.jpg" alt="" style="width: 50%;height: 50%;">
                            </td>
                            <td>Nike</td>
                            <td>37</td>
                            <td>Trắng</td>
                            <td>5</td>
                            <td>450.000</td>
                            <td>xóa - sửa</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>NIKE PHANTOM GX ACADEMY TF LUMINOUS - BARELY VOLT/GRIDIRON/BARELY GRAPE</td>
                            <td><img src="http://127.0.0.1:8000/assets/image/nike_air_academy9_1.jpg" alt="" style="width: 50%;height: 50%;">
                            </td>
                            <td>Nike</td>
                            <td>37</td>
                            <td>Trắng</td>
                            <td>5</td>
                            <td>450.000</td>
                            <td>xóa - sửa</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>NIKE PHANTOM GX ACADEMY TF LUMINOUS - BARELY VOLT/GRIDIRON/BARELY GRAPE</td>
                            <td><img src="http://127.0.0.1:8000/assets/image/nike_air_academy9_1.jpg" alt="" style="width: 50%;height: 50%;">
                            </td>
                            <td>Nike</td>
                            <td>37</td>
                            <td>Trắng</td>
                            <td>5</td>
                            <td>450.000</td>
                            <td>xóa - sửa</td>
                        </tr>
                    </tbody>
                </table>
                </div>
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