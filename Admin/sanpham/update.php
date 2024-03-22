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
            <h1>Cập Nhật Sản Phẩm</h1>
        </div>
       
        <div class="row formcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data"> <br>
                <div class="row mb10">
                <select name="iddm">
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
                <input type="text" name="tensp" value="<?php echo $name_sanpham?>">
                <div class="row mb10">
                    Hình <br>
                <input type="file" name="hinh">
                <?php echo $hinh?>
                <div class="row mb10">
                    Giá <br>
                <input type="text" name="giasp" value="<?php echo $gia?>">
                <div class="row mb10">
                <p class="textmota">Mô tả</p> 
                <textarea class="mota" name="mota" cols="30" rows="10"><?php echo $mota?></textarea>
                </div>
                <div class="row mb10">
                    <input type="hidden" name="id" value="<?php echo $id_sanpham?>">
                    <input type="submit" name="capnhat" value="Cập nhật">
                    <input type="reset" value="Nhập Lại">
                    <a href="index.php?act=listsp"><input type="button" value="Danh Sách"></a>
                </div>
            <?php
            if(isset($thongbao) && $thongbao!="") echo $thongbao;
            ?>
            </form>
        </div>
    </div>
</div>