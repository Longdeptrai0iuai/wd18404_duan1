<div class="contentDM">
<div class="row formtitle">
            <h1>Thêm Mới Sản Phẩm</h1>
        </div>
       
        <div class="row formcontent">
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data"> <br>
                <div class="row mb10">
                Danh mục <br>
                <select name="iddm" id="">
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="'.$id_danhmuc.'">'.$name_danhmuc.'</option>';
                }
                ?><br>

                </select><br>

                    Mã sản phẩm <br>
                    <input type="text" name="masp" disabled>
                </div>
                <div class="row mb10">
                    Tên sản phẩm <br>
                <input type="text" name="tensp">
                <div class="row mb10">
                    Hình <br>
                <input type="file" name="hinh">
                <div class="row mb10">
                    Giá <br>
                <input type="text" name="giasp"><br>
                <div class="row mb10 ">
                   <p class="textmota">Mô tả</p>  
                <textarea class="mota" name="mota" cols="30" rows="10"></textarea>
                </div>
                
                <div class="row mb10">
                    <input type="submit" name="themmoi" value="Thêm Mới">
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