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
    font-weight:600;
   
}
.khung1{
    width: 100%;
    height: 200px;
    display: flex;
    padding: 0px 90px;
    position: relative;
}
.logo3{
    width: 300px;
    margin: 110px 50px;
}
.left{
    position: absolute;
    top:130px;
    right:200px;

}
.left span{
    font-size: 30px;
}
.logo1 span{
    font-size: 30px;
    position: absolute;
    top:130px;
    left:150px;
}
.logo1 form input{
    position: absolute;
    top:130px;
    left:200px;
    height:30px;
    width:300px;
    border:none;
    border-bottom:2px solid #000;
    background:transparent;
    outline:0;
}
    </style>
</head>

<body>
    <div class="khungto">
        <div class="khung1">
            <div class="logo1">
                <form action="" method="get" id="">
                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" placeholder="Tìm kiếm..." value="" maxlength="70"
                        name="query" id="search">
                </form>
                <!-- <span><i class="fa-solid fa-magnifying-glass"></i></span>  -->
            </div>
            <div class="logo2">
                <img src="img/logo.png" alt="">
            </div>
                <div class="logo3">
                    <div class="left">
                   <button></button> <span><i class="fa-regular fa-user"></i></span>
                <button><span><i class="fa-regular fa-heart"></i></span></button>    
                    <span><i class="fa-solid fa-cart-shopping"></i></span>
                    </div>
                </div>
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
            <!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <img src="image/banner1.webp" style="width:100%;height: 600px;">
</div>

<div class="mySlides fade">
  <img src="image/slide-img1.webp" style="width:100%;height: 600px;">
</div>

<div class="mySlides fade">
  <img src="image/slide-img3.webp" style="width:100%;height: 600px;">
</div>
<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>
            <br>
            <br>
            <img style="width: 100%;height: 200px;" src="img/banner2.png" alt="">
        </header>