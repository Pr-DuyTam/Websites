<?php
include("inc/top.php");
?>
<?php if(demhangtronggio()==0){ ?>
<h3 class="text-info">Giỏ hàng rỗng!</h3>
<p>Vui lòng chọn sản phẩm...</p>    
<?php 
} 
else{ 
?>
<h3 class="text-info">Giỏ hàng của bạn:</h3>
<form action="index.php">
<table class="table table-hover">
    <tr><th>Hình ảnh</th><th>Tên hàng</th><th>Đơn giá</th><th>Số lượng</th><th>Thành tiền</th></tr>
<?php foreach($giohang as $id => $mh):   ?>
    <tr>
        <td><img width="50" src="../<?php echo $mh["hinhanh"]; ?>"></td>
        <td><?php echo $mh["tenmathang"]; ?></td>
        <td><?php echo number_format($mh["giaban"]); ?>đ</td>
        <td><input type="number" name="mh[<?php echo $id; ?>]" value="<?php echo $mh["soluong"]; ?>"></td>
        <td><?php echo number_format($mh["thanhtien"]); ?>đ</td>
    </tr>
<?php endforeach; ?>
    <tr><td colspan="3"></td><td class="fw-bold">Tổng tiền</td><td class="text-danger fw-bold"><?php echo number_format(tinhtiengiohang()); ?>đ</td></tr>

</table>
<div class="row">
    <div class="col"><a href="index.php?action=xoagiohang">Xóa tất cả</a> (Xóa một mặt hàng nhập số lượng = 0)</div>
    <div class="col text-end">    
    <input type="hidden" name="action" value="capnhatgio">
    <input type="submit" class="btn btn-warning" value="Cập nhật">
    <a href="index.php?action=thanhtoan" class="btn btn-success">Thanh toán</a>
    </div>
</div>
</form>
<?php } // end if ?>
    <?php
        include("inc/bottom.php");
    ?>
<style>
    /* Container của giỏ hàng */
.container {
    margin-top: 40px;
    font-family: 'Roboto', sans-serif;
}

/* Tiêu đề giỏ hàng */
h3.text-info {
    font-size: 2rem;
    color: #3498db;
    text-align: center;
    margin-bottom: 30px;
}

/* Bảng giỏ hàng */
.table-hover {
    width: 100%;
    border-collapse: collapse;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    margin-bottom: 30px;
}

.table-hover th, .table-hover td {
    padding: 15px;
    text-align: center;
    font-size: 1rem;
    border: 1px solid #ddd;
}

.table-hover th {
    background-color: #f8f9fa;
    color: #333;
}

.table-hover td {
    background-color: #fff;
}

.table-hover img {
    max-width: 100px;
    height: auto;
    border-radius: 5px;
}

/* Hiệu ứng hover cho hàng trong bảng */
.table-hover tr:hover {
    background-color: #f1f1f1;
}

/* Tổng tiền */
.text-danger {
    font-size: 1.2rem;
    font-weight: bold;
    color: #e74c3c;
}

/* Cột hành động */
.row {
    margin-top: 20px;
}

.col {
    padding: 10px;
}

.text-end {
    text-align: right;
}

/* Nút cập nhật và thanh toán */
.btn {
    font-size: 1rem;
    padding: 12px 20px;
    border-radius: 5px;
}

.btn-warning {
    background-color: #f39c12;
    color: white;
    border: none;
}

.btn-warning:hover {
    background-color: #e67e22;
}

.btn-success {
    background-color: #2ecc71;
    color: white;
    border: none;
}

.btn-success:hover {
    background-color: #27ae60;
}

/* Liên kết xóa giỏ hàng */
a {
    font-size: 1rem;
    color: #e74c3c;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

</style>