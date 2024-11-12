<p class="resultsearch">Kết quả với từ khóa "<?php echo $kyw; ?>"</p>
<div class="sanphamall">
        <?php
                 foreach ($dssp as $sanpham) {
                    $i=0;
                    extract($sanpham);
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