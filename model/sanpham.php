<?php
function insert_sanpham($tensp,$hinh,$mota,$giasp,$iddm){
    $sql="INSERT INTO sanpham(name_sanpham,img,mota,gia,iddm) values('$tensp','$hinh','$mota','$giasp','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id_sanpham){
    $sql="delete from sanpham where id_sanpham=".$id_sanpham;
    pdo_query($sql);
}
function load_all_sanpham($kyw,$iddm){
    $sql="select * from sanpham where 1"; 
    if($kyw!=""){
        $sql.=" and name_sanpham like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."' ";
    }
    $sql.=" order by id_sanpham desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function load_all_sanpham_home(){
    $sql="select * from sanpham where 1 order by id_sanpham desc limit 0,8"; 
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function load_all_sanpham_somi(){
    $sql="select * from sanpham where iddm = 4 order by id_sanpham desc limit 0,10"; 
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
// function load_ten_danh_muc($iddm){
//     if($iddm>0){
//         $sql="select*from danhmuc where id = ".$iddm;
//         $dm = pdo_query_one($sql);
//         extract($dm);
//         return $name;
//     }else {
//         return "";
//     }
    
// }
// function load_sanpham_cung_loai($idsp,$iddm){
//     $sql="select*from sanpham where iddm=".$iddm." AND id_sanpham <> ".$idsp;
//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// }

function update_sanpham($idsp,$tensp,$hinh,$giasp,$mota,$iddm){
    if($hinh!=""){
        $sql="update sanpham set iddm='".$iddm."',name_sanpham='".$tensp."',img='".$hinh."',gia='".$giasp."',mota='".$mota."' where id_sanpham=".$idsp;

    }else
    $sql="update sanpham set iddm='".$iddm."',name_sanpham='".$tensp."',gia='".$giasp."',mota='".$mota."' where id_sanpham=".$idsp;
    pdo_execute($sql);
}

?>