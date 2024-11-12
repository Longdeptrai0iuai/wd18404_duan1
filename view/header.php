<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../css/styletrangchu.css" />
</head>

<body>
    <div class="khungto">
        <div class="khung1">
            <div class="logo1">
                <form action="index.php?act=searchproduct" method="post" id="">
                    <input type="text" placeholder="Tìm kiếm..." value="" maxlength="70"
                        name="kyw" id="search">
                        <input type="submit" value="" name="timkiem">
                </form>
                <!-- <span><i class="fa-solid fa-magnifying-glass"></i></span>  -->
            </div>
            <div class="logo2">
                <img src="img/logo.png" alt="">
            </div>
            <?php
            if(isset($_SESSION['user'])){
                extract($_SESSION['user']);
                            ?>
                <div class="logo3">
                    <div class="left">
                        <div class="user">
                        <a class="iconuser" href="index.php?act=inforuser"><span><i class="fa-regular fa-user">
                        </i></span></a> <p class="nameuser"><?php if(isset($username)) echo $username?></p>
                        <div class="informationUser">
                <ul>         
                <li><a href="index.php?act=inforuser">
                <ion-icon name="person-circle-outline"></ion-icon>
                    Thông tin cá nhân
                </a></li>
                <li><a href="index.php?act=inforuser">
                <?php
                if($role==1){?>
                            <li><a target = "_ blank" href="admin/index.php">
                            <ion-icon name="people-circle-outline"></ion-icon>   
                            Đăng nhập admin</a></li>
                            <?php }?>
                </a></li>
                <li><a href="index.php?act=mybill">
                <ion-icon name="bag-handle-outline"></ion-icon>
                    Đơn Mua
                </a></li>
                <li><a onclick="return confirm('Bạn có muốn đăng xuất không?')" href="index.php?act=thoat">
                <ion-icon name="log-out-outline"></ion-icon>
                    Đăng Xuất
                </a></li>
                </ul>
            </div>
                        </div>        

                <span><i class="fa-regular fa-heart"></i></span>    
                   <a href="index.php?act=addtocart"><span><i class="fa-solid fa-cart-shopping"></i></span>
                    
                </a> 
                    </div>
                </div>
                <?php   
                        }else{
                        ?>
                        <div class="logo3">
                    <div class="left">
                <a href="index.php?act=login"><span><i class="fa-regular fa-user">
                </i></span></a> 
                <ion-icon name="accessibility-outline"></ion-icon>
                
                <span><i class="fa-regular fa-heart"></i></span>    
                    <span><i class="fa-solid fa-cart-shopping"></i></span>
                    </div>
                </div>
                <?php } ?>
        </div>

        <nav>
            <ul>
                <li><a href="index.php">TRANG CHỦ</a></li>
                <li><a href="index.php?act=gioithieu">GIỚI THIỆU</a></li>
                <li><a href="#">HÀNG MỚI VỀ</a></li>
                <li><a href="#">LIÊN HỆ</a></li>
                <li><a href="index.php?act=listsp">TẤT CẢ SẢN PHẨM</a></li>
            </ul>
        </nav>
        <div class="boxs">
            <div class="box1"></div>
            <div class="box1"></div>
            <div class="box1"></div>
        </div>


