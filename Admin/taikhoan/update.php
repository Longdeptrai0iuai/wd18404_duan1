<div class="contentDM">
<?php
    if(is_array($taikhoan)){
        extract($taikhoan);
    }
 
?>
<div class="row formtitle">
            <h1>Cập Nhật Tài Khoản</h1>
        </div>
       
        <div class="row formcontent">
        <form action="index.php?act=update_taikhoan" method="post"> 
                <div class="row mb10">
                    User <br>
                <input type="text" name="user" value="<?php echo $username?>">
                <div class="row mb10">
                    Pass <br>
                <input type="text" name="pass" value="<?php echo $password?>">
                <div class="row mb10">
                    Email <br>
                    <input type="email" name="email" value="<?=$email?>">
                </div>  
                <div class="row mb10">
                    Name <br>
                    <input type="text" name="name" value="<?=$name?>">
                </div>   
                <div class="row mb10">
                    Địa chỉ <br>
                <input type="text" name="address" value="<?=$address?>">
                </div>
                <div class="row mb10">
                    Điện Thoại <br>
                <input type="text" name="phone" value="<?=$phone?>">
                </div>
                <div class="row mb10">
                    Vai trò  <br>
                <select name="role">
                        <option value="1" <?php echo ($role ==1) ?'selected':''?>>Admin</option>
                         <option value="0" <?php echo ($role ==0) ?'selected':''?>>User</option>
                </select>
                </div>
                <div class="row mb10">
                    <input type="hidden" name="id" value="<?php echo $idtk?>">
                    <input type="submit" name="capnhat" value="Cập nhật">
                    <input type="reset" value="Nhập Lại">
                    
                </div>
            <?php
            if(isset($thongbao) && $thongbao!="") echo $thongbao;
            ?>
            </form>
        </div>
    </div>
</div>