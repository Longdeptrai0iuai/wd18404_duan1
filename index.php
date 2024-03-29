<?php
ob_start();
require_once "config.php";
session_start();
include "view/header.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/danhmuc.php";
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
        case 'sanphamct':
            if(isset($_GET['idsp']) && ($_GET['idsp'])>0){
                $idsp=$_GET['idsp'];
                $onesp= load_one_sanpham($idsp);
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
                    $_SESSION['username']=$checkuser;
                    // $thongbao="Bạn đã đăng nhập thành công!";
                    header('location: index.php');
                }else{
                    $thongbao="Tài khoản không tồn tại, vui lòng kiểm tra hoặc đăng kí";
                    echo $thongbao;die;
                }
            }    
            
            break;
        case 'login':
            include "view/user/dangnhap.php";
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
        default:
            include "view/home.php";
            break;
        }
    }else{
        include "view/home.php";
    }
include "view/footer.php";
?>