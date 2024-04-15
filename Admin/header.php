<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Quản Trị</title>
    <link rel="stylesheet" href="../css/styleadmin.css">
    <style>
        .formcontent input[type="email"]{
  width: 50%;
  border: 1px #ccc solid;
  padding: 5px 10px;
  border-radius: 5px;
}
body{
    background-color:#CCFFFF;
}
.cart table{
    width: 100%;
    border-collapse: collapse;
   text-align:center;
}

.cart table td{
    padding: 10px 20px;
    border: 1px #ccc solid;
}
.cart table th{
    padding: 10px 20px;
    border: 1px #ccc solid;
    background-color:#eee;
}
.contentDM{
  position: absolute;
  top: 0px;
  left: 400px;
  width: calc(100%-400px);
  padding-left: 100px;
}
.contentDMCTHD{
  position: absolute;
  top: 100px;
  left: 400px;
  width: calc(100%-400px);
  padding-left: 100px;
}

    </style>
</head>
<body>
        <nav> 
            <div class="imagelogo">
            <img class="logo" src="../image/logo.png" alt=""> 
            </div>   
           
            <ul>
           
                <li><a href="index.php">
                    <ion-icon name="home-outline"></ion-icon>
                    Home
                </a></li>
                <li><a href="index.php?act=dsdm">
                    <ion-icon name="folder-open-outline"></ion-icon>
                    Quản Lý Danh Mục
                </a></li>
                <li><a href="index.php?act=listsp">
                    <ion-icon name="shirt-outline"></ion-icon>
                    Quản Lý Sản Phẩm
                </a></li>
                <li><a href="index.php?act=dskh">
                    <ion-icon name="person-circle-outline"></ion-icon>
                    Quản Lý Tài Khoản
                </a></li>
                <li><a href="index.php?act=dsbl">
                    <ion-icon name="chatbox-outline"></ion-icon>
                    Quản Lý Bình Luận
                </a></li>
                <li><a href="index.php?act=listbill">
                    <ion-icon name="bag-handle-outline"></ion-icon>
                    Quản Lý Đơn Hàng
                </a></li>
                <li><a href="index.php?act=thongke">
                    <ion-icon name="cellular-outline"></ion-icon>    
                    Thống Kê
                </a></li>
            </ul>
        </nav>
       