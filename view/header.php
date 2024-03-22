<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="css/styletrangchu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .sanpham{
    width: 100%;
    height: 800px;
    padding: 40px 0;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    padding-left:50px ;
}
.namesp{
    text-decoration:none;
    font-size:20px;
    font-weight:600;
    color:black;
}
.giasp{
    font-size:20px;
    font-weight:600;
    color:black;
}
.namesp:hover{
    color:red;
}
nav ul {
    width: 100%;
    height: 74px;
    list-style-type: none;
    display: flex;
    padding-left:70px;
}
    </style>
</head>

<body>
    <div class="khungto">
        <div class="khung1">
            <div class="logo1">
                <form action="" method="get" id="">
                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input style="border: none;" type="text" placeholder="Tìm kiếm..." value="" maxlength="70"
                        name="query" id="search">
                    <hr>
                </form>
                <!-- <span><i class="fa-solid fa-magnifying-glass"></i></span>  -->
            </div>
            <div class="logo2">
                <img src="img/logo.png" alt="">
            </div>
            <center>
                <div class="logo3">
                    <span><i class="fa-regular fa-user"></i></span>
                    <span><i class="fa-regular fa-heart"></i></span>
                    <span><i class="fa-solid fa-cart-shopping"></i></span>
                </div>
            </center>
        </div>

        <nav>
            <ul>
                <li><a href="index.php">TRANG CHỦ</a></li>
                <li><a href="index.php?act=aosomi">ÁO SƠ MI</a></li>
                <li><a href="#">ÁO PHOLO</a></li>
                <li><a href="#">HÀNG MỚI VỀ</a></li>
                <li><a href="#">TẤT CẢ SẢN PHẨM</a></li>
            </ul>
        </nav>

        <header>
            <img style="width: 100%;height: 400px;" src="img/banner.png" alt="">
            <br>
            <br>
            <img style="width: 100%;height: 200px;" src="img/banner2.png" alt="">
        </header>