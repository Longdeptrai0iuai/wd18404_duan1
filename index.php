<?php

session_start();
include "view/header.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/danhmuc.php";
include "model/cart.php";
include "model/pdo.php";
include "global.php";
$spnew=load_all_sanpham_home();
if(isset($_GET['act']) && $_GET['act'] !=""){
    $act=$_GET['act'];
    switch ($act) {
        case 'sanpham':
            if(isset($_POST['kyw']) && ($_POST['kyw'])!=""){
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            if(isset($_GET['iddm']) && ($_GET['iddm'])>0){
                $iddm=$_GET['iddm'];
            }else{
                $iddm=0;
            }
            $dssp=load_all_sanpham($kyw,$iddm);
            $tendm= load_ten_danh_muc($iddm);
            include "view/sanpham.php";
            break;
        case 'searchproduct':
            if(isset($_POST['kyw']) && ($_POST['kyw'])!=""){
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            $dssp=load_all_sanpham_keyword($kyw);
            include "view/searchsp.php";
            break;
        case 'sanphamct':
            if(isset($_GET['idsp']) && ($_GET['idsp'])>0){
                $idsp=$_GET['idsp'];
                $soluong=1;
                $onesp= load_one_sanpham($idsp);
                extract($onesp);
                $sp_cungloai = load_sanpham_cung_loai($idsp,$iddm);
                $cart=load_one_cart($idsp);
                include "view/sanphamct.php";
            }else{
                include "view/home.php";
            }
            break;
        case 'listsp':
            if(isset($_POST['listok']) && ($_POST['listok'])){
                $iddm=$_POST['iddm'];
                if($_POST['iddm']==4){
                    $title="ÁO SƠ MI";
                }
                else if($_POST['iddm']==6){
                    $title="ÁO KHOÁC KAKI";
                }
                else if($_POST['iddm']==5){
                    $title="ÁO PHOLO";
                }else{
                    $title="TẤT CẢ SẢN PHẨM";
                }
            }else {
                $iddm= 0;
            }
            $listdanhmuc=load_all_danhmuc();
            $listsanpham=load_all_sanpham($iddm);     
            include "view/showallsp.php";
            break;
        case 'dangnhap':
            if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                $username=$_POST['username'];
                $password=$_POST['password'];
                $checkuser = checkuser($username,$password);
                if($checkuser){
                    $_SESSION['user']=$checkuser;
                    // $thongbao="Bạn đã đăng nhập thành công!";
                    header('location: index.php');
                }else{
                    $thongbao="Tài khoản không tồn tại, vui lòng kiểm tra hoặc đăng kí";
                    echo $thongbao;
                    include "view/user/dangnhap.php";

                }
            }    
            
            break;
        case 'login':
            include "view/user/dangnhap.php";
            break;
        case 'inforuser':
            include "view/user/edit_user.php";
            break;
        case 'thoat':
            session_unset();
            header('location:index.php');
            break;
        case 'dangki':
            if(isset($_POST['dangki']) && ($_POST['dangki'])){
                $username=$_POST['username'];
                $password=$_POST['password'];
                $name=$_POST['name'];
                $email=$_POST['email'];
                $phone=$_POST['phone'];
                if($username=="" || $password=="" || $name=="" || $email=="" || $phone==""){
                    $thongbao='<p class="thongbao">Đăng kí không thành công, vui lòng nhập đầy đủ thông tin!!</p>';
                }else{
                    insert_taikhoan($username,$password,$name,$email,$phone);
                    $thongbao='<p class="thongbao">Đăng kí thành công!!</p><a class="thongbao" href="index.php?act=login">Đăng nhập ngay</a>';
                }   
            }
            include "view/user/dangki.php";
            break;
        case 'edit_taikhoan':
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                $username=$_POST['username'];
                $password=$_POST['password'];
                $name=$_POST['name'];
                $email=$_POST['email'];
                $address=$_POST['address'];
                $phone=$_POST['phone'];
                $idtk=$_POST['id'];
                if($username=="" || $password=="" || $name=="" || $email=="" || $address==""|| $phone==""){
                    $thongbao='<p class="thongbao">Cập nhật không thành công, vui lòng nhập đầy đủ thông tin!!</p>';
                }else{
                    update_taikhoan_user($idtk,$username,$password,$name,$email,$address,$phone);
                    $_SESSION['user']=checkuser($username,$password);
                    $thongbao='<p class="thongbao">Cập nhật thành công!!</p>';
                } 
            }
            include "view/user/edit_user.php";
            break;
        case 'addtocart':
            if(isset($_POST['addtocart']) && ($_POST['addtocart'])){
                $idsp=$_POST['id'];
                $namesp=$_POST['name'];
                $img=$_POST['image'];
                $price=$_POST['price'];
                $soluong=$_POST['soluong'];
                $size=$_POST['size'];
                $ttien= $soluong* $price;
                $spadd=[$idsp,$namesp,$img,$price,$size,$soluong,$ttien];
                if(isset($_SESSION['user'])){
                    array_push($_SESSION['mycart'],$spadd);
                }else{
                    $_SESSION['mycart']=[];
                    echo '<p class="checkusers">Vui lòng đăng nhập để thực hiện chức năng mua hàng</p>';
                }
            }
            include "view/cart/viewcart.php";
            break;
        case 'deletecart':
            if(isset($_GET['idcart'])){
                array_splice($_SESSION['mycart'],$_GET['idcart'],1);
            }else{
                $_SESSION['mycart']=[];
            }
            header('location:index.php?act=addtocart');
            break;
        case 'bill':
            include "view/cart/bill.php";
            break;
        case 'billconfirm':
            if(isset($_POST['dongydathang']) && ($_POST['dongydathang'])){
                if(isset($_SESSION['user'])) $iduser=$_SESSION['user']['idtk'];
                else $idtk=0;
            $name=$_POST['name'];
            $address=$_POST['address'];
            $email=$_POST['email'];
            $pttt=$_POST['pttt'];
            $phone=$_POST['phone'];
            $ngaydathang=date('d/m/Y');
            $tongdonhang=tongdonhang(); 
            $idbill=insert_bill($iduser,$name,$email,$address,$pttt,$phone,$ngaydathang,$tongdonhang);
            foreach ($_SESSION['mycart'] as $cart) {
                $idcart=$cart[0];
                insert_cart($_SESSION['user']['idtk'],$idcart,$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$cart[6],$idbill);
                }
            }
            $_SESSION['mycart']=[];
            $bill=load_one_bill($idbill);
            $billct=load_all_cart($idbill);
            include "view/cart/billconfirm.php";
            break;
        case 'mybill':
            $listbill=load_all_bill($_SESSION['user']['idtk']);
            include "view/cart/mybill.php";
            break;
        case 'chitietdonhang':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $ctbill=load_all_Historycart($_GET['id']);
                $bill=load_one_billct($_SESSION['user']['idtk']);
              }
            include "view/cart/billchitiet.php";
            break;
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        default:
            include "view/home.php";
            break;
        }
    }else{
        include "view/home.php";
    }
include "view/footer.php";
?>