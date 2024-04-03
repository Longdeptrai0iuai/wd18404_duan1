<h2 class="tt1">Đăng kí thành viên</h2>
<form action="index.php?act=dangki" method="post">
    <div class="fdn1">
    <label>Tên đăng nhập</label><br>
    <input type="text" name="username" placeholder="Nhập tên đăng nhập của bạn.."><br>
    </div>
  <div class="fdn2">
  <label >Password</label><br>
  <input type="password" name="password" placeholder="Nhập mật khẩu của bạn.."><br>
  <label >Họ và Tên</label><br>
  <input type="text"  name="name" placeholder="Nhập họ và tên của bạn.."><br>
  <label class="fdn3" >Email</label><br>
  <input type="email"  name="email" placeholder="Nhập email của bạn.."><br>
  <label class="fdn4" >Số điện thoại</label><br>
  <input type="int" name="phone" placeholder="Nhập số điện thoại của bạn.."><br>

  <input type="submit" value="Đăng kí" name="dangki">
  </div>
  
</form>
                <?php
                if(isset($thongbao)&& $thongbao!=""){
                    echo $thongbao;
                }
                ?>
