<?php
if(isset($bill) && is_array($bill)){
    extract($bill);
    $payment=get_pttt($bill['bill_pttt']);
}
?>
<div class="thank">
    <p class="finally">Đặt Hàng Thành Công</p>
    <div class="cartFinally">
    <ion-icon name="bag-check-outline"></ion-icon>
    </div>
    
    <p class="camon">Cảm ơn bạn đã tin tưởng MENSWEAR</p>
</div>
<div class="inforbill">
    <div class="ttnd">
    <h2 class="InforBill">Thông tin đơn Hàng</h2><br>
<p>Mã đơn hàng:<?=$bill['id']?></p>
<p>Ngày đặt hàng:<?=$bill['ngaydathang']?></p>
<p>Tổng tiền:<?=$bill['total']?></p>
<p>Phương thức thanh toán:<?=$payment?></p>
<h2 class="InforBill">Thông tin đặt hàng</h2>
<p>Người đặt hàng:<?=$bill['bill_name']?></p>
<p>Địa chỉ:<?=$bill['bill_address']?></p>
<p>Email:<?=$bill['bill_email']?></p>
<p>Số điện thoại:<?=$bill['bill_phone']?></p>
<h2 class="InforBill">Chi tiết đơn hàng</h2>
    </div>
<div class="cart">
<table>
<?php
    bill_chitiet($billct);
?>
</table>

</div>

</div>



