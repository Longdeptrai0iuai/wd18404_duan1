
<div class="tintuc">
            <div class="khungbe1">
                <a href="https://feaerstore.com/san-pham-khuyen-mai" title="THỜI TRANG XU HƯỚNG">
                    <img src="img/anh2 (2).png" alt="">
                </a>
                <div class="cap-xxx">
                    <h3>THỜI TRANG XU HƯỚNG</h3>
                </div>
            </div>
            <div class="khungbe2">
                <a href="https://feaerstore.com/new-arrival-2021" title="SIÊU DEAL GIẢM SỐC">
                    <img src="img/anh2 (1).png" alt="">
                </a>
                <div class="cap-xxx">
                    <h3>SIÊU DEAL GIẢM SỐC</h3>
                </div>
            </div>
        </div>
        <br><br>
        <center>
            <h2>TẤT CẢ SẢN PHẨM</h2>
        </center>
        <br><br>
        <div class="sanpham">
        <?php
                 foreach ($spnew as $sp) {
                    $i=0;
                    extract($sp);
                    $linksp="index.php?act=sanphamct&idsp=".$id_sanpham;
                    $hinh=$img_path.$img;
                if(($i==2)||($i==5)||($i==8)){
                    $mr="";
                }else{
                    $mr="mr";
                }
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
            <!-- <div class="sp1">
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
            </div> -->
        </div>
<!-- 
        <center>
            <h2>KHUYẾN MÃI RẺ NHẤT</h2>
        </center>

        <div class="sanpham2">
            <div class="sanpham2-khung1">
                <div class="sp2-1">
                    <img src="img/SP7.webp" alt="">
                    <p>Áo Sơ Mi DELUXE</p>
                    <span>379.000 đ</span>
                    <form action="" method="post" class="variants" id="" enctype="multipart/form-data">
                        <button class="giohang" title="Thêm vào giỏ hàng">
                            + Thêm vào giỏ hàng
                        </button>
                    </form>
                </div>
                <div class="sp2-2">
                    <img src="img/SP8.webp" alt="">
                    <p>Áo Sơ Mi DELUXE</p>
                    <span>379.000 đ</span>
                    <form action="" method="post" class="variants" id="" enctype="multipart/form-data">
                        <button class="giohang" title="Thêm vào giỏ hàng">
                            + Thêm vào giỏ hàng
                        </button>
                    </form>
                </div>
                <div class="sp2-3">
                    <img src="img/SP9.webp" alt="">
                    <p>Áo Sơ Mi DELUXE</p>
                    <span>379.000 đ</span>
                    <form action="" method="post" class="variants" id="" enctype="multipart/form-data">
                        <button class="giohang" title="Thêm vào giỏ hàng">
                            + Thêm vào giỏ hàng
                        </button>
                    </form>
                </div>
            </div>
            <div class="sanpham2-khung2">
                <div class="sp2-1">
                    <img src="img/SP7.webp" alt="">
                    <p>Áo Sơ Mi DELUXE</p>
                    <span>379.000 đ</span>
                    <form action="" method="post" class="variants" id="" enctype="multipart/form-data">
                        <button class="giohang" title="Thêm vào giỏ hàng">
                            + Thêm vào giỏ hàng
                        </button>
                    </form>
                </div>
                <div class="sp2-2">
                    <img src="img/SP11.webp" alt="">
                    <p>Áo Sơ Mi DELUXE</p>
                    <span>379.000 đ</span>
                    <form action="" method="post" class="variants" id="" enctype="multipart/form-data">
                        <button class="giohang" title="Thêm vào giỏ hàng">
                            + Thêm vào giỏ hàng
                        </button>
                    </form>
                </div>
                <div class="sp2-3">
                    <img src="img/SP12.webp" alt="">
                    <p>Áo Sơ Mi DELUXE</p>
                    <span>379.000 đ</span>
                    <form action="" method="post" class="variants" id="" enctype="multipart/form-data">
                        <button class="giohang" title="Thêm vào giỏ hàng">
                            + Thêm vào giỏ hàng
                        </button>
                    </form>
                </div>
            </div> -->
        </div>

        <div class="tinkhuyenmai">
            <div class="tinkhuyenmai1">
                <h2>Đăng ký nhận tin khuyến mãi</h2><br>
                <input style="width: 250px;" type="text" placeholder="Nhập email của bạn ..." value="" name="" id="">
                <button style="background-color: white; border: 1px solid black;">ĐĂNG KÝ</button>
            </div>
            <div class="tinkhuyenmai2">
                <img style="width: 200px;height: 60px;" src="img/tinkhuyenmai.png" alt="">
                <img style="width: 200px;height: 200px;" src="img/logo.png" alt="">
            </div>
        </div>
        <hr>
        <br>