<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Admin</title>
    <link rel="stylesheet" href="../css/styleadmin.css"> 
    <style>
        .cart table {
    width: 70%;
    border-collapse: collapse;
    text-align: center;
    margin-left: 50px;
}

.cart table td {
    padding: 10px 20px;
    border: 1px #ccc solid;
}

.cart table th {
    padding: 10px 20px;
    border: 1px #ccc solid;
    background-color: #eee;
}
h2.InforBill {
    font-size: 30px;
    padding-left: 50px;
}
.imgad {
    height: 80px;
    width: 80px;
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
                <li><a href="index.php?act=dssp">
                    <ion-icon name="shirt-outline"></ion-icon>
                    Quản Lý Sản Phẩm
                </a></li>
                <li><a href="index.php?act=dstk">
                    <ion-icon name="person-circle-outline"></ion-icon>
                    Quản Lý Tài Khoản
                </a></li>
                <li><a href="index.php?act=dsbl">
                    <ion-icon name="chatbox-outline"></ion-icon>
                    Quản Lý Bình Luận
                </a></li>
                <li><a href="index.php?act=dsdh">
                    <ion-icon name="bag-handle-outline"></ion-icon>
                    Quản Lý Đơn Hàng
                </a></li>
                <li><a href="index.php?act=thongke">
                    <ion-icon name="cellular-outline"></ion-icon>    
                    Thống Kê
                </a></li>
            </ul>
        </nav>
       