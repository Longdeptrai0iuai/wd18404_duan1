<div class="contentDM">
<br>
<div class="row formtitle">
            <h1>Danh sách đơn hàng</h1>
        </div>
        <div class="row mb10 formdslh mt">
           <table>
            <tr>
                <th>Mã đơn hàng </th>
                <th>Khách hàng</th>
                <th>Số lượng hàng</th>
                <th>Giá trị đơn hàng</th>
                <th>Tình trạng đơn hàng</th>
                <th>Thao tác</th>
            </tr>
            <?php
            foreach($listbill as $bill){
                extract($bill);
                $kh=$bill["bill_name"].'
                <br> '.$bill["bill_email"].'
                <br> '.$bill["bill_address"].'
                <br> '.$bill['bill_phone'];
                $countsp=load_all_cart_count($bill['id']);
                $ttdh=get_ttdh($bill['bill_status']);
                $suabill="index.php?act=suabill&id=".$id;
                $ctdh="index.php?act=chitietdonhang&id=".$id;
                echo '<tr>
                <td>'.$bill['id'].'</td>
                <td>'.$kh.'</td>
                <td>'.$countsp.'</td>
                <td>'.$bill['total'].'</td>
                <td>'.$ttdh.'</td>
                <td>
                <a href="'.$suabill.'"><input type="button" value="Sửa"></a>
                <br>
                <a href="'.$ctdh.'"><input type="button" value="Xem chi tiết đơn"></a>       
                </td>
                
            </tr>';
            }
            ?>
            
           </table>
        </div>
    </div>
</div>