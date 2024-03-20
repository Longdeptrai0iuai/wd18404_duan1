<div class="contentDM">
    <div class="row formtitle">
            <h1>Danh Sách Loại Hàng Hóa</h1>
    </div>
    <div class="row mb10 formdslh">
           <table>
            <tr>
                <th>Mã Loại</th>
                <th>Tên Loại</th>
                <th></th>
            </tr>
            <?php
            foreach($listdanhmuc as $danhmuc){
                extract($danhmuc);
                $suadm="index.php?act=suadm&iddm=".$id_danhmuc;
                $xoadm="index.php?act=xoadm&iddm=".$id_danhmuc;
                echo '<tr>
                <td>'.$id_danhmuc.'</td>
                <td>'.$name_danhmuc.'</td>
                <td>
                <a href="'.$suadm.'"><input type="button" value="Sửa"></a>   
                <a onclick="return confirm(\'Bạn có chắc chắn muốn xóa không?\')" href="'.$xoadm.'"><input type="button" value="Xóa" ></a>    
                </td>
                
            </tr>';
            }
            ?>
            
           </table>
           <br>
           <div class="row mb10 formdslh">
            <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
        </div>
        </div>
        
</div>