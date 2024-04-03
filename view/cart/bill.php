<form action="index.php?act=billconfirm" method="post">
            <div class="row mb">
            <div class="boxtitle">Thông Tin Đặt Hàng</div>
            <div class="row boxcontent">
                <table>
                    <?php
                    if(isset($_SESSION['user'])){
                        $name=$_SESSION['user']['name'];
                        $address=$_SESSION['user']['address'];
                        $email=$_SESSION['user']['email'];
                        $phone=$_SESSION['user']['phone'];
                    }else{
                        $name="";
                        $address="";
                        $email="";
                        $phone="";  
                    }
                    
                    ?>
                <tr>
                    <td class="ttbill">Người Đặt Hàng</td>
                    <td><input type="text" name="name" value="<?=$name?>"></td>
                </tr>
                <tr>
                    <td class="ttbill">Địa Chỉ</td>
                    <td><input type="text" name="address" value="<?=$address?>"></td>
                </tr>
                <tr>
                    <td class="ttbill">Email</td>
                    <td><input type="text" name="email" value="<?=$email?>"></td>
                </tr>
                <tr>
                    <td class="ttbill">Điện Thoại</td>
                    <td><input type="text" name="phone" value="<?=$phone?>"></td>
                </tr>
                    
                
                </form>
               
                    
                   
                    </div>
                
                </table>
                </div>
                </div>
            <div class="row mb">
            <div class="boxtitle">Phương Thức Thanh Toán</div>
            <div class="row boxcontent">
                <table>
                    <tr class="ttbill">
                        <td class="ttbill"><input type="radio" value="1" name="pttt" checked>Trả tiền khi nhận hàng  </td>
                        <td><input type="radio" value="2" name="pttt" >Chuyển khoản ngân hàng  </td>
                        <td><input type="radio" value="3" name="pttt" >Thanh toán online</td>
                    </tr>
                </table>
            </div>
            </div>
            <div class="row mb">
            <div class="boxtitle">Đơn Hàng</div>
            <div class="row boxcontent cart">
                
                <div class="cart">
                <table>
                
                
               <?php
                if(isset($_SESSION['mycart'])){
                    viewcart(0);
                   }
               ?>
                </table>
                </div>
                </div>
                </div>
        <div class="row bill ">
            <div class="btn">
            <a href="index.php?act=bill">
                <input type="submit" value="Đồng ý đặt hàng" name="dongydathang">
            </a>
            <a href="index.php?act=deletecart">
                <input type="button" value="Xóa giỏ hàng">
            </a>
            </div>
            
        </div>
                </div>