<?php
if(isset($bill) && is_array($bill)){
    extract($bill);
    $payment=get_pttt($bill['bill_pttt']);
}
?>
<div class="thank">
    <p>Đặt Hàng Thành Công</p>
    <p>Cảm ơn bạn đã tin tưởng MENSWEAR</p>
</div>
<div class="inforbill">
<h2>Thông tin đơn Hàng</h2>
Mã đơn hàng:<?=$bill['id']?>
Ngày đặt hàng:<?=$bill['ngaydathang']?>
Tổng tiền:<?=$bill['total']?>
Phương thức thanh toán:<?=$payment?>
<h2>Thông tin đặt hàng</h2>
Người đặt hàng:<?=$bill['bill_name']?>
Địa chỉ:<?=$bill['bill_address']?>
Email:<?=$bill['bill_email']?>
Số điện thoại:<?=$bill['bill_phone']?>
<h2>Chi tiết đơn hàng</h2>
<div class="cart">
<table>
<?php
    bill_chitiet($billct);
?>
</table>

</div>

</div>



