<?php
function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
    $sql="INSERT INTO binhluan(noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser',$idpro,'$ngaybinhluan')";
    pdo_execute($sql);
}
function load_all_binhluan($idpro){
    $sql="select* from binhluan where 1 ";
    if($idpro >0) $sql.=" AND idpro='".$idpro."'";
    $sql.=" order by idbl desc";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}
function delete_binhluan($idbl){
    $sql="delete from binhluan where idbl=".$idbl;
    pdo_query($sql);
}
?>
