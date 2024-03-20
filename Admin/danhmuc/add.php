<div class="contentDM">
<div class="row formtitle">
            <h1>Thêm Mới Loại Hàng Hóa</h1>
        </div>
       
        <div class="row formcontent">
            <form action="index.php?act=adddm" method="post"> <br>
                <div class="row mb10">
                    Mã loại hàng <br>
                    <input type="text" name="maloai" disabled>
                </div>
                <div class="row mb10">
                    Tên loại hàng <br>
                <input type="text" name="tenloai">
                </div>
                <div class="row mb10">
                    <input type="submit" name="themmoi" value="Thêm Mới">
                    <input type="reset" value="Nhập Lại">
                    <a href="index.php?act=dsdm"><input type="button" value="Danh Sách"></a>
                </div>
            <?php
            if(isset($thongbao) && $thongbao!="") echo $thongbao;
            ?>
            </form>
        </div>
    </div>
</div>