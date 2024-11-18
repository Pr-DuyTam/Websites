<?php include("inc/top.php"); ?>

<div class="container">    
  <div class="row"> 
    <h3>Vui lòng nhập đầy đủ thông tin</h3>
	<div class="col-sm-6">
	<h4 class="text-info">Thông tin khách hàng</h4>
	<?php 
	if(isset($_SESSION["khachhang"])){
	?>
	<form method="post" action="index.php">
		<input type="hidden" name="txtid" value="<?php echo $_SESSION["khachhang"]["id"]; ?>">
		<input type="hidden" name="action" value="luudonhang">
		<div class="my-3">
			<label>Email</label>
			<input type="email" class="form-control" name="txtemail" value="<?php echo $_SESSION["khachhang"]["email"]; ?>" disabled>
		</div>
		<div class="my-3">
			<label>Họ tên</label>
			<input type="text" class="form-control" name="txthoten" value="<?php echo $_SESSION["khachhang"]["hoten"]; ?>" disabled>
		</div>
		<div class="my-3">
			<label>Số điện thoại</label>
			<input type="number" class="form-control" name="txtsodienthoai" value="<?php echo $_SESSION["khachhang"]["sodienthoai"] ?>" disabled>
		</div>
		<div class="my-3">
			<label>Địa chỉ giao hàng</label>
			<textarea class="form-control" name="txtdiachi" required></textarea>
		</div>
		<div class="my-3">
			<input type="submit" value="Hoàn tất đơn hàng" class="btn btn-primary">
		</div>
	</form>
	<?php
	}
	else{	
	?>
	<form method="post"  action="index.php">
		<input type="hidden" name="action" value="luudonhang">
		<div class="my-3">
			<label>Email</label>
			<input type="email" class="form-control" name="txtemail" required>
		</div>
		<div class="my-3">
			<label>Họ tên</label>
			<input type="text" class="form-control" name="txthoten" required>
		</div>
		<div class="my-3">
			<label>Số điện thoại</label>
			<input type="number" class="form-control" name="txtsodienthoai" required>
		</div>
		<div class="my-3">
			<label>Địa chỉ</label>
			<textarea class="form-control" name="txtdiachi" required></textarea>
		</div>
		<div class="my-3">
			<input type="submit" value="Hoàn tất đơn hàng" class="btn btn-primary">
		</div>
	</form>
	<?php	
	}
	?>
	</div>
	<div class="col-sm-6">
	<h4 class="text-info">Thông tin đơn hàng</h4>
		<table class="table table-bordered">
			<tr class="table-info">
				<th>Sản phẩm</th> 
				<th>Đơn giá</th>
				<th>Số lượng</th>
				<th>Thành tiền</th>
		</tr>
		<?php foreach($giohang as $id => $mh): ?>
		<tr>
			<td><img width="50" src="../<?php echo $mh["hinhanh"]; ?>"><?php echo $mh["tenmathang"]; ?></td>
			<td><?php echo number_format($mh["giaban"]) . "đ"; ?></td>
			<td><?php echo $mh["soluong"]; ?></td>
			<td><?php echo number_format($mh["thanhtien"]) . "đ"; ?></td>
		</tr>
		<?php endforeach; ?>
		<tr class="table-info">
			<td colspan="3" class="text-end"><b>Tổng tiền</b></td>
			<td><b><?php echo number_format(tinhtiengiohang()); ?>đ</b></td>
		</tr>
		</table>
	</div>
  </div>
</div>

<?php include("inc/bottom.php"); ?>
<style>
	/* Container Styling */
.container {
    margin-top: 50px;
    font-family: 'Roboto', sans-serif;
}

/* Header */
h3 {
    font-size: 2rem;
    color: #2c3e50;
    margin-bottom: 30px;
    text-align: center;
    font-weight: 600;
}

/* Subheader for customer information */
h4.text-info {
    color: #3498db; /* Màu xanh dương cho tiêu đề */
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 20px;
}

/* Form styling */
.form-control {
    border-radius: 8px;
    box-shadow: inset 0 1px 3px rgba(0,0,0,0.1);
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

/* Input fields on focus */
.form-control:focus {
    border-color: #3498db;
    box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
}

/* Submit Button */
.btn-primary {
    background-color: #3498db;
    border-color: #3498db;
    color: white;
    padding: 12px 24px;
    border-radius: 5px;
    font-size: 1rem;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.btn-primary:hover {
    background-color: #2980b9;
    transform: translateY(-3px); /* Nhấc lên nhẹ khi hover */
}

/* Table Styling */
.table {
    width: 100%;
    margin-top: 20px;
    border-collapse: collapse;
}

.table th, .table td {
    padding: 15px;
    text-align: center;
    font-size: 1rem;
}

.table-bordered {
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.table th {
    background-color: #f1f1f1;
    color: #3498db;
}

.table-info {
    background-color: #f9fafb;
}

.table-info td {
    font-weight: bold;
}

/* Hover effect for table rows */
.table tr:hover {
    background-color: #f1f1f1;
    cursor: pointer;
}

/* Input Fields and Labels */
.my-3 {
    margin-bottom: 20px;
}

label {
    font-size: 1rem;
    font-weight: 500;
    color: #333;
}

/* Column styling */
.col-sm-6 {
    margin-bottom: 30px;
}

/* Responsive design */
@media (max-width: 768px) {
    h3 {
        font-size: 1.5rem;
    }

    .col-sm-6 {
        margin-bottom: 20px;
    }

    .form-control {
        font-size: 1rem;
    }

    .btn-primary {
        width: 100%;
        font-size: 1.1rem;
        padding: 14px;
    }

    .table th, .table td {
        font-size: 0.9rem;
    }
}

</style>