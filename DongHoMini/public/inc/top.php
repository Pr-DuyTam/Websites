<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>MiniShop</title>

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <style>
        #search {
            display: flex;
            align-items: center;
            border: 1px solid #ddd;
            border-radius: 20px;
            overflow: hidden;
            background-color: #fff;
            margin-right: 20px;

        }

        #search input {
            border: none;
            padding: 8px 12px;
            outline: none;
            width: 200px;
            transition: width 0.3s;
        }

        #search input:focus {
            width: 250px;
            /* Mở rộng khi người dùng nhập */
        }

        #search button {
            border: none;
            background-color: transparent;
            padding: 8px;
            cursor: pointer;
        }

        #search button i {
            color: #333;
            font-size: 16px;
        }
    </style>
</head>

<body id="top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning shadow">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php"><i class="bi bi-watch"></i> MiniShop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Trang chính</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Giới thiệu</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Danh mục sản phẩm</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php foreach ($danhmuc as $d): ?>
                                <li><a class="dropdown-item" href="?action=group&id=<?php echo $d["id"]; ?>">
                                        <?php echo $d["tendanhmuc"]; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                </ul>
                <!-- Tìm kiếm -->
                <form action="index.php" method="POST">
                    <div id="search">
                        <input type="text" name="txttukhoa" placeholder="Tìm kiếm..." />
                        <button type="submit" name="action" value="timkiem">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>

                <style>
/* Nền màu cho navbar với hiệu ứng chuyển đổi */
.navbar {
    background-color: #1a73e8; /* Màu xanh dương tươi sáng */
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

.navbar:hover {
    background-color: #0b5ed7; /* Xanh đậm khi hover */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Bóng đổ khi hover */
}

/* Hiệu ứng khi hover vào các liên kết trong navbar */
.navbar-nav .nav-link {
    color: #ffffff; /* Màu chữ trắng */
    transition: color 0.3s ease, transform 0.3s ease, letter-spacing 0.3s ease;
}

.navbar-nav .nav-link:hover {
    color: #ff5722; /* Màu cam khi hover */
    transform: scale(1.1); /* Phóng to khi hover */
    letter-spacing: 1px; /* Giãn khoảng cách chữ khi hover */
}

/* Hiệu ứng AI cho các nút dropdown */
.navbar-nav .nav-item.dropdown:hover .nav-link {
    color: red; /* Màu vàng khi hover vào dropdown */
}

/* Đảm bảo dropdown luôn hiển thị khi hover vào */
.navbar-nav .dropdown-menu {
    opacity: 0;
    visibility: hidden;
    transform: translateY(-10px);
    transition: opacity 0.3s ease, transform 0.3s ease, visibility 0s 0.3s;
}

.navbar-nav .nav-item.dropdown:hover .dropdown-menu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
    transition: opacity 0.3s ease, transform 0.3s ease, visibility 0s 0s;
}

/* Nền màu và hiệu ứng cho input tìm kiếm */
#search {
    background-color: #ffffff; /* Nền sáng cho ô tìm kiếm */
    padding: 5px 10px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Bóng đổ nhẹ */
    transition: box-shadow 0.3s ease;
}

#search:hover {
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2); /* Bóng đổ rõ nét khi hover */
}

/* Giảm kích thước cho input tìm kiếm */
#search input {
    background-color: transparent;
    border: none;
    color: #333; /* Màu chữ đen */
    padding: 5px 10px;
    border-radius: 20px;
    transition: border 0.3s ease, box-shadow 0.3s ease;
    width: 150px; /* Giảm chiều rộng cho input */
}

#search input:focus {
    outline: none;
    border: 2px solid #1a73e8; /* Đổi màu viền khi focus */
    box-shadow: 0 0 10px rgba(26, 115, 232, 0.6); /* Hiệu ứng bóng đổ sáng */
    animation: pulse 1.5s infinite; /* Animation pulse */
}

/* Hiệu ứng chuyển động cho nút tìm kiếm */
#search button {
    background-color: #1a73e8; /* Màu xanh dương */
    border: none;
    color: #fff;
    padding: 5px 10px;
    margin-left: 10px;
    border-radius: 50%;
    cursor: pointer;
    transition: transform 0.3s ease, background-color 0.3s ease;
}

#search button:hover {
    background-color: #0b5ed7; /* Màu xanh đậm khi hover */
    transform: rotate(180deg); /* Hiệu ứng xoay khi hover */
}

/* Animation pulse */
@keyframes pulse {
    0% {
        box-shadow: 0 0 10px rgba(26, 115, 232, 0.6);
    }
    50% {
        box-shadow: 0 0 20px rgba(26, 115, 232, 1);
    }
    100% {
        box-shadow: 0 0 10px rgba(26, 115, 232, 0.6);
    }
}

/* Hiệu ứng cho navbar-toggler khi hover */
.navbar-toggler {
    background-color: #1a73e8;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.navbar-toggler:hover {
    background-color: #0b5ed7; /* Màu nền khi hover */
    transform: rotate(90deg); /* Xoay khi hover */
}

/* Hiệu ứng cho navbar khi scroll */
.navbar-scrolled {
    background-color: rgba(26, 115, 232, 0.8); /* Màu nền trong suốt khi scroll */
    transition: background-color 0.3s ease;
}

