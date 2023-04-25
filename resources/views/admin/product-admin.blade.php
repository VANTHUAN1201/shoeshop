@extends('admin.template.main-layout-admin')
@section('content-admin')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Sản phẩm</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Tên SP</th>
                            <th>Số Lượng</th>
                            <th>Thể Loại</th>
                            <th>Danh Mục</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Giày đinh</td>
                            <td>10</td>
                            <td>Giày thể thao</td>
                            <td>Danh mục</td>
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