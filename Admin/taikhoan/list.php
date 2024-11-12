<div class="contentDM">
<br>
<div class="row formtitle">
            <h1>Danh sách tài khoản</h1>
        </div>
        <div class="row mb10 formdslh mt">
           <table>
            <tr>
                <th>Mã TK</th>
                <th>User</th>
                <th>Pass</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Điện thoại</th>
                <th>Vai trò</th>
                <th></th>
            </tr>
            <?php
            foreach($listtaikhoan as $taikhoan){
                extract($taikhoan);
                $suatk="index.php?act=suatk&id=".$idtk;
                $xoatk="index.php?act=xoatk&id=".$idtk;
                echo '<tr>
                <td>'.$idtk.'</td>
                <td>'.$username.'</td>
                <td>'.$password.'</td>
                <td>'.$email.'</td>
                <td>'.$address.'</td>
                <td>'.$phone.'</td>
                <td>'.$role.'</td>
                <td>
                <a href="'.$suatk.'"><input type="button" value="Sửa"></a>   
                <a href="'.$xoatk.'"><input type="button" value="Xóa"></a>    
                </td>
                
            </tr>';
            }
            ?>
            
           </table>
        </div>
    </div>
</div>