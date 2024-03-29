<?php
// function load_all_taikhoan(){
//     $sql="select * from taikhoan order by idtk asc";
//     $listtaikhoan=pdo_query($sql);
//     return $listtaikhoan;
// }
// function load_one_taikhoan($idtk){
//     $sql="select*from taikhoan where idtk = ".$idtk;
//     $taikhoan = pdo_query_one($sql);
//     return $taikhoan;
// }
// function delete_taikhoan($idtk){
//     $sql="delete from taikhoan where idtk=".$idtk;
//     pdo_query($sql);
// }
function insert_taikhoan($username,$password,$name,$email,$phone){
    $sql="insert into taikhoan(username,password,name,email,phone) values('$username','$password','$name','$email','$phone')";
    pdo_query($sql);
}
function checkuser($username,$password){
    $sql="select * from taikhoan where username='".$username."' and password='".$password."'";
    $tk=pdo_query_one($sql);
    return $tk;
}
// function checkemail($email){
//     $sql="select * from taikhoan where email='".$email."'";
//     $tk=pdo_query_one($sql);
//     return $tk;
// }
// function update_taikhoan($idtk,$user,$pass,$email,$address,$phone,$role){
//       $sql="update taikhoan set user='".$user."',pass='".$pass."',email='".$email."',address='".$address."',phone='".$phone."',role='".$role."' where idtk=".$idtk;
//     pdo_execute($sql);
// }
?>