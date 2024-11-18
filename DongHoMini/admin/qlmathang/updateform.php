<?php include("../inc/top.php"); ?>
<div>
<h3>Cập nhật mặt hàng</h3>
<form method="post" action="index.php" enctype="multipart/form-data">
<input type="hidden" name="action" value="xulysua">
<input type="hidden" name="txtid" value="<?php echo $m["id"]; ?>">
<div class="my-3">    
	<label>Hãng sản xuất</label>    
	<select class="form-control" name="optdanhmuc">
		<?php foreach ($danhmuc as $dm ) { ?>
			<option value="<?php echo $dm["id"]; ?>" <?php if($dm["id"] == $m["danhmuc_id"]) echo "selected"; ?>><?php echo $dm["tendanhmuc"]; ?></option>
		<?php } ?>
	</select>
</div>
<div class="my-3">    
	<label>Tên hàng</label>    
	<input class="form-control" type="text" name="txttenhang" required value="<?php echo $m["tenmathang"]; ?>">
</div> 
<div class="my-3">    
	<label>Mô tả</label>    
	<textarea class="form-control" name="txtmota" id="txtmota" required><?php echo $m["mota"]; ?></textarea>
</div> 
<div class="my-3">    
	<label>Giá gốc</label>    
	<input class="form-control" type="number" name="txtgiagoc" value="<?php echo $m["giagoc"]; ?>" required>
</div> 
<div class="my-3">    
	<label>Giá bán</label>    
	<input class="form-control" type="number" name="txtgiaban" value="<?php echo $m["giaban"]; ?>" required>
</div> 
<div class="my-3">    
	<label>Số lượng tồn</label>    
	<input class="form-control" type="number" name="txtsoluongton" value="<?php echo $m["soluongton"]; ?>" required>
	</div> 
<div class="my-3">    
	<label>Lượt xem</label>    
	<input class="form-control" type="number" name="txtluotxem" value="<?php echo $m["luotxem"]; ?>" required>
</div> 
<div class="my-3">    
	<label>Lượt mua</label>    
	<input class="form-control" type="number" name="txtluotmua" value="<?php echo $m["luotmua"]; ?>" required>
</div> 
<div class="my-3">
	<label>Hình ảnh</label><br>
	<input type="hidden" name="txthinhcu" value="<?php echo $m["hinhanh"]; ?>">
	<img src="../../<?php echo $m["hinhanh"]; ?>" width="50" class="img-thumbnail">	
	<a data-bs-toggle="collapse" data-bs-target="#demo">Đổi hình ảnh</a>
	<div id="demo" class="collapse m-3">
	  <input type="file" class="form-control" name="filehinhanh">
	</div>
</div>

<div class="my-3">
<input class="btn btn-primary"  type="submit" value="Lưu">
<input class="btn btn-warning"  type="reset" value="Hủy">
</div>
</form>
</div>
<script>
    ClassicEditor
        .create( document.querySelector( '#txtmota' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<?php include("../inc/bottom.php"); ?>
<style>
	/* General Form Styling */
form {
    max-width: 800px;
    margin: 30px auto;
    background-color: #f9f9f9;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
}

h3 {
    text-align: center;
    color: #007bff;
    font-size: 26px;
    margin-bottom: 20px;
}

/* Label Styling */
label {
    font-size: 16px;
    font-weight: bold;
    color: #333;
    margin-bottom: 8px;
    display: block;
}

/* Input Fields Styling */
input[type="text"],
input[type="number"],
textarea,
select,
input[type="file"] {
    width: 100%;
    padding: 12px;
    margin: 8px 0 20px 0;
    border-radius: 8px;
    border: 1px solid #ddd;
    font-size: 16px;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

/* Focus Effect for Inputs */
input[type="text"]:focus,
input[type="number"]:focus,
textarea:focus,
select:focus,
input[type="file"]:focus {
    border-color: #007bff;
    box-shadow: 0 0 6px rgba(0, 123, 255, 0.5);
}

/* Textarea Styling */
textarea {
    resize: vertical;
    min-height: 120px;
}

/* Image Preview and File Input Styling */
img.img-thumbnail {
    margin-top: 10px;
    border-radius: 8px;
}

input[type="file"] {
    background-color: #f1f1f1;
    border: 1px solid #ccc;
    padding: 10px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

/* Hover Effect for File Input */
input[type="file"]:hover {
    background-color: #e9ecef;
}

/* Button Styling */
.btn {
    padding: 12px 20px;
    font-size: 16px;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

/* Submit Button */
.btn-primary {
    background-color: #007bff;
    color: white;
    border: none;
}

/* Hover Effect for Submit Button */
.btn-primary:hover {
    background-color: #0056b3;
    transform: scale(1.05);
}

/* Reset Button */
.btn-warning {
    background-color: #ffc107;
    color: white;
    border: none;
}

/* Hover Effect for Reset Button */
.btn-warning:hover {
    background-color: #e0a800;
    transform: scale(1.05);
}

/* Collapse Link Styling */
a[data-bs-toggle="collapse"] {
    color: #007bff;
    font-size: 16px;
    text-decoration: none;
    transition: color 0.3s ease;
}

a[data-bs-toggle="collapse"]:hover {
    color: #0056b3;
}

/* Responsive Design */
@media (max-width: 600px) {
    form {
        padding: 20px;
    }

    h3 {
        font-size: 22px;
    }

    .btn {
        width: 100%;
        margin-top: 10px;
    }
}
/* Tạo form textarea trong suốt với viền mờ */
.my-3 {
    margin-bottom: 1rem;
}

label {
    font-size: 1rem;
    font-weight: bold;
    color: #333;
}
/* Tùy chỉnh textarea */
textarea.form-control {
    width: 100%;
    padding: 10px;
    border: 2px solid #007bff; /* Màu viền xanh dương */
    border-radius: 5px;
    background-color: transparent; /* Làm nền trong suốt */
    color: #666; /* Màu chữ xám */
    font-size: 1rem;
    transition: all 0.3s ease-in-out;
}

/* Hiệu ứng khi hover vào textarea */
textarea.form-control:hover {
    border-color: #0056b3; /* Màu viền đậm hơn khi hover */
    box-shadow: 0 0 8px rgba(0, 123, 255, 0.5); /* Hiệu ứng bóng */
}

/* Khi textarea được focus */
textarea.form-control:focus {
    outline: none;
    border-color: #0056b3; /* Viền màu xanh dương khi focus */
    box-shadow: 0 0 8px rgba(0, 123, 255, 0.7); /* Hiệu ứng bóng đậm khi focus */
}


</style>