<?php include("../inc/top.php"); ?>

<!-- Form cập nhật thông tin ng dùng-->
  <div class="row" >
    <div class="col-12 col-md-10 m-auto">
      <div class="card p-5">
        <div class="card-header">          
          <h4 class="text-info text-center">HỒ SƠ NGƯỜI DÙNG</h4> 
        </div>
        <div class="card-body">
          <form method="post" enctype="multipart/form-data" action="../ktnguoidung/index.php">
          	<input type="hidden" name="txtid" value="<?php echo $_SESSION["nguoidung"]["id"]; ?>" >
          	<input type="hidden" name="txthinhanh" value="<?php echo $_SESSION["nguoidung"]["hinhanh"]; ?>" >
            <input type="hidden" name="action" value="xlhoso" >
            <div class="text-center">
              <img class="img-thumbnail" src="<?php if ($_SESSION["nguoidung"]["hinhanh"]==NULL) echo "../../images/users/user.png"; else echo "../../images/users/" . $_SESSION["nguoidung"]["hinhanh"]; ?>" alt="<?php echo $_SESSION["nguoidung"]["hoten"]; ?>" width="100px">
            </div>
            <input type="hidden" name="txtid" value="<?php echo $_SESSION["nguoidung"]["id"]; ?>">
            <div class="my-3">    
            <label class="form-label">Email</label>    
            <input class="form-control" type="email" name="txtemail" placeholder="Email" value="<?php echo $_SESSION["nguoidung"]["email"]; ?>" required>
            </div>
            <div class="my-3">    
            <label class="form-label">Số điện thoại</label>    
            <input class="form-control" type="number" name="txtdienthoai" placeholder="Số điện thoại" value="<?php echo $_SESSION["nguoidung"]["sodienthoai"]; ?>" required>
            </div>            
            <div class="my-3">
            <label class="form-label">Họ tên</label>
            <input class="form-control" type="text" name="txthoten" placeholder="Họ tên" value="<?php echo $_SESSION["nguoidung"]["hoten"]; ?>" required></div>
            <div class="my-3">
              <label class="form-label">Đổi hình đại diện</label>
              <input class="form-control" type="file" name="fhinh">
            </div>
            <div class="my-3 text-center">            
            <input class="btn btn-primary"  type="submit" value="Cập nhật">
            <input class="btn btn-warning"  type="reset" value="Không">
        	</div>
          </form>
        </div>
        
      </div>
    </div>
  </div>


<?php include("../inc/bottom.php"); ?>
<style>
/* Tạo không gian và căn giữa cho phần hồ sơ */
.row {
    margin-top: 20px; /* Giảm khoảng cách phần trên của form */
}

/* Cột chứa form với chiều rộng nhỏ hơn */
.col-12.col-md-10.m-auto {
    max-width: 500px; /* Giảm chiều rộng của form */
}

/* Thẻ card */
.card {
    border-radius: 8px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    background-color: #ffffff;
    padding: 20px;
    transition: box-shadow 0.3s ease, transform 0.3s ease;
}

/* Khi hover trên card */
.card:hover {
    box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
    transform: translateY(-5px);
}

/* Tiêu đề card */
.card-header h4 {
    color: #1d4ed8;
    font-size: 1.3rem; /* Giảm kích thước tiêu đề */
    font-weight: 600;
    margin-bottom: 15px; /* Giảm khoảng cách dưới tiêu đề */
}

/* Các input trong form */
.form-control {
    border-radius: 8px;
    box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 8px; /* Giảm padding của input */
    font-size: 0.9rem; /* Giảm kích thước font */
    margin-top: 5px;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

/* Focus vào input */
.form-control:focus {
    border-color: #2563eb;
    box-shadow: 0 0 6px rgba(37, 99, 235, 0.5);
}

/* Hình ảnh đại diện */
.img-thumbnail {
    border-radius: 50%;
    border: 2px solid #e5e7eb;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    width: 80px; /* Giảm kích thước ảnh */
}

.img-thumbnail:hover {
    transform: scale(1.05);
    box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
}

/* Các nút */
.btn {
    padding: 8px 15px; /* Giảm padding của nút */
    font-size: 0.9rem; /* Giảm kích thước font */
    border-radius: 8px;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.btn-primary {
    background-color: #2563eb;
    color: white;
    border: none;
}

.btn-primary:hover {
    background-color: #1e40af;
    transform: translateY(-2px);
}

.btn-warning {
    background-color: #f59e0b;
    color: white;
    border: none;
}

.btn-warning:hover {
    background-color: #d97706;
    transform: translateY(-2px);
}

/* Định dạng lại label cho đẹp mắt */
.form-label {
    font-size: 0.95rem; /* Giảm kích thước font label */
    color: #475569;
    font-weight: 500;
    margin-bottom: 4px; /* Giảm khoảng cách giữa label và input */
}

/* Canh giữa các phần tử */
.text-center {
    text-align: center;
}

/* Khoảng cách giữa các phần tử trong form */
.my-3 {
    margin-bottom: 1rem; /* Giảm khoảng cách giữa các trường dữ liệu */
}

</style>