<?php include("../inc/top.php"); ?>

<h4 class="text-info">Danh sách danh mục</h4> 
<table class="table table-hover">
	<tr><th>ID</th><th>Tên danh mục</th><th>Sửa</th><th>Xóa</th></tr>
	<?php 
	foreach ($danhmuc as $d) : 
		if($d["id"] == $idsua){ // hiển thị form
	?>
		<tr>
		<form method="post">
			<input type="hidden" name="action" value="capnhat">
			<input type="hidden" name="id" value="<?php echo $d["id"]; ?>">
			<td><?php echo $d["id"]; ?></td>
			<td><input class="form-control" name="ten" type="text" value="<?php echo $d["tendanhmuc"]; ?>"></td>
			<td><input class="btn btn-success" type="submit" value="Lưu"></td>
		</form>
			<td><a href="index.php?action=xoa&id=<?php echo $d["id"]; ?>" class="btn btn-danger">Xóa</a></td>
		</tr>

	<?php 
		} // end if 
		else {
	?>
		<tr>
			<td><?php echo $d["id"]; ?></td>
			<td><?php echo $d["tendanhmuc"]; ?></td>
			<td><a href="index.php?action=sua&id=<?php echo $d["id"]; ?>" class="btn btn-warning">Sửa</a></td>
			<td><a href="index.php?action=xoa&id=<?php echo $d["id"]; ?>" class="btn btn-danger">Xóa</a></td>
		</tr>
	<?php 
		} // end else
	endforeach; 
	?>
</table>

<h4><a class="text-decoration-none text-info" data-bs-toggle="collapse" data-bs-target="#demo">Thêm mới</a><h4>

<div id="demo" class="collapse">
	 
	<form method="post"> 
		<input type="hidden" name="action" value="them">
	<div class="row">	
		<div class="col">
			<input type="text" class="form-control" name="ten" placeholder="Nhập tên danh mục">
		</div>
		<div class="col">
			<input type="submit" class="btn btn-info" value="Lưu">
		</div>
		<div class="col"></div>
	</div>
	</form>
</div>


<?php include("../inc/bottom.php"); ?>
<style>
	/* Style cho tiêu đề */


/* Style cho bảng */
.table-hover {
    width: 100%;
    border-collapse: collapse;
    background-color: #f9fafb;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
}

.table-hover th {
    background-color: #2563eb;
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

/* Style cho nút */
.btn {
    border-radius: 6px;
    padding: 8px 12px;
    font-size: 0.9rem;
    text-decoration: none;
    color: white;
    transition: all 0.3s ease-in-out;
}

/* Nút sửa */
.btn-warning {
    background-color: #f59e0b;
}

.btn-warning:hover {
    background-color: #d97706;
    transform: scale(1.1);
}

/* Nút xóa */
.btn-danger {
    background-color: #ef4444;
}

.btn-danger:hover {
    background-color: #dc2626;
    transform: scale(1.1);
}

/* Nút lưu */
.btn-success {
    background-color: #10b981;
}

.btn-success:hover {
    background-color: #059669;
    transform: scale(1.1);
}

/* Form input */
.form-control {
    border: 1px solid #d1d5db;
    border-radius: 6px;
    padding: 8px 12px;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
    width: 100%;
}

.form-control:focus {
    outline: none;
    border-color: #2563eb;
    box-shadow: 0 0 5px rgba(37, 99, 235, 0.5);
    transition: all 0.2s ease;
}

</style>
