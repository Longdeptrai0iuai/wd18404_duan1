<h2 class="hoso">Hồ Sơ</h2>
<?php
    if(isset($_SESSION['user']) &&(is_array($_SESSION['user']))){
        extract($_SESSION['user']);
    }
?>

<form action="index.php?act=edit_taikhoan" method="post">
    <div class="fdn1">
    <label>Tên đăng nhập</label><br>
    <input type="text" name="username" value="<?=$username?>"><br>
    </div>
  <div class="fdn2">
  <label >Password</label><br>
  <input type="password" name="password" value="<?=$password?>"><br>
  <label >Họ và Tên</label><br>
  <input type="text" name="name" value="<?=$name?>"><br>
  <label class="fdn3" >Email</label><br>
  <input type="email"  name="email" value="<?=$email?>" ><br>
  <label >Địa Chỉ</label><br>
  <input type="text" name="address" value="<?=$address?>"><br>
  <label class="fdn4" >Số điện thoại</label><br>
  <input type="int" name="phone" value="<?=$phone?>"><br>
  <input type="hidden" name="id" value="<?=$idtk?>">
  <input type="submit" value="Cập Nhật" name="capnhat">
  </div>
  
</form>
<?php
                if(isset($thongbao)&& $thongbao!=""){
                    echo $thongbao;
                }
                ?>