<div class="contentDM">
<?php
    if(is_array($bill)){
        extract($bill);
    }
 
?>
<div class="row formtitle">
            <h1>Cập Nhật Đơn Hàng</h1>
        </div>
       
        <div class="row formcontent">
        <form action="index.php?act=update_bill" method="post"> 
                <div class="row mb10">
                    Tình Trạng đơn hàng: <br><br>
                    <tr class="ttbill">
                        <td class="ttbill"><input type="radio" value="0" name="status" checked>Đơn hàng mới</td>
                        <td><input type="radio" value="1" name="status" >Đang xử lí</td>
                        <td><input type="radio" value="2" name="status" >Đã xử lí</td>
                    </tr>
                <div class="row mb10">
                   <br>
                <div class="row mb10">
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <input type="submit" name="capnhat" value="Cập nhật">
                    <input type="reset" value="Nhập Lại">
                    
                </div>
            <?php
            if(isset($thongbao) && $thongbao!="") echo $thongbao;
            ?>
            </form>
        </div>
    </div>
</div>