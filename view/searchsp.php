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