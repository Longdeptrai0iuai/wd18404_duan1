<div class="contentDM">
<br>
<div class="row formtitle">
            <h1>Danh sách bình luận</h1>
        </div>
        <div class="row mb10 formdslh mt">
           <table>
            <tr>
                <th>Mã bình luận</th>
                <th>Username</th>
                <th>Nội dung </th>
                <th>ID sản phẩm</th>
                <th>Ngày bình luận</th>
                <th></th>
            </tr>
            <?php
            foreach($listbinhluan as $binhluan){
                extract($binhluan);
                $xoabl="index.php?act=xoabl&id=".$idbl;
                echo '<tr>
                <td>'.$idbl.'</td>
                <td>'.$iduser.'</td>
                <td>'.$noidung.'</td>
                <td>'.$idpro.'</td>
                <td>'.$ngaybinhluan.'</td>
                <td>  
                <a href="'.$xoabl.'"><input type="button" value="Xóa"></a>    
                </td>
                
            </tr>';
            }
            ?>
            
           </table>
        </div>
        
       
    </div>
</div>