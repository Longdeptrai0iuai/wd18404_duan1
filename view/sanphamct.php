        <div class="ctsp">
        <?php
                extract($onesp);
                $img=$img_path.$img;
                ?>
            <div class="ctsp1">
                <img  style="width: 470px;height: 470px;" src="<?=$img?>" alt=""> 
            </div>
            <div class="ctsp2">
            
                <h2><?=$name_sanpham?></h2><br>
                Product code:<?=$id_sanpham?> <br><br>
                <p style="font-size: 20px; color: red;"><?=$gia."đ"?></p> <br>
                <form action="" method="post">
                KÍCH THƯỚC <br> <br>
                <div data-value="M">
                <input style="border-radius:50%;" value=" M " type="radio" name="size">
                <label for="">M</label>
                </div>
                <div data-value="L">
                <input style="border-radius:50%;" value=" L " type="radio" name="size">
                <label for="">L</label>
                </div>
                <div data-value="XL">
                <input style="border-radius:50%;" value=" XL " type="radio" name="size">
                <label for="">XL</label>
                </div>
                <div data-value="XXL">
                <input style="border-radius:50%;" value=" XXL " type="radio" id="sizeXXL">
                <label for="">XXL</label>
                </div>
                <br> <br>
                SỐ LƯỢNG <br>
                <div class="quantity">
                <button class="minus-btn" type="button">-</button>
                    <input type="text" class="qty-input" value="1">
                    <button class="plus-btn" type="button">+</button> 
                | <button class="giohangctsp">THÊM VÀO GIỎ
                        HÀNG</button>
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
            <hr> <br>
            0 comments<br><br>
            <hr><br>
            <img style="width: 60px;height: 60px;" src="img/cmt.png" alt="">
            <input style="width: 830px;height: 40px; " type="text" placeholder="Add a comment">
            <input class="binhluan-gui" type="submit" value="POST">
            <br> <br> <br>
            <hr>
            <br>
        </div>
        
        <div class="danhgia">
                Hiện tại sản phẩm chưa có đánh giá nào, bạn hãy trở thành người đầu tiên đánh giá cho sản phẩm này
                <input class="guidanhgia" type="submit" value="Gửi đánh giá của bạn">
            </div>
        <br><br>
        <center>
            <h2>SẢN PHẨM LIÊN QUAN</h2>
        </center>
        <br><br>
        <div class="sanpham">
            <div class="sp1">
                <img src="img/SP6.webp" alt="">
                <p>Áo Sơ Mi DELUXE</p>
                <span>379.000 đ</span>
                <form action="" method="post" class="variants" id="" enctype="multipart/form-data">
                    <button class="giohang" title="Thêm vào giỏ hàng">
                        + Thêm vào giỏ hàng
                    </button>
                </form>
            </div>

            <div class="sp2">
                <img src="img/SP2.webp" alt="">
                <p>Áo Sơ Mi DELUXE</p>
                <span>379.000 đ</span>
                <form action="" method="post" class="variants" id="" enctype="multipart/form-data">
                    <button class="giohang" title="Thêm vào giỏ hàng">
                        + Thêm vào giỏ hàng
                    </button>
                </form>
            </div>

            <div class="sp3">
                <img src="img/SP3.webp" alt="">
                <p>Áo Sơ Mi DELUXE</p>
                <span>379.000 đ</span>
                <form action="" method="post" class="variants" id="" enctype="multipart/form-data">
                    <button class="giohang" title="Thêm vào giỏ hàng">
                        + Thêm vào giỏ hàng
                    </button>
                </form>
            </div>

            <div class="sp4">
                <img src="img/SP4.webp" alt="">
                <p>Áo Sơ Mi DELUXE</p>
                <span>379.000 đ</span>
                <form action="" method="post" class="variants" id="" enctype="multipart/form-data">
                    <button class="giohang" title="Thêm vào giỏ hàng">
                        + Thêm vào giỏ hàng
                    </button>
                </form>
            </div>

            <div class="sp5">
                <img src="img/SP5.webp" alt="">
                <p>Áo Sơ Mi DELUXE</p>
                <span>379.000 đ</span>
                <form action="" method="post" class="variants" id="" enctype="multipart/form-data">
                    <button class="giohang" title="Thêm vào giỏ hàng">
                        + Thêm vào giỏ hàng
                    </button>
                </form>
            </div>
        </div>