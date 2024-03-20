<?php
    if(is_array($dm)){
        extract($dm);
    }

?>
<div class="contentDM">
<div class="row formtitle">
            <h1>Cập Nhật Loại Danh Mục</h1>
        </div>
       
        <div class="row formcontent">
            <form action="index.php?act=updatedm" method="post"> <br>
                <div class="row mb10">
                    Mã loại hàng<br>
                    <input type="text" name="maloai" disabled>
                </div>
                <div class="row mb10">
                    Tên loại hàng<br>
                <input type="text" name="tenloai" value="<?php if(isset($name_danhmuc) && ($name_danhmuc!="")) echo $name_danhmuc;?>">
                </div>
                <div class="row mb10">
                    <input type="hidden" name="id" value=<?php if(isset($id_danhmuc) &&($id_danhmuc>0)) echo $id_danhmuc;?>>
                    <a href=""> <input type="submit" name="capnhat" value="Cập nhật"></a>  
                    <input type="reset" value="Nhập Lại">
                </div>
            </form>
        </div>
    </div>
</div>
