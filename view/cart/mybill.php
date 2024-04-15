<div class="boxtitle">Đơn hàng của tôi</div>
<div class="cart">
<table>
    <tr>
        <th>Mã đơn hàng</th>
        <th>Ngày đặt hàng</th>
        <th>Số lượng mặt hàng</th>
        <th>Tổng tiền</th>
        <th>Tình trạng đơn hàng</th>
        <th>Chi tiết đơn hàng</th>
    </tr>
<?php
    if(is_array($listbill)){
        foreach ($listbill as $bill) {
            extract($bill);
            $ttdh=get_ttdh($bill['bill_status']);
            $countsp=load_all_cart_count($bill['id']);
            $ttdh=get_ttdh($bill['bill_status']);
            $countsp=load_all_cart_count($bill['id']);
            echo '<tr>
                <td>'.$bill["id"].'</td>
                <td>'.$bill["ngaydathang"].'</td>
                <td>'.$countsp.'</td>
                <td>'.$bill["total"].'</td>
                <td>'.$ttdh.'</td>
                <td><a href=index.php?act=chitietdonhang&id='.$bill['id'].'>Chi tiết</a></td>
                
                
            </tr>';
        }
    }

?>
</table>

</div>