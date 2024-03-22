<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "header.php";
if(isset($_GET['act'])){
    $act= $_GET['act'];
    switch ($act) {
        case 'adddm':
                //Ktra xem người dùng có click vào nút add hay không
                if(isset($_POST['themmoi']) && $_POST['themmoi']){
                    $tenloai=$_POST['tenloai'];
                    if($tenloai==""){
                        $thongbao='<p class="thongbao">Thêm không thành công, hãy nhập đủ dữ liệu!!</p>';
                    }else{
                        insert_danhmuc($tenloai);
                        $thongbao="Thêm mới thành công!!";
                    }
                }
                include "danhmuc/add.php";
                break;
        case 'dsdm':
            $listdanhmuc=load_all_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if(isset($_GET['iddm']) && $_GET['iddm']>0){
                delete_danhmuc($_GET['iddm']);    
            }
            $listdanhmuc=load_all_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if(isset($_GET['iddm']) && $_GET['iddm']>0){
                $dm=load_one_danhmuc($_GET['iddm']);
            }
            include 'danhmuc/update.php';
            break;
        case 'updatedm':
            if(isset($_POST['capnhat']) && $_POST['capnhat']){
                $tenloai=$_POST['tenloai'];
                $iddm=$_POST['id'];
                update_danhmuc($iddm,$tenloai);
            }
            $listdanhmuc=load_all_danhmuc();
            include 'danhmuc/list.php';
            break;
        case 'addsp':
            //Ktra xem người dùng có click vào nút add hay không
            if(isset($_POST['themmoi']) && $_POST['themmoi']){
                $iddm=$_POST['iddm'];
                $tensp=$_POST['tensp'];
                $giasp=$_POST['giasp'];
                $mota=$_POST['mota'];
                $hinh=$_FILES['hinh']['name'];
                $target_dir = "../image/";
                $target_file = $target_dir.basename($_FILES['hinh']['name']);
                if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)){

                }else{

                }
                if($tensp=="" || $giasp=="" || $mota==""){
                    $thongbao='<p class="thongbao">Thêm không thành công, hãy nhập đủ dữ liệu!!</p>';
                }else{
                    insert_sanpham($tensp,$hinh,$mota,$giasp,$iddm);
                    $thongbao="Thêm thành công!!";
                }
            }
            $listdanhmuc=load_all_danhmuc();
            include "sanpham/add.php";
            break;
        case 'listsp':
            if(isset($_POST['listok']) && ($_POST['listok'])){
                $kyw=$_POST['kyw'];
                $iddm=$_POST['iddm'];
            }else {
                $kyw="";
                $iddm= 0;
            }
            $listdanhmuc=load_all_danhmuc();
            $listsanpham=load_all_sanpham($kyw,$iddm);
            include "sanpham/list.php";
            break;
        case 'xoasp':
            if(isset($_GET['id']) && $_GET['id']>0){
                delete_sanpham($_GET['id']);    
            }
            $listsanpham=load_all_sanpham("",0);
            include "sanpham/list.php";
            break;
        case 'suasp':
            if(isset($_GET['id']) && $_GET['id']>0){
                $sanpham = load_one_sanpham($_GET['id']);
            }
            $listdanhmuc=load_all_danhmuc();
            include 'sanpham/update.php';
            break;
        case 'updatesp':
            if(isset($_POST['capnhat']) && $_POST['capnhat']){
                $iddm=$_POST['iddm'];
                $idsp=$_POST['id'];
                $tensp=$_POST['tensp'];
                $giasp=$_POST['giasp'];
                $mota=$_POST['mota'];
                $hinh=$_FILES['hinh']['name'];
                $target_dir = "../image/";
                $target_file = $target_dir.basename($_FILES['hinh']['name']);
                if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)){

                }else{

                }
                update_sanpham($idsp,$tensp,$hinh,$giasp,$mota,$iddm);
                $thongbao="Cập nhật thành công!!";
            }
            $listdanhmuc=load_all_danhmuc();
            $listsanpham=load_all_sanpham("",0);
            include 'sanpham/list.php';
            break;
        default:
            include "home.php";
            break;
    }
}else{
    include "home.php";
}
include "footer.php";
?>