        <div class="ctsp">
        <?php
                extract($onesp);
                $hinh=$img_path.$img;
                if(isset($cart) && is_array($cart)){
                    extract($cart);
                $size=get_size_product($cart['size']);
                }
                ?>
            <div class="ctsp1">
                <img  style="width: 470px;height: 470px;" src="<?=$hinh?>" alt=""> 
            </div>
            <div class="ctsp2">
            
                <h2><?=$name_sanpham?></h2><br>
                Product code:<?=$id_sanpham?> <br><br>
                <p style="font-size: 20px; color: red;"><?=$gia."đ"?></p> <br>
                <form action="index.php?act=addtocart" method="post" enctype="multipart/form-data">
                KÍCH THƯỚC <br> <br>
                <div>
                <input type="radio" value="M" name="size" checked>
                <label for="">M</label>
                </div>
                <div>
                <input type="radio" value="L" name="size">
                <label for="">L</label>
                </div>
                <div>
                <input type="radio" value="XL" name="size">
                <label for="">XL</label>
                </div>
                <div>
                <input type="radio" value="XXL" name="size">
                <label for="">XXL</label>
                </div>
                <br> <br>
                SỐ LƯỢNG <br>
                <div class="quantity">
                <button class="minus-btn" type="button">-</button>
                    <input type="text" name="soluong" class="qty-input" value="<?=$soluong?>">
                    <button class="plus-btn" type="button">+</button>
                    <input type="hidden" name="id" value="<?=$id_sanpham?>">
                    <input type="hidden" name="name" value="<?=$name_sanpham?>">
                    <input type="hidden" name="image" value="<?=$img?>">
                    <input type="hidden" name="kichco" value="<?if(isset($size)) echo $size?>">
                    <input type="hidden" name="price" value="<?=$gia?>">
                    <input class="addcart" type="submit" name="addtocart" value="+Thêm vào giỏ hàng">
                  
                | 
                </div>
                </form>
                
                <br>
                <br>
                <div class="ctsp3">
                    <h3>MÔ TẢ SẢN PHẨM</h3><br> <br>
                    <?=$mota?>
                    <!-- - Chất vải: Cotton <br><br>
                    - Form chuẩn, thoải mái <br><br>
                    - Hình ảnh chân thật, sản phẩm đúng như mô tả <br><br>
                    Đường may rất tỉ mỉ, chắc chắn. <br> <br>

                    CHẤT LIỆU SẢN PHẨM <br> <br>

                    Chất vải : Cotton mềm mịn, bền. Khách hàng phối với Jeans , Kaki, Short đều được. Mặc dạo phố hay
                    đến các buổi tiệc đều mang đến sự thoải mái, tự tin đẳng cấp dành cho khách hàng <br> <br>

                    CHÍNH SÁCH VẬN CHUYỂN <br><br>

                    Miễn phí vận chuyển đơn hàng trên 500.000đ <br> <br>

                    CHÍNH SÁCH ĐỔI TRẢ <br> <br>

                    - Đổi/ Trả trong vòng 7 ngày kể từ khi nhận hàng <br>
                    - Miễn phí đổi trả nếu lỗi sai sót từ phía FEAER <br> -->
                </div>
            </div>
        </div>

        <div class="binhluan">
            <h2>Bình Luận</h2> <br>
            
            <div class="row mb">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                <script>
                $(document).ready(function(){
                    $("#binhluan").load("view/binhluan/binhluanform.php", {idpro:<?=$idsp?> });
                });
                </script>
                 <div class="row" id="binhluan">
                    
                </div>
                </div>
           
        </div>
        <br><br>
        <div class=splq><h2>SẢN PHẨM LIÊN QUAN</h2></div>
        <div class="sanphamall">
        
        <?php
                 foreach ($sp_cungloai as $sp_cungloai) {
                    $i=0;
                    extract($sp_cungloai);
                    $linksp="index.php?act=sanphamct&idsp=".$id_sanpham;
                    $hinh=$img_path.$img;
                    echo '<div class="sp1">
                    <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>   
                   <a class="namesp" href="'.$linksp.'"><p>'.$name_sanpham.'</p></a> 
                    <span class="giasp">'.$gia.'đ</span>
                    <form action="" method="post" class="variants" id="" enctype="multipart/form-data">
                        <button class="giohang" title="Thêm vào giỏ hàng">
                            + Thêm vào giỏ hàng
                        </button>
                    </form>
                </div>';
                    $i+=1;
                  }
                
                ?>
        </div>