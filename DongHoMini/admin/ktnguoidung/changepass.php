<?php include("../inc/top.php"); ?>

<!-- Form cập nhật thông tin ng dùng-->
  <div class="row" >
    <div class="col-12 col-md-10 m-auto">
      <div class="card p-5">
        <div class="card-header">          
          <h4 class="text-info text-center">ĐỔI MẬT KHẨU</h4> 
        </div>
        <div class="card-body">
          

        	<!-- Form đổi mật khẩu -->
		  
		    
          <form method="post" name="f" action="../ktnguoidung/index.php">
            <div class="my-3">  
              <label class="form-label">Email</label> 
              <input class="form-control" type="text" name="txtemail" value="<?php echo $_SESSION["nguoidung"]["email"]; ?>" disabled>
            </div>
            <div class="my-3">  
	            <label>Mật khẩu mới</label>      
	            <input class="form-control" type="password" name="txtmatkhaumoi" placeholder="Mật khẩu mới" required>
            </div>            
            <div class="my-3 text-center">
            <input type="hidden" name="action" value="doimatkhau" >
            <input class="btn btn-primary"  type="submit" value="Lưu">
            <input class="btn btn-warning"  type="reset" value="Hủy">
          </div>
          </form>          
        </div>
      </div>
    </div>
  </div>


<?php include("../inc/bottom.php"); ?>

<style>
/* Cột chứa form */
.row {
    margin-top: 30px; /* Khoảng cách phần trên */
}

/* Cột form */
.col-12.col-md-10.m-auto {
    max-width: 450px; /* Giảm chiều rộng của form */
}

/* Card bọc form */
.card {
    border-radius: 10px;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
    background-color: #ffffff;
    padding: 30px;
    transition: box-shadow 0.3s ease, transform 0.3s ease;
}

/* Card khi hover */
.card:hover {
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
    transform: translateY(-5px);
}

/* Tiêu đề card */
.card-header h4 {
    color: #1d4ed8;
    font-size: 1.5rem; /* Kích thước lớn hơn */
    font-weight: 600;
    margin-bottom: 20px; /* Giảm khoảng cách dưới tiêu đề */
}

/* Các input trong form */
.form-control {
    border-radius: 8px;
    box-shadow: inset 0 2px 6px rgba(0, 0, 0, 0.1);
    padding: 12px; /* Tăng padding để form dễ sử dụng hơn */
    font-size: 1rem;
    margin-top: 10px;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

/* Focus vào input */
.form-control:focus {
    border-color: #2563eb;
    box-shadow: 0 0 6px rgba(37, 99, 235, 0.5);
}

/* Các nút */
.btn {
    padding: 10px 18px; /* Tăng padding để nút dễ bấm hơn */
    font-size: 1rem;
    border-radius: 8px;
    transition: background-color 0.3s ease, transform 0.3s ease;
    margin-top: 20px;
}

/* Nút Lưu (Primary) */
.btn-primary {
    background-color: #2563eb;
    color: white;
    border: none;
}

.btn-primary:hover {
    background-color: #1d4ed8;
    transform: translateY(-2px);
}

/* Nút Hủy (Warning) */
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
    font-size: 1rem;
    color: #475569;
    font-weight: 500;
    margin-bottom: 5px; /* Giảm khoảng cách giữa label và input */
}

/* Khoảng cách giữa các phần tử trong form */
.my-3 {
    margin-bottom: 1.5rem; /* Giảm khoảng cách giữa các trường dữ liệu */
}

/* Canh giữa các phần tử */
.text-center {
    text-align: center;
}

</style>