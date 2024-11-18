<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	
	<title>Đăng nhập - Mini Shop</title>

	<link href="../inc/css/app.css" rel="stylesheet">
	<script src="../inc/js/app.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<style>
		main{
			background-image: url('../../images/carousel/anhnen.jpg');
			background-size: cover; /* Ảnh bao phủ toàn bộ vùng của main */
            background-position: center; /* Căn giữa ảnh */
            background-repeat: no-repeat; /* Không lặp lại ảnh */
            min-height: 100vh;
			background-color: #f0f0f0;
		}
/* Reset */
body, html {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
}

/* Nền */
body {
    background: linear-gradient(135deg, #3a7bd5, #00d2ff); /* Gradient xanh dương */
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
}

/* Form Container */
.card {
    border: 2px solid #00aaff; /* Viền màu xanh lam với độ dày 2px */
    background: transparent; /* Giữ background trong suốt */
    box-shadow: 0 4px 12px rgba(0, 170, 255, 0.3); /* Thêm bóng nhẹ xung quanh */
    border-radius: 10px;
    padding: 20px;
    animation: fadeIn 0.8s ease;
}


/* Tiêu đề */
.text-center h1 {
    color: #ffffff; /* Chữ trắng sáng rõ */
    text-shadow: 0 2px 5px rgba(255, 255, 255, 0.8); /* Tạo hiệu ứng ánh sáng nhẹ */
    margin-bottom: 10px;
}

.text-center p {
    color: rgba(255, 255, 255, 0.9); /* Chữ sáng hơn */
    text-shadow: 0 1px 3px rgba(255, 255, 255, 0.6); /* Ánh sáng mờ */
}

/* Nhãn (Label) */
.form-label {
    color: red; /* Màu xanh ngọc nổi bật */
    font-weight: bold;
    margin-bottom: 5px;
    display: block;
    text-shadow: 0 1px 3px rgba(0, 255, 204, 0.7); /* Ánh sáng nhẹ */
	font-weight: solid;
	font-size: 20px;
}

/* Input Fields */
.form-control {
    background: rgba(255, 255, 255, 0.1); /* Trong suốt nhẹ */
    border: 1px solid rgba(255, 255, 255, 0.4);
    color: #ffffff; /* Chữ trắng rõ */
    text-shadow: 0 1px 3px rgba(255, 255, 255, 0.6); /* Hiệu ứng ánh sáng chữ */
    padding: 12px;
    font-size: 14px;
    border-radius: 6px;
    transition: all 0.3s ease;
}

.form-control::placeholder {
    color: red; /* Màu xanh nhạt cho placeholder */
    font-style: italic;
    text-shadow: 0 1px 3px rgba(102, 217, 255, 0.5);
}

.form-control:focus {
    border-color: #00aaff;
    box-shadow: 0 0 8px rgba(0, 170, 255, 0.7);
    outline: none;
}

/* Button */
.btn-primary {
    background: linear-gradient(135deg, #00aaff, #0062cc);
    border: none;
    padding: 12px;
    font-size: 14px;
    color: #ffffff; /* Chữ sáng rõ */
    text-shadow: 0 2px 5px rgba(255, 255, 255, 0.7); /* Hiệu ứng chữ nổi bật */
    border-radius: 6px;
    text-transform: uppercase;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    background: linear-gradient(135deg, #0062cc, #00aaff);
    box-shadow: 0 4px 10px rgba(0, 170, 255, 0.5);
    transform: translateY(-3px); /* Hiệu ứng nổi */
}

.btn-primary:active {
    transform: translateY(0); /* Trở lại trạng thái ban đầu */
}

/* Animation */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.text-center {
    font-size: 15px; /* Kích thước chữ lớn hơn */
    font-weight: bold; /* Chữ đậm */
    color: #ffffff; /* Màu chữ trắng */
    text-shadow: 0 2px 5px rgba(0, 0, 0, 0.5); /* Tạo hiệu ứng nổi */
    margin-top: 20px; /* Khoảng cách trên */
}

.text-center a {
    color: #ff4500; /* Màu cam đậm cho chữ Đăng ký */
    font-weight: bold; /* Chữ đậm hơn cho liên kết */
    font-size: 17px; /* Tăng kích thước liên kết */
    text-decoration: none; /* Loại bỏ gạch chân */
    transition: all 0.3s ease; /* Hiệu ứng khi hover */
}

.text-center a:hover {
    color: #ff6347; /* Màu cam sáng hơn khi hover */
    text-decoration: underline; /* Gạch chân khi hover */
    transform: scale(1.1); /* Tăng kích thước nhẹ khi hover */
}

	</style>
<script>
// Gợi ý thông minh khi người dùng tương tác với input
document.querySelectorAll('input').forEach(input => {
    const placeholder = input.placeholder;

    input.addEventListener('focus', () => {
        input.placeholder = "Hãy nhập thông tin chính xác!";
    });

    input.addEventListener('blur', () => {
        input.placeholder = placeholder;
    });
});

</script>
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Xin chào!</h1>
							<p class="lead">
								Vui lòng đăng nhập để tiếp tục
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">
									<form action="index.php" method="post">
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg" type="email" name="txtemail" placeholder="Nhập email" />
										</div>
										<div class="mb-3">
											<label class="form-label">Mật khẩu</label>
											<input class="form-control form-control-lg" type="password" name="txtmatkhau" placeholder="Nhập mật khẩu" />
										</div>
								<!--		<div>
											<div class="form-check align-items-center">
												<input id="customControlInline" type="checkbox" class="form-check-input" value="remember-me" name="remember-me" checked>
												<label class="form-check-label text-small" for="customControlInline">Remember me</label>
											</div>
										</div>
								-->		<div class="d-grid gap-2 my-3">
											<input type="hidden" name="action" value="xldangnhap">
											<input type="submit" class="btn btn-lg btn-primary" value="Đăng nhập">
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="text-center mb-3">
							Chưa có tài khoản? <a href="#">Đăng ký</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

</body>

</html>