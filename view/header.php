<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="<?= BASE_URL?>css/styletrangchu.css" />
    <style>
        *{margin: 0;padding: 0;box-sizing: border-box;
font-family: sans-serif;}
.sl{
    position: absolute;
    top:0;
    right:0;
    padding-right:300px;
    padding-top:50px;
}
.formloc{
    position: relative;
}
.sl select{
    height:40px;
    font-size:15px;
    width: 160px;
}
.sanpham{
    width: 100%;
    height: 1200px;
    padding: 40px 0;
    display: grid;
    grid-template-columns:1fr 1fr 1fr;
    padding-left:150px ;
}
.sanphamall{
    width: 100%;
    max-height: 1800px;
    padding: 40px 0;
    display: grid;
    grid-template-columns:1fr 1fr 1fr;
    padding-left:150px ;
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
    height: 40px;
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
.user{
    position: absolute;
    top:0px;
    right:-50px;
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
.logo1 form input[type=text]{
    position: absolute;
    top:130px;
    left:200px;
    height:30px;
    width:200px;
    border:none;
    border-bottom:2px solid #000;
    background:transparent;
    outline:0;
}
.tintuc{
    padding-top: 350px;
    width: 100%;
    height: 950px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    position: relative;
}
.khungbe1 {
    width: 500px;
    height: 600px;
    overflow:hidden;
    margin-left:200px;
}
.khungbe1 img{
    width: 500px;
    height: 600px;
    transition: all .3s ease;
}
.khungbe1 img:hover{
    transform: scale(1.3);
}
.khungbe2 {
    width: 500px;
    height: 600px;
    overflow:hidden;
    margin-left:50px;
}
.khungbe2 img{
    width: 500px;
    height: 600px;
    transition: all .3s ease;
}
.khungbe2 img:hover{
    transform: scale(1.3);
}

.conTent{
    padding-top:50px;
}
.boxs{
    display: flex;
    margin: 0;
    margin-top: 10px;
  }
  .box1{
    height: 60px;
    width: 670px;
    background-color:#d7d4d4;
   margin: 0 1px;
  }
  .ctsp{
    display: flex;
    width: 100%;
    margin-top:30px;
}
.allsp{
    text-align:center;
    padding: 30px;
}
.giohang{
    background-color: white;
    border: 1px solid black;
    border-radius: 5px;
    height:25px;
    width: 150px;
}
.giohang:hover{
    background-color: red;
    color:white;
}
.left a{
    color:black;
}
.tt1{
    text-align:center;
    padding:20px;
}
/* Style inputs */
input[type=text],
 select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
input[type=email],
 select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.fdn2 input[type=int],
 select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.fdn2 input[type=password],
 select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.fdn1{
    text-align:center;
}
.fdn1 label{
    margin-left:-660px
}
.fdn2 label{
    margin-left:-690px
}
.fdn2 .fdn3{
    margin-left:-720px
}
.fdn2 .fdn4{
    margin-left:-670px
}
.fdn2 a{
    text-decoration:none;
    color:red;
}
.fdn2 .forgetpass{
    margin-left:650px;
    text-decoration:none;
    color:red;
}
.fdn2{
    text-align:center;
}
/* Style the submit button */
.fdn2 input[type=submit] {
  width: 50%;
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* Add a background color to the submit button on mouse-over */
.fdn2 input[type=submit]:hover {
  background-color: #45a049;
}
.thongbao{
    color:red;
    padding-left:380px;
    text-decoration:none;
}
.quantity input{
    width: 50px;
    height:20px;
}
.ctsp3{
    width: 95%;
    border: 1px solid black;
    padding: 15px 15px;
    width: 550px;
}
.logo1 input[type="submit"]{
    background-image:url('image/Search-icon.png');
    background-size:30px;
    background-repeat:no-repeat;
    background-position:center;
    background-color:white;
    border: 1px solid white;
    height:50px;
    width:50px;
    position: absolute;
    top:130px;
    left:150px;
}
.sl input[type="submit"]{
    border: 1px solid black;
    background-color:white;
    height:30px;
    width:70px;
}
.resultsearch{
    padding-top:50px;
    padding-left:180px;
    font-size:20px;
}
.informationUser{
    display:none;
    z-index: 1000;
    width: 200px;
    position: absolute;
    top:35px;
    right:5px;
    background-color:#eee;
}
.informationUser ul li a{
    text-decoration:none;
    
}
.informationUser ul li{
    list-style:none ;
}
.nameuser{
    width: 20px;
    position: absolute;
    top:10px;
    right:160px;
}
.iconuser{
    width: 20px;
    position: absolute;
    top:0px;
    right:190px;
}
.user:hover .informationUser{
    display:block;
}
.hoso{
    padding-top:20px;
    padding-bottom:20px;
    padding-left:370px;
    font-size:20px;
}
.cart table{
    width: 70%;
    border-collapse: collapse;
   text-align:center;
   margin-left:150px;
}

.cart table td{
    padding: 10px 20px;
    border: 1px #ccc solid;
}
.boxtitle{
    padding-left:150px;
    padding-top:30px;
    padding-bottom:30px;
    font-size:30px;
}
.bill{
    position: relative;
}
.btn input[type="submit"]{
    border-radius: 5px;
    padding: 5px 10px;
    height:30px;
    background-color: white;
    border: 1px #ccc solid;
    position: absolute;
    top:10px;
    left:150px;
}
.btn input[type="button"] {
    border-radius: 5px;
    padding: 5px 10px;
    background-color: white;
    border: 1px #ccc solid;
    position: absolute;
    height:30px;
    top:10px;
    left:280px;
}
.delete{
    border-radius: 5px;
    padding: 5px 10px;
    background-color: white;
    border: 1px #ccc solid;
}
.boxcontent input[type="text"]{
    border-radius: 5px;
    padding: 5px 10px;
    background-color: white;
    border: 1px #ccc solid;
    width: 100%;
    margin-left:150px;
    
}
.ttbill{
    padding-left:150px;
}
    </style>
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
                            <li><a href="admin/index.php">
                            <ion-icon name="people-circle-outline"></ion-icon>   
                            Đăng nhập admin</a></li>
                            <?php }?>
                </a></li>
                <li><a href="index.php?act=mybill">
                <ion-icon name="bag-handle-outline"></ion-icon>
                    Đơn Mua
                </a></li>
                <li><a href="index.php?act=listsp">
                <ion-icon name="key-outline"></ion-icon>
                    Đổi Mật Khẩu
                </a></li>
                <li><a href="index.php?act=thoat">
                <ion-icon name="log-out-outline"></ion-icon>
                    Đăng Xuất
                </a></li>
                </ul>
            </div>
                        </div>        

                <span><i class="fa-regular fa-heart"></i></span>    
                   <a href="index.php?act=addtocart"><span><i class="fa-solid fa-cart-shopping"></i></span></a> 
                    </div>
                </div>
                <?php   
                        }else{
                        ?>
                        <div class="logo3">
                    <div class="left">
                <a href="index.php?act=login"><span><i class="fa-regular fa-user">
                </i></span></a> 
                
                <span><i class="fa-regular fa-heart"></i></span>    
                    <span><i class="fa-solid fa-cart-shopping"></i></span>
                    </div>
                </div>
                <?php } ?>
        </div>

        <nav>
            <ul>
                <li><a href="index.php">TRANG CHỦ</a></li>
                <li><a href="">GIỚI THIỆU</a></li>
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


