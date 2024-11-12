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
         <div class="banner3"><img style="width: 100%;height: 200px;" src="img/banner2.png" alt=""></div>   
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
            <h2>SẢN PHẨM MỚI</h2>
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
                    <input type="hidden" name="soluong" value="1">
                    <input type="hidden" name="price" value="'.$gia.'">
                    <input class="giohang" type="submit" name="addtocart" value="+Thêm vào giỏ hàng">
                    </form>
                </div>';
                    $i+=1;
                  }
                
                ?>
        </div>
        </div>
        </div>
   <center><div class="seeAll">
          <a href="index.php?act=listsp">Xem tất cả <ion-icon name="arrow-forward-circle-outline"></ion-icon></a>
        </div></center> 