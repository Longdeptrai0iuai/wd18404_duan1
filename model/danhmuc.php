<?php
function insert_danhmuc($tenloai){
    $sql="INSERT INTO danhmuc(name_danhmuc) values('$tenloai')";
    pdo_execute($sql);
}
function delete_danhmuc($iddm){
    $sql="delete from danhmuc where id_danhmuc=".$iddm;
    pdo_query($sql);
}
function load_all_danhmuc(){
    $sql="select* from danhmuc order by name_danhmuc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function load_one_danhmuc($iddm){
    $sql="select*from danhmuc where id_danhmuc = ".$iddm;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($iddm,$tenloai){
    $sql="update danhmuc set name_danhmuc='".$tenloai."'where id_danhmuc=".$iddm;
    pdo_execute($sql);
}

?>