<div class="contentDM">
<br>
<div class="row formtitle mb">
            <h1>Danh sách sản phẩm</h1>
        </div><br>
        <form action="index.php?act=listsp" method="post" class="mb">
                <input type="text" name="kyw">
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
            <br>
        <div class="row mb10 formdslh">
           <table>
            <tr>
                <th>Mã SP</th>
                <th>Tên sản phẩm</th>
                <th>Hình</th>
                <th>Giá</th>
                <th></th>
            </tr>
            <?php
            foreach($listsanpham as $sanpham){
                extract($sanpham);
                $suasp="index.php?act=suasp&id=".$id_sanpham;
                $xoasp="index.php?act=xoasp&id=".$id_sanpham;
                $hinhpath="../image/".$img;
                if(is_file($hinhpath)){
                    $hinh="<img src='".$hinhpath."' height='80px'>";
                }else{
                    $hinh="no photo";
                }
                echo '<tr>
                <td>'.$id_sanpham.'</td>
                <td>'.$name_sanpham.'</td>
                <td>'.$hinh.'</td>
                <td>'.$gia.'</td>
                <td>
                <a href="'.$suasp.'"><input type="button" value="Sửa"></a>   
                <a onclick="return confirm(\'Bạn có chắc chắn muốn xóa không?\')" href="'.$xoasp.'"><input type="button" value="Xóa"></a>    
                </td>
            </tr>';
            }
            ?>
            
           </table>
        </div>
        
        <div class="row mb10 formdslh">
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
        </div>
    </div>
</div>