/* Thêm hiệu ứng động khi dropdown menu xuất hiện */
@keyframes dropdown {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.navbar-nav .dropdown-menu {
    animation: dropdown 0.5s ease-in-out;
}

                </style>
                <div class="d-flex">
                    <?php if (isset($_SESSION["khachhang"])) { ?>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                            <li class="nav-item"><a class="nav-link text-warning" href="index.php?action=thongtin">Chào <?php echo $_SESSION["khachhang"]["hoten"]; ?></a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php?action=dangxuat">Đăng xuất</a></li>
                        </ul>
                    <?php } else { ?>
                        <a href="index.php?action=dangnhap" class="btn btn-outline-light"><i class="bi bi-person"></i> Đăng nhập</a>
                    <?php } ?>
                    &nbsp;
                    <a href="index.php?action=giohang" class="btn btn-outline-light"><i class="bi bi-cart3"></i> Giỏ hàng <span class="badge bg-danger text-white ms-1 rounded-pill"><?php echo demsoluongtronggio(); ?></span></a>
                </div>

                <style>
                    /* Header tổng thể */
.header {
    display: flex;
    align-items: center;
    justify-content: space-between; /* Căn đều giữa các phần tử */
    padding: 10px 20px;
    background-color: #ffc107;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* Phần tìm kiếm */
#search {
    display: flex;
    align-items: center;
    gap: 5px;
    flex-grow: 1; /* Đẩy tìm kiếm chiếm toàn bộ không gian còn lại */
}

/* Hành động đăng nhập, giỏ hàng */
.header-actions {
    display: flex;
    align-items: center;
    gap: 15px;
}

.header-actions .btn {
    display: flex;
    align-items: center;
    padding: 8px 15px;
    font-size: 14px;
    color: #fff;
    background-color: transparent;
    border: 1px solid white;
    border-radius: 20px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.header-actions .btn:hover {
    background-color: white;
    color: #333;
}

.header-actions .badge {
    background-color: red;
    font-size: 12px;
    padding: 2px 6px;
    border-radius: 50%;
}

                </style>
            </div>
        </div>
        
    </nav>
    <div id="demo" class="carousel slide shadow" data-bs-ride="carousel">

    <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
        
            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/Banner/banner1.png" alt="Dụng cụ văn phòng" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="../images/Banner/banner2.png" alt="Dụng cụ học tập" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="../images/Banner/banner3.png" alt="Văn phòng phẩm" class="d-block w-100">
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            </button>
</div>
<style>
    /* Toàn bộ carousel */
#demo {
    border-radius: 15px;
    overflow: hidden;
    background: linear-gradient(135deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8));
    position: relative;
    box-shadow: 0 0 20px rgba(0, 123, 255, 0.5), 0 0 40px rgba(0, 123, 255, 0.3);
    animation: pulseGlow 3s infinite alternate ease-in-out;
    transition: transform 0.6s ease-in-out, box-shadow 0.6s ease-in-out;
}

@keyframes pulseGlow {
    0% {
        box-shadow: 0 0 20px rgba(0, 123, 255, 0.5), 0 0 40px rgba(0, 123, 255, 0.3);
    }
    100% {
        box-shadow: 0 0 40px rgba(0, 123, 255, 0.7), 0 0 60px rgba(0, 123, 255, 0.5);
    }
}

/* Hiệu ứng nền chuyển động */
.carousel-inner {
    background: linear-gradient(45deg, rgba(0, 123, 255, 0.2), rgba(255, 255, 255, 0.1));
    background-size: 200% 200%;
    animation: bgGradientMove 4s infinite linear;
}

@keyframes bgGradientMove {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

/* Hình ảnh trong carousel với animation */
.carousel-item img {
    transition: transform 0.8s ease, filter 0.8s ease;
    filter: brightness(0.9) contrast(1.1);
    animation: imageFloat 6s infinite alternate ease-in-out;
}

@keyframes imageFloat {
    0% {
        transform: scale(1);
    }
    100% {
        transform: scale(1.05);
    }
}

/* Nút điều khiển với hiệu ứng ánh sáng động */
.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 50%;
    animation: iconGlow 2s infinite ease-in-out;
}

@keyframes iconGlow {
    0% {
        box-shadow: 0 0 10px rgba(0, 123, 255, 0.8);
    }
    100% {
        box-shadow: 0 0 20px rgba(0, 123, 255, 1);
    }
}

.carousel-control-prev:hover .carousel-control-prev-icon,
.carousel-control-next:hover .carousel-control-next-icon {
    transform: scale(1.3);
}

/* Nút chỉ số với animation */
.carousel-indicators button {
    width: 14px;
    height: 14px;
    background: linear-gradient(135deg, #007bff, #00c6ff);
    border-radius: 50%;
    border: 2px solid white;
    animation: indicatorPulse 1.5s infinite alternate ease-in-out;
    transition: transform 0.5s ease, background 0.5s ease, box-shadow 0.5s ease;
}

@keyframes indicatorPulse {
    0% {
        transform: scale(1);
        box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
    }
    100% {
        transform: scale(1.2);
        box-shadow: 0 0 20px rgba(0, 123, 255, 0.8);
    }
}

.carousel-indicators button.active {
    background: linear-gradient(135deg, #00c6ff, #007bff);
    transform: scale(1.4);
    box-shadow: 0 0 15px rgba(0, 123, 255, 1), 0 0 30px rgba(0, 123, 255, 0.8);
}

</style>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-1">