<div class="boxtitle">Giỏ Hàng</div>
                <div class="row boxcontent">
                    <div class="cart">
                    <table>
                    
                    
                   <?php
                   
                   if(empty($_SESSION['mycart'])){
                    $_SESSION['mycart']=[];
                   }else{
                    viewcart(1);
                   }
                //    var_dump($_SESSION['mycart']);
                    // var_dump($_SESSION['mycart']);
                   ?>
                    </div>
                
                </table>
                <?php if(isset($_SESSION['user']) && $_SESSION['mycart']!=""){?>
                <div class="row bill">
                    <div class="btn">
                    <a href="index.php?act=bill">
                        <input type="submit" value="Tiếp tục đặt hàng">
                    </a>
                    <a href="index.php?act=deletecart">
                        <input type="button" value="Xóa giỏ hàng">
                    </a>
                    </div>
                 
                </div>
                </div>
                </div>
                </div>
                <?php } ?>
                </div> 
            
            