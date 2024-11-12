<?php
function insert_sanpham($tensp,$hinh,$mota,$giasp,$iddm){
    $sql="INSERT INTO sanpham(name_sanpham,img,mota,gia,id_danhmuc) values('$tensp','$hinh','$mota','$giasp','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($idsp){
    $sql="delete from sanpham where id_sanpham=".$idsp;
    pdo_query($sql);
}
function load_all_sanpham($iddm = ""){
    $sql="select * from sanpham where 1"; 
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."' ";
    }
    $sql.=" order by id_sanpham desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function load_all_sanpham_keyword($kyw){
    $sql="select * from sanpham where 1"; 
    if($kyw!=""){
        $sql.=" and name_sanpham like '%".$kyw."%'";
    }
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function get_iddm($n){
    switch ($n) {
        case '4 ':
          $tt="Áo sơ mi";
          break;
        case '5':
            $tt="Áo pholo";
            break;
        case '6':
            $tt="Áo khoác kaki";
            break;
        case '10':
            $tt="Quần Jean";
            break;
        default:
            $tt="Chưa có iddm";
            break;
    }
    return $tt;
}
function load_all_sanpham_home(){
    $sql="select * from sanpham where 1 order by id_sanpham desc limit 0,9"; 
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
// function load_all_sanpham_top10(){
//     $sql="select * from sanpham where 1 order by luotxem desc limit 0,10"; 
//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// }
function load_one_sanpham($idsp){
    $sql="select*from sanpham where id_sanpham = ".$idsp;
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_ten_danh_muc($iddm){
    if($iddm>0){
        $sql="select*from danhmuc where id = ".$iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    }else {
        return "";
    }
    
}
function load_sanpham_cung_loai($idsp,$iddm){
    $sql="select*from sanpham where iddm=".$iddm." AND idsp <> ".$idsp;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($idsp,$iddm,$tensp,$giasp,$mota,$hinh){
    if($hinh!=""){
        $sql="update sanpham set iddm='".$iddm."',name_sanpham='".$tensp."',gia='".$giasp."',mota='".$mota."',img='".$hinh."' where id_sanpham=".$idsp;

    }else
    $sql="update sanpham set iddm='".$iddm."',name_sanpham='".$tensp."',gia='".$giasp."',mota='".$mota."' where id_sanpham=".$idsp;
    pdo_execute($sql);
}

?>