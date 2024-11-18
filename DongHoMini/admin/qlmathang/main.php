<?php include("../inc/top.php"); ?>

<h3>Quản lý mặt hàng</h3> 
<br>
<a href="index.php?action=them" class="btn btn-info">
	<i class="align-middle" data-feather="plus-circle"></i> 
	Thêm mặt hàng
</a>
<br> <br> 
<table class="table table-hover">
	<tr>
		<th>Tên mặt hàng</th>
		<th>Giá bán</th>
		<th>Số lượng</th>
		<th>Hình ảnh</th>		
		<th>Sửa</th>
		<th>Xóa</th>
	</tr>
	<?php
	foreach($mathang as $m):
	?>
	<tr>
		<td>
			<a href="index.php?action=chitiet&id=<?php echo $m["id"]; ?>">
			<?php echo $m["tenmathang"]; ?>
			</a>	
		</td>
		<td><?php echo $m["giaban"]; ?></td>
		<td><?php echo $m["soluongton"]; ?></td>
		<td>
			<a href="index.php?action=chitiet&id=<?php echo $m["id"]; ?>">
			<img src="../../<?php echo $m["hinhanh"]; ?>" width="80" class="img-thumbnail"></a>
		</td>
		<td><a class="btn btn-warning" href="index.php?action=sua&id=<?php echo $m["id"]; ?>"><i class="align-middle" data-feather="edit"></a></td>
		<td><a class="btn btn-danger" href="index.php?action=xoa&id=<?php echo $m["id"]; ?>"><i class="align-middle" data-feather="trash-2"></a></td>
	</tr>
	<?php
	endforeach;
	?>
</table>

<?php include("../inc/bottom.php"); ?>
<style>
	/* Tiêu đề */
h3 {
    font-size: 2rem;
    font-weight: bold;
    color: #1d4ed8;
    text-align: center;
    margin-bottom: 20px;
    text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
}

/* Nút Thêm mặt hàng */
.btn-info {
    display: inline-flex;
    align-items: center;
    background-color: #2563eb;
    color: white;
    padding: 10px 20px;
    border-radius: 8px;
    font-size: 1rem;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease-in-out;
}

.btn-info i {
    margin-right: 8px;
}

.btn-info:hover {
    background-color: #1e40af;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    transform: scale(1.05);
}

/* Bảng */
.table-hover {
    width: 100%;
    border-collapse: collapse;
    background-color: #f8fafc;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
}

.table-hover th {
    background-color: #1d4ed8;
    color: #ffffff;
    padding: 12px;
    text-align: center;
    font-weight: bold;
    text-transform: uppercase;
}

.table-hover td {
    padding: 10px 15px;
    text-align: center;
    border-bottom: 1px solid #e2e8f0;
    color: #475569;
}

/* Hover hiệu ứng cho hàng */
.table-hover tr:hover {
    background-color: #e0f2fe;
    transition: background-color 0.3s ease;
}

/* Hình ảnh */
.img-thumbnail {
    border: 2px solid #e5e7eb;
    border-radius: 6px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.img-thumbnail:hover {
    transform: scale(1.1);
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
}

/* Nút sửa và xóa */
.btn-warning {
    background-color: #f59e0b;
    color: white;
    border-radius: 6px;
    padding: 8px;
    transition: all 0.3s ease-in-out;
}

.btn-warning:hover {
    background-color: #d97706;
    transform: scale(1.1);
}

.btn-danger {
    background-color: #ef4444;
    color: white;
    border-radius: 6px;
    padding: 8px;
    transition: all 0.3s ease-in-out;
}

.btn-danger:hover {
    background-color: #dc2626;
    transform: scale(1.1);
}

/* Liên kết tên mặt hàng */
.table-hover a {
    text-decoration: none;
    color: #1d4ed8;
    font-weight: bold;
    transition: color 0.3s ease;
}

.table-hover a:hover {
    color: #1e40af;
    text-decoration: underline;
}

</style>
