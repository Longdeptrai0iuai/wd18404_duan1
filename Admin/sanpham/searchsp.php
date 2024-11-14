<div class="contentDM">
<br>
<div class="row formtitle">
            <h1>Danh sách sản phẩm</h1>
        </div>
       
        <div class="row mb10 formdslh mt">
        <div style="display:flex;">
        <a href="index.php?act=addsp"><input type="button" value="Thêm mới" style="margin-bottom:10px;width: 100px;"></a> 
        <form action="index.php?act=searchsp" method="post">
        <input type="text" name="kyw" style="margin-bottom: 10px;margin-left: 30px;">
        <select name="iddm" style="margin-bottom: 10px;">
                <option value="0" selected>Chọn danh mục</option>
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
        <input type="submit" value="Tìm kiếm" style="margin-bottom: 10px;">
        </form>
        </div>

           <table>
            <tr>
                <th>Mã SP</th>
                <th>Name SP</th>
                <th>Image</th>
                <th>Giá</th>
                <th>Danh mục</th>
                <th></th>
            </tr>
            <?php
            foreach($dssp as $sanpham){
                extract($sanpham);
                $suasp="index.php?act=suasp&id=".$id_sanpham;
                $showsp="index.php?act=showsp&id=".$id_sanpham;
                $xoasp="index.php?act=xoasp&id=".$id_sanpham;
                $iddm = get_iddm($sanpham['iddm']);
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
                <td>'.$iddm.'</td>
                <td>
                <a href="'.$showsp.'"><input type="button" value="Xem"></a> 
                <a href="'.$suasp.'"><input type="button" value="Sửa"></a>   
                <a href="'.$xoasp.'"><input type="button" value="Xóa"></a>    
                </td>
                
            </tr>';
            }
            ?>
            
           </table>
        </div>
    </div>
</div>