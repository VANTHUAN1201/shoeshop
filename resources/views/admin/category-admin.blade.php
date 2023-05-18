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
                    <a href="/admin/product/add" class="btn btn-primary">Thêm danh mục</a>
                </div>
                <!-- /.category-header -->
                <div class="category-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên Danh mục</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Nike</td>
                            <td>xóa - sửa</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Adidas</td>
                            <td>xóa - sửa</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Phantom</td>
                            <td>xóa - sửa</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Wika</td>
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