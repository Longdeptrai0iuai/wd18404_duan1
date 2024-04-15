<div class="contentDM">
<div class="row formtitle">
            <h1>Thống kê sản phẩm theo loại</h1>
        </div>
        <div class="row mb10 formdslh mt">
           <table>
            <tr>
                <th>Mã danh mục</th>
                <th>Tên danh mục</th>
                <th>Số Lượng</th>
                <th>Giá Cao Nhất</th>
                <th>Giá Thấp Nhất</th>
                <th>Giá Trung Bình</th>
            </tr>
            <?php
            foreach($listthongke as $thongke){
                extract($thongke);
                echo '<tr>
                <td>'.$madm.'</td>
                <td>'.$tendm.'</td>
                <td>'.$countsp.'</td>
                <td>'.$maxprice.'</td>
                <td>'.$minprice.'</td>
                <td>'.$avgprice.'</td>

                
            </tr>';
            }
            ?>
            
           </table>
        </div>
        
        <div class="row mb10 formdslh">
            <a href="index.php?act=bieudo">
                <input type="button" value="Xem biểu đồ">
            </a>
        </div>
    </div>
</div>