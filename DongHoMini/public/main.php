<?php
include("inc/top.php");
?>

<?php 
foreach($danhmuc as $d){ 
    $i = 0;
?>
<h3><a class="text-decoration-none text-info" href="index.php?action=group&id=<?php echo $d["id"]; ?>">
    <?php echo $d["tendanhmuc"]; ?></a></h3>
<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
<?php 
    foreach($mathang as $m){ 
        if($m["danhmuc_id"] == $d["id"] && $i < 4){
            $i++;
?>
    <div class="col mb-5">
        <div class="card h-100 shadow">
            <!-- Sale badge-->
            <?php if ($m["giaban"] != $m["giagoc"]){ ?>
            <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Giảm giá</div>
            <?php } // end if ?>
            <!-- Product image-->
            <a href="index.php?action=detail&id=<?php echo $m["id"]; ?>">
                <img class="card-img-top" src="../<?php echo $m["hinhanh"]; ?>" alt="<?php echo $m["tenmathang"]; ?>" />
            </a>
            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-center">
                    <!-- Product name-->
                    <a class="text-decoration-none" href="index.php?action=detail&id=<?php echo $m["id"]; ?>">
                        <h5 class="fw-bolder text-info">
                            <?php echo $m["tenmathang"]; ?>
                        </h5>
                    </a>
                    <!-- Product reviews-->
                    <div class="d-flex justify-content-center small text-warning mb-2">
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                    </div>
                    <!-- Product price-->
                    <?php if ($m["giaban"] != $m["giagoc"]){ ?>
                    <span class="text-muted text-decoration-line-through">
                        <?php echo number_format($m["giagoc"]); ?>
                            đ
                    </span>
                        <?php } // end if ?>
                    <span class="text-danger fw-bolder"><?php echo number_format($m["giaban"]); ?>đ</span>
                </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center">
                    <a class="btn btn-outline-info mt-auto" href="index.php?action=chovaogio&id=<?php echo $m["id"]; ?>">
                        Chọn mua
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php
        }
    } 
?>
              
</div>
<?php 
    if($i == 0) 
        echo "<p>Danh mục hiện chưa có sản phẩm.</p>";
    else 
?>
        <div class="text-end mb-2">
            <a class="text-warning text-decoration-none fw-bolder" href="index.php?action=group&id=<?php echo $d["id"]; ?>">
                Xem thêm 
                <?php echo $d["tendanhmuc"]; ?>
            </a>
        </div>
<?php
} 
?>

<?php
include("inc/bottom.php");
?>
<style>
/* Card Styling */
.card {
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    transition: transform 0.3s ease, box-shadow 0.3s ease, filter 0.3s ease;
    background: linear-gradient(145deg, #f4f4f4, #e0e0e0);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.card:hover {
    transform: translateY(-8px); /* Di chuyển card lên nhẹ */
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2); /* Bóng đổ mạnh hơn */
    filter: brightness(1.1); /* Làm sáng hơn khi hover */
}

/* Parallax effect for product image */
.card-img-top {
    transition: transform 0.5s ease-out;
}

.card:hover .card-img-top {
    transform: scale(1.1) translateY(-10%); /* Hiệu ứng phóng to ảnh với parallax */
}

/* Sale badge */
.badge {
    font-size: 0.9rem;
    padding: 0.3rem 0.6rem;
    border-radius: 5px;
    background-color: #f39c12; /* Màu vàng đẹp cho giảm giá */
    font-weight: bold;
}

/* Product name */
h5.fw-bolder {
    font-size: 1.25rem;
    color: #2c3e50; /* Màu sắc cho tên sản phẩm */
    transition: color 0.3s ease;
    font-family: 'Roboto', sans-serif;
}

h5.fw-bolder:hover {
    color: #e74c3c; /* Màu đỏ khi hover */
    text-decoration: underline; /* Gạch chân khi hover */
}

/* Product price */
.text-muted {
    font-size: 0.9rem;
    color: #7f8c8d;
}

.text-danger {
    font-size: 1.2rem;
    font-weight: bold;
    color: #e74c3c; /* Màu đỏ cho giá bán */
}

/* Reviews */
.bi-star-fill {
    font-size: 1.5rem;
    color: #f39c12; /* Màu vàng cho sao */
}

/* Button */
.btn-hover-info {
    position: relative;
    border-radius: 25px;
    padding: 12px 24px;
    font-weight: bold;
    transition: all 0.3s ease;
    background-color: #3498db; /* Màu xanh dương cho nút */
    color: white;
    border: 2px solid transparent;
    box-shadow: 0 4px 10px rgba(52, 152, 219, 0.3);
}

.btn-hover-info:hover {
    background-color: #2980b9; /* Màu xanh đậm khi hover */
    color: white;
    border-color: #2980b9;
    transform: translateY(-3px); /* Nâng lên nhẹ khi hover */
    box-shadow: 0 8px 20px rgba(52, 152, 219, 0.4); /* Bóng đổ mạnh hơn */
}

/* Hover effect for button */
.btn-outline-info {
    border: 2px solid #3498db;
    color: #3498db;
}

.btn-outline-info:hover {
    background-color: #3498db;
    color: white;
}

/* Animate button text */
.btn-hover-info {
    animation: textShift 1s ease-in-out infinite alternate;
}

@keyframes textShift {
    0% {
        transform: translateX(0);
    }
    50% {
        transform: translateX(10px);
    }
    100% {
        transform: translateX(0);
    }
}

/* Hover effect for product name and details */
.card-body .text-center a {
    position: relative;
    transition: color 0.3s ease;
}

.card-body .text-center a:hover {
    color: #e74c3c; /* Màu đỏ khi hover */
}

/* Reviews stars hover effect */
.bi-star-fill {
    transition: transform 0.3s ease, color 0.3s ease;
}

.bi-star-fill:hover {
    transform: scale(1.2);
    color: #ffcc00; /* Chuyển sang màu vàng khi hover */
}

/* Responsive layout */
@media (max-width: 768px) {
    .card {
        margin-bottom: 20px;
    }

    /* Giảm kích thước chữ trên mobile */
    h5.fw-bolder {
        font-size: 1.1rem;
    }

    .text-danger {
        font-size: 1rem;
    }

    .btn-hover-info {
        font-size: 0.9rem;
        padding: 10px 18px;
    }
}

</style>