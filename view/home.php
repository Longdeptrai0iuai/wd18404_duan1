<header>
            <!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <img src="image/banner1.webp" style="width:100%;height: 700px;">
</div>

<div class="mySlides fade">
  <img src="image/slide-img1.webp" style="width:100%;height: 700px;">
</div>

<div class="mySlides fade">
  <img src="image/slide-img3.webp" style="width:100%;height: 700px;">
</div>
<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>
            <br>
            <br>
         <div><img style="width: 100%;height: 200px;" src="img/banner2.png" alt=""></div>   
        </header>
<div class="tintuc">
            <div class="khungbe1">
                <a href="#" title="THỜI TRANG XU HƯỚNG">
                    <img src="img/anh2 (2).png" alt="">
                </a>
                </div>
                <!-- <div class="cap-xxx">
                    <h3>THỜI TRANG XU HƯỚNG</h3>
                </div> -->
            <div class="khungbe2">
                <a href="#" title="SIÊU DEAL GIẢM SỐC">
                    <img src="img/anh2 (1).png" alt="">
                </a>
                </div>
                <!-- <div class="cap-xxx">
                    <h3>SIÊU DEAL GIẢM SỐC</h3>
                </div> -->
        </div>
        <br><br>
        <div class="conTent">
        <center>
            <h2>SẢN PHẨM NỔI BẬT</h2>
        </center>
        <br><br>
        <div class="sanpham">
        <?php
                 foreach ($spnew as $sp) {
                    $i=0;
                    extract($sp);
                    $linksp="index.php?act=sanphamct&idsp=".$id_sanpham;
                    $hinh=$img_path.$img;
                    echo '<div class="sp1">
                    <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>   
                   <a class="namesp" href="'.$linksp.'"><p>'.$name_sanpham.'</p></a> 
                    <span class="giasp">'.$gia.'đ</span>
                    <form action="index.php?act=addtocart" method="post" class="variants" id="" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="'.$id_sanpham.'">
                    <input type="hidden" name="name" value="'.$name_sanpham.'">
                    <input type="hidden" name="image" value="'.$img.'">
                    <input type="hidden" name="size" value="L">
                    <input type="hidden" name="price" value="'.$gia.'">
                    <input class="giohang" type="submit" name="addtocart" value="+Thêm vào giỏ hàng">
                    </form>
                </div>';
                    $i+=1;
                  }
                
                ?>
                <select name="" id="">
                    <option value="M"></option>
                    <option value="L"></option>
                    <option value="XL"></option>
                </select>
               <input type="hidden" name="id" value="">
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
        </div>
       