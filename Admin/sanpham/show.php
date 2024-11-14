<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath="../image/".$img;
    if(is_file($hinhpath)){
        $hinh="<img src='".$hinhpath."' height='80px'>";
    }else{
        $hinh="no photo";
    }
?>
<div class="contentDM">
<div class="row formtitle">
            <h1>Xem chi tiết sản phẩm</h1>
        </div>
       
        <div class="row formcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data"> <br>
                <div class="row mb10">
                <select name="iddm" disabled>
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    if($id_danhmuc ==$iddm){
                        echo '<option value="'.$id_danhmuc.'" selected>'.$name_danhmuc.'</option>';
                    }else{
                        echo '<option value="'.$id_danhmuc.'">'.$name_danhmuc.'</option>';
                    }
                    
                }
                
                ?>

            </select> 
                </div>
                <div class="row mb10">
                    Tên sản phẩm <br>
                <input disabled type="text" name="tensp" value="<?php echo $name_sanpham?>">
                <div class="row mb10">
                    Hình <br>
                <?php echo $hinh?>
                <div class="row mb10">
                    Giá <br>
                <input disabled type="text" name="giasp" value="<?php echo $gia?>">
                <div class="row mb10">
                <p class="textmota">Mô tả</p> 
                <textarea disabled class="mota" name="mota" cols="30" rows="10"><?php echo $mota?></textarea>
                </div>
            </form>
        </div>
    </div>
</div>