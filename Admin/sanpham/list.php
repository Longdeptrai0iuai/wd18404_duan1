<div class="contentDM">
<br>
<div class="row formtitle">
            <h1>Danh sách sản phẩm</h1>
        </div>
        <div class="row mb10 formdslh mt">
           <table>
            <tr>
                <th>Mã SP</th>
                <th>Name SP</th>
                <th>Image</th>
                <th>Mô tả</th>
                <th>Giá</th>
                <th>Iddm</th>
                <th></th>
            </tr>
            <?php
            foreach($listsanpham as $sanpham){
                extract($sanpham);
                $suasp="index.php?act=suasp&id=".$id_sanpham;
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
                <td>'.$mota.'</td>
                <td>'.$gia.'</td>
                <td>'.$iddm.'</td>
                <td>
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