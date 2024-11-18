<?php include("../inc/top.php"); ?>

<h3>Thêm mặt hàng</h3> 
<br>
<form method="post" enctype="multipart/form-data" action="index.php">
<input type="hidden" name="action" value="xulythem">
<div class="mb-3 mt-3">
	<label for="optdanhmuc" class="form-label">Hãng sản xuất</label>
	<select class="form-select" name="optdanhmuc">
	<?php
	foreach($danhmuc as $d):
	?>
		<option value="<?php echo $d["id"]; ?>"><?php echo $d["tendanhmuc"]; ?></option>
	<?php
	endforeach;
	?>
	</select>
</div>
<div class="mb-3 mt-3">
	<label for="txttenmathang" class="form-label">Tên mặt hàng</label>
	<input class="form-control" type="text" name="txttenmathang" placeholder="Nhập tên" required>
</div>
<div class="mb-3 mt-3">
	<label for="txtgianhap" class="form-label">Giá nhập</label>
	<input class="form-control" type="number" name="txtgianhap" value="0">
</div>
<div class="mb-3 mt-3">
	<label for="txtgiaban" class="form-label">Giá bán</label>
	<input class="form-control" type="number" name="txtgiaban" value="0">
</div>
<div class="mb-3 mt-3">
	<label for="txtsoluong" class="form-label">Số lượng</label>
	<input class="form-control" type="number" name="txtsoluong" value="0">
</div>
<div class="mb-3 mt-3">
	<label for="txtmota" class="form-label">Mô tả</label>
	<textarea id="txtmota" rows="5" class="form-control" name="txtmota" placeholder="Nhập mô tả" required></textarea>
</div>
<div class="mb-3 mt-3">
	<label>Hình ảnh</label>
	<input class="form-control" type="file" name="filehinhanh">
</div>
<div class="mb-3 mt-3">
	<input type="submit" value="Lưu" class="btn btn-success">
	<input type="reset" value="Hủy" class="btn btn-warning">
</div>
</form>

<?php include("../inc/bottom.php"); ?>
<style>
	/* General Form Styling */
form {
    max-width: 600px;
    margin: 20px auto;
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
}

h3 {
    text-align: center;
    color: #007bff;
    font-size: 24px;
    margin-bottom: 20px;
}

/* Input and Select Styling */
input[type="text"],
input[type="number"],
textarea,
select {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

/* Focus Effect */
input[type="text"]:focus,
input[type="number"]:focus,
textarea:focus,
select:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

/* Button Styling */
.btn {
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

/* Submit Button */
.btn-success {
    background-color: #28a745;
    color: white;
}

/* Hover Effect for Submit Button */
.btn-success:hover {
    background-color: #218838;
}

/* Reset Button */
.btn-warning {
    background-color: #ffc107;
    color: white;
}

/* Hover Effect for Reset Button */
.btn-warning:hover {
    background-color: #e0a800;
}

/* File Input Styling */
input[type="file"] {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
    background-color: #f1f1f1;
}

/* Hover Effect for File Input */
input[type="file"]:hover {
    background-color: #e9ecef;
}

/* Label Styling */
label {
    font-size: 16px;
    color: #333;
    font-weight: bold;
}

/* Textarea Styling */
textarea {
    resize: vertical;
}

/* Select Dropdown Styling */
select {
    appearance: none;
    background-color: #ffffff;
    padding-right: 30px;
}

/* Custom arrow for select */
select::-ms-expand {
    display: none;
}

/* Spacing between form elements */
.mb-3.mt-3 {
    margin-bottom: 15px;
}

/* Responsive Design */
@media (max-width: 600px) {
    form {
        padding: 15px;
    }

    h3 {
        font-size: 20px;
    }
}

</style>