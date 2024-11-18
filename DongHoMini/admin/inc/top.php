<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">

	<title>Trang quản trị - Mini Shop</title>

	<link href="../inc/css/app.css" rel="stylesheet">
	<script src="../inc/js/app.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="">
          <span class="align-middle">Mini Shop</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header text-info">
						HỆ THỐNG
					</li>

					<li class="sidebar-item <?php if(strpos($_SERVER['REQUEST_URI'],"ktnguoidung") != false) echo "active"; ?>">
						<a class="sidebar-link" href="../ktnguoidung/index.php">
						<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Bảng điều khiển</span>
						</a>
					</li>

				<?php if(isset($_SESSION["nguoidung"]) && $_SESSION["nguoidung"]["loai"]==1){ ?>
					<li class="sidebar-item <?php if(strpos($_SERVER['REQUEST_URI'],"qlnguoidung") != false) echo "active"; ?>">
						<a class="sidebar-link" href="../qlnguoidung/index.php">
						<i class="align-middle" data-feather="users"></i> <span class="align-middle">Quản lý người dùng</span>
						</a>
					</li>
				<?php } ?>

					<li class="sidebar-header text-info">
						DANH MỤC
					</li>

					<li class="sidebar-item <?php if(strpos($_SERVER['REQUEST_URI'],"qldanhmuc") != false) echo "active"; ?>">
						<a class="sidebar-link" href="../qldanhmuc/index.php">
						<i class="align-middle" data-feather="grid"></i> <span class="align-middle">Quản lý danh mục</span>
						</a>
					</li>

					<li class="sidebar-item <?php if(strpos($_SERVER['REQUEST_URI'],"qlmathang") != false) echo "active"; ?>">
						<a class="sidebar-link" href="../qlmathang/index.php">
						<i class="align-middle" data-feather="package"></i> <span class="align-middle">Quản lý hàng hóa</span>
						</a>
					</li>

					<li class="sidebar-header text-info">
						KINH DOANH
					</li>
					
					<li class="sidebar-item">
						<a class="sidebar-link" href="">
						<i class="align-middle" data-feather="users"></i> <span class="align-middle">Quản lý khách hàng</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="">
						<i class="align-middle" data-feather="truck"></i> <span class="align-middle">Quản lý đơn hàng</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="">
						<i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Quản lý doanh thu</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="">
						<i class="align-middle" data-feather="shopping-bag"></i> <span class="align-middle">Chương trình khuyến mãi</span>
						</a>
					</li>

					
					
					<li class="sidebar-header text-info">
						CẤU HÌNH WEBSITE
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="">
						<i class="align-middle" data-feather="book"></i> <span class="align-middle">Thông tin</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="">
						<i class="align-middle" data-feather="image"></i> <span class="align-middle">Hình ảnh</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">1</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									1 thông báo mới
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Đơn hàng mới</div>
												<div class="text-muted small mt-1">Xem danh sách đơn hàng chờ xác nhận.</div>
												<div class="text-muted small mt-1">5 phút trước</div>
											</div>
										</div>
									</a>
									
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Tất cả thông báo</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
									<span class="indicator">1</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										1 tin nhắn mới
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="../../images/users/doraemon.jpg" class="avatar img-fluid rounded-circle" alt="Mèo máy Đô rê mon">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Doraemon</div>
												<div class="text-muted small mt-1">Mail của mèo máy đến từ tương lai nè ^.^</div>
												<div class="text-muted small mt-1">15 phút trước</div>
											</div>
										</div>
									</a>
									
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Tất cả tin nhắn</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<img src="<?php if ($_SESSION["nguoidung"]["hinhanh"]==NULL) echo "../../images/users/user.png"; else echo "../../images/users/" . $_SESSION["nguoidung"]["hinhanh"]; ?>" class="avatar img-fluid rounded me-1" /> 
								<span class="text-dark">Chào <?php if(isset($_SESSION["nguoidung"])) echo $_SESSION["nguoidung"]["hoten"]; else echo "bạn"; ?></span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
							
								<a class="dropdown-item" href="../ktnguoidung/index.php?action=hoso">
									<i class="align-middle me-1" data-feather="user"></i> Hồ sơ cá nhân
								</a>								
								<a class="dropdown-item" href="../ktnguoidung/index.php?action=matkhau">
									<i class="align-middle me-1" data-feather="key"></i> Đổi mật khẩu
								</a>
								
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../ktnguoidung/index.php?action=dangxuat"><i class="align-middle me-1" data-feather="log-out"></i> Đăng xuất</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
<style>
/* General Styling */
body {
    font-family: 'Inter', sans-serif;
    background: linear-gradient(to right, #0f172a, #1e293b);
    color: #e2e8f0;
    margin: 0;
    height: 100vh;
    overflow-x: hidden;
}

/* Sidebar Styling */
.sidebar {
    background: linear-gradient(135deg, #2563eb, #7c3aed);
    color: white;
    box-shadow: 2px 0 10px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;
}
.sidebar a.sidebar-link {
    color: #cbd5e1;
    padding: 12px 18px;
    display: flex;
    align-items: center;
    border-radius: 8px;
    margin: 5px 0;
    text-decoration: none;
    transition: all 0.3s ease;
}
.sidebar a.sidebar-link:hover {
    background: rgba(255, 255, 255, 0.1);
    color: white;
    transform: translateX(5px);
}
.sidebar-item.active a.sidebar-link {
    background: linear-gradient(135deg, #7c3aed, #4f46e5);
    color: white;
    box-shadow: 0px 4px 10px rgba(124, 58, 237, 0.5);
}

/* Sidebar Header */
.sidebar-header {
    font-size: 1rem;
    font-weight: bold;
    color: #93c5fd;
    margin: 20px 0 10px;
}

/* Navbar Styling */
.navbar {
    background: linear-gradient(135deg, #0ea5e9, #6366f1);
    color: white;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
}
.navbar .nav-icon {
    color: white;
    transition: all 0.3s ease;
}
.navbar .nav-icon:hover {
    color: #93c5fd;
    transform: scale(1.1);
}
.navbar .dropdown-menu {
    background: #1e293b;
    color: white;
    border: none;
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
    animation: fadeIn 0.4s ease;
}
.nav-item .indicator {
	background: red;
	color: wheat;
}
/* Dropdown Menu Links */
.dropdown-menu a {
    color: #a5b4fc;
    padding: 10px 15px;
    text-decoration: none;
    display: block;
    transition: all 0.3s ease;
}
.dropdown-menu a:hover {
    background: #4f46e5;
    color: white;
}

/* Avatar Styling */
.avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.avatar:hover {
    transform: scale(1.2);
    box-shadow: 0px 4px 12px rgba(124, 58, 237, 0.5);
}

/* Sidebar Toggle Button */
.sidebar-toggle {
    background: none;
    border: none;
    cursor: pointer;
    color: white;
    transition: all 0.4s ease;
}
.sidebar-toggle:hover {
    transform: rotate(90deg);
    color: #60a5fa;
}

/* Glow Effect for Indicators */
.indicator {
    background: #4f46e5;
    color: white;
    border-radius: 50%;
    padding: 4px 8px;
    font-size: 0.7rem;
    box-shadow: 0 0 8px rgba(79, 70, 229, 0.7);
    animation: pulse 1.5s infinite;
}

/* Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes pulse {
    0%, 100% {
        transform: scale(1);
        box-shadow: 0 0 8px rgba(79, 70, 229, 0.5);
    }
    50% {
        transform: scale(1.1);
        box-shadow: 0 0 12px rgba(79, 70, 229, 0.8);
    }
}

/* Main Content Styling */
.main {
    background: #f1f5f9;
    border-radius: 12px;
    padding: 20px;
    margin: 20px;
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
}

/* Buttons */
button {
    background: linear-gradient(135deg, #0ea5e9, #6366f1);
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 8px;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
}
button:hover {
    background: linear-gradient(135deg, #7c3aed, #4f46e5);
    box-shadow: 0px 4px 12px rgba(79, 70, 229, 0.7);
    transform: translateY(-2px);
}

</style>