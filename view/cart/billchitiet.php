<?php
if(isset($bill) && is_array($bill)){
    extract($bill);
    $payment=get_pttt($bill['bill_pttt']);
}
?>
<div class="inforbill">
    <div class="ttnd">
        <br>
<h2 class="InforBill">Thông tin đặt hàng</h2>
<p>Người đặt hàng:<?=$bill['bill_name']?></p>
<p>Địa chỉ:<?=$bill['bill_address']?></p>
<p>Email:<?=$bill['bill_email']?></p>
<p>Số điện thoại:<?=$bill['bill_phone']?></p>
<p>Phương thức thanh toán:<?=$payment?></p>
    </div>
    <h2 class="InforBill">Chi tiết đơn hàng</h2>
<div class="row boxcontent cart">
                
                <div class="cart">
                <table> 
               <?php
                lichsu_bill_chitiet($ctbill);
               ?>
                </table>
                </div>
                </div>