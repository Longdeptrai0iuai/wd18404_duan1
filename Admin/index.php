<?php
include "function.php";
checkLoginAdmin();
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/cart.php";
include "header.php";
include "global.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            //Ktra xem người dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm mới thành công!!";
            }
            include "danhmuc/add.php";
            break;
        case 'dsdm':
            $listdanhmuc = load_all_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                delete_danhmuc($_GET['iddm']);
            }
            $listdanhmuc = load_all_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                $dm = load_one_danhmuc($_GET['iddm']);
            }
            include 'danhmuc/update.php';
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $tenloai = $_POST['tenloai'];
                $iddm = $_POST['id'];
                update_danhmuc($iddm, $tenloai);
            }
            $listdanhmuc = load_all_danhmuc();
            include 'danhmuc/list.php';
            break;
        case 'addsp':
            //Ktra xem người dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../image/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                } else {
                }
                insert_sanpham($tensp, $hinh, $mota, $giasp, $iddm);
                $thongbao = "Thêm thành công!!";
            }
            $listdanhmuc = load_all_danhmuc();
            include "sanpham/add.php";
            break;
        case 'dssp':
            $listsanpham = load_all_sanpham();
            $listdanhmuc = load_all_danhmuc();
            include "sanpham/list.php";
            break;
        case 'searchsp':
            if (isset($_POST['kyw']) && ($_POST['kyw']) != "") {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_POST['iddm']) && ($_POST['iddm']) > 0) {
                $iddm = $_POST['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = load_all_sanpham_by_danhmuc_and_kyw($iddm, $kyw);
            $listdanhmuc = load_all_danhmuc();
            include "sanpham/searchsp.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = load_all_sanpham();
            include "sanpham/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $sanpham =  load_one_sanpham($_GET['id']);
                $listdanhmuc = load_all_danhmuc();
            }
            include "sanpham/update.php";
            break;
        case 'showsp':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $sanpham =  load_one_sanpham($_GET['id']);
                $listdanhmuc = load_all_danhmuc();
            }
            include "sanpham/show.php";
            break;
        case 'updatesp':
            //Ktra xem người dùng có click vào nút add hay không
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $idsp = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../image/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                } else {
                }
                update_sanpham($idsp, $iddm, $tensp, $giasp, $mota, $hinh);
                $thongbao = "Cập nhật thành công!!";
            }
            $listdanhmuc = load_all_danhmuc();
            $listsanpham = load_all_sanpham();
            include "sanpham/list.php";
            break;
        case 'dstk':
            $listtaikhoan = load_all_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'suatk':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $taikhoan =  load_one_taikhoan($_GET['id']);
            }
            include "taikhoan/update.php";
            break;
        case 'update_taikhoan':
            //Ktra xem người dùng có click vào nút add hay không
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $idtk = $_POST['id'];
                $username = $_POST['user'];
                $password = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $role = $_POST['role'];
                update_taikhoan_admin($idtk, $username, $password,$name, $email, $address, $phone, $role);
                $thongbao = "Cập nhật thành công!!";
            }
            $listtaikhoan = load_all_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'dsbl':
            $listbinhluan = load_all_binhluan();
            include "binhluan/list.php";
            break;
        case 'xoabl':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                delete_binhluan($_GET['id']);
            }
            $listbinhluan = load_all_binhluan();
            include "binhluan/list.php";
            break;
        case 'thongke':
            $listthongke = load_all_thongke();
            include "thongke/list.php";
            break;
        case 'bieudo':
            $listthongke = load_all_thongke();
            include "thongke/bieudo.php";
            break;
        case 'dsdh':
            $listbill = load_all_bill();
            include "bill/listbill.php";
            break;
        case 'suabill':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $bill =  load_one_bill($_GET['id']);
            }
            include "bill/update.php";
            break;
        case 'update_bill':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $id = $_POST['id'];
                $status = $_POST['status'];
                update_bill($id,$status);
                $thongbao = "Cập nhật thành công!!";
            }
            $listbill = load_all_bill();
            include "bill/listbill.php";
            break;
        case 'chitietdonhang':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $ctbill=load_all_Historycart($_GET['id']);
            }
            include "bill/billchitiet.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
