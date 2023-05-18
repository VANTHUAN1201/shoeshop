@extends('template.index')
@section('content')
<div class="container-fluid">
    <table id="cart" class="table table-hover table-condensed" style="text-align: center;">
        <thead>
        <tr>
            <th>Hình ảnh</th>
            <th>Tên sản phẩm</th>
            <th style="width: 10%;">Giá</th>
            <th style="width: 10%;">Số lượng</th>
            <th style="width: 10%;">Thành tiền</th>
            <th style="width: 15%;">Hành động</th>
        </tr>
        </thead>
        <tbody>
        <tr >
            <td>
                <img src="assets/image/nike_phantom_gx2.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
            </td>
            <td style="text-align: left;">
            <a >
                            <strong>NIKE PHANTOM GX ACADEMY TF LUMINOUS - BARELY VOLT/GRIDIRON/BARELY GRAPE</strong>
                            <span>41</span><span>, vàng</span>
                        </a>
            </td>
            <td data-th="Price">200.000 đ</td>
            <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
            </td>
            <td data-th="Subtotal" class="text-center">200.000 đ</td>
            <td class="actions" data-th="">
                <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash" style="color: aliceblue;"></i></button>
            </td>
        </tr>
        <tr>
            <td>
                <img src="assets/image/nike_phantom_gx2.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
            </td>
            <td style="text-align: left;">
            <a >
                            <strong>NIKE PHANTOM GX ACADEMY TF LUMINOUS - BARELY VOLT/GRIDIRON/BARELY GRAPE</strong>
                            <span>41</span><span>, vàng</span>
                        </a>
            </td>
            <td data-th="Price">200.000 đ</td>
            <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
            </td>
            <td data-th="Subtotal" class="text-center">200.000 đ</td>
            <td class="actions" data-th="">
                <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash" style="color: aliceblue;"></i></button>
            </td>
        </tr>
        </tbody><tfoot>
    <!-- <tr class="visible-xs">
        <td class="text-center">
            <strong>Tổng 500.000 đ</strong>
        </td>
    </tr> -->
    <tr>
        <td colspan="2" ><a href="" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
        </td>
        <td class="hidden-xs"> </td>
        <td style="text-align: right; " colspan="2"  ><strong>Tổng tiền 500.000 đ</strong>
        </td>
        <td ><a href="" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a></td>
    </tr>
    </tfoot>
    </table>
</div>
@endsection