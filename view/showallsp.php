<div class="formloc">
<h1 class="allsp">
<?php
    if(isset($title)){
        echo $title;
    }else {
        echo 'TẤT CẢ SẢN PHẨM';
    }     
?>
</h1>
<form action="index.php?act=listsp" method="post" class="sl">
            <select name="iddm">
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="'.$id_danhmuc.'">'.$name_danhmuc.'</option>';
                }
                
                ?>

            </select>
            <input type="submit" name="listok" value="Tìm kiếm">
            </form>
<div class="sanphamall">
        <?php
                 foreach ($listsanpham as $sanpham) {
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
                </div>