<?php
include "view/header.php";
include "model/sanpham.php";
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
        
        default:
            include "view/home.php";
            break;
        }
    }else{
        include "view/home.php";
    }
include "view/footer.php";
?>