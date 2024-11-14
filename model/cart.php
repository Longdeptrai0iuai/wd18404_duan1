<?php
function viewcart($del){
    $i=0;
    $tong=0;
    global $img_path;
    if($del==1){
        $xoasp_th='<td>Thao Tác</td>';
        $xoasp_td2='<td></td>';
    }else{
        $xoasp_th='';
        $xoasp_td2='';
    }
    echo '<tr>
                <td>Sản Phẩm</td>
                <td>Hình Ảnh</td>
                <td>Giá</td>
                <td>Size</td>
                <td>Số Lượng</td>
                <td>Thành Tiền</td>
                '. $xoasp_th.'
            </tr> ';
    
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh=$img_path.$cart[2];
        $ttien=$cart[3]*$cart[5];
        $tong+=$ttien;
        if($del==1){
            $xoasp_td='<td><a href="index.php?act=deletecart&idcart='.$i.'"><input class="delete" type="button" value="Xóa"></a></td>';
        }else{
            $xoasp_td='';
        }
        
        echo '<tr>
        <td>'.$cart[1].'</td>
        <td><img src="'.$hinh.'" alt="" height="80px"></td>
        <td>'.$cart[3].'</td>
        <td>'.$cart[4].'</td>
        <td>'.$cart[5].'</td>
        <td>'.$ttien.'</td>
        '.$xoasp_td.'
    </tr>';
    $i+=1;
    
    }
    echo ' <tr>
    <td colspan="5">Tổng Tiền</td>
    <td>'.$tong.'</td>
    '.$xoasp_td2.'
   
</tr>';
}
function lichsu_bill_chitiet($ctbill){
    $i=0;
    $tong=0;
    global $img_path;
    echo '<tr>
                <td>Sản Phẩm</td>
                <td>Hình Ảnh</td>
                <td>Giá</td>
                <td>Size</td>
                <td>Số Lượng</td>
                <td>Thành Tiền</td>
            </tr> ';
    
    foreach ($ctbill as $cart) {
        $size=get_size_product($cart['size']);
        $hinh=$img_path.$cart['img'];
        $tong+=$cart['thanhtien'];       
        echo '<tr>
        <td>'.$cart['name'].'</td>
        <td><img class="imgad" src="'.$hinh.'" alt="" height="80px"></td>
        <td>'.$cart['price'].'</td>
        <td>'.$cart['size'].'</td>
        <td>'.$cart['soluong'].'</td>
        <td>'.$cart['thanhtien'].'</td>
    </tr>';
    $i+=1;
    
    }
    echo ' <tr>
    <td colspan="5">Tổng Tiền</td>
    <td>'.$tong.'</td>
   
</tr>';
}
function bill_chitiet($listbill){
    $i=0;
    $tong=0;
    global $img_path;
    echo '<tr>
                <td>Sản Phẩm</td>
                <td>Hình Ảnh</td>
                <td>Giá</td>
                <td>Size</td>
                <td>Số Lượng</td>
                <td>Thành Tiền</td>
            </tr> ';
    
    foreach ($listbill as $cart) {
        $size=get_size_product($cart['size']);
        $hinh=$img_path.$cart['img'];
        $tong+=$cart['thanhtien'];       
        echo '<tr>
        <td>'.$cart['name'].'</td>
        <td><img src="'.$hinh.'" alt="" height="80px"></td>
        <td>'.$cart['price'].'</td>
        <td>'.$cart['size'].'</td>
        <td>'.$cart['soluong'].'</td>
        <td>'.$cart['thanhtien'].'</td>
    </tr>';
    $i+=1;
    
    }
    echo ' <tr>
    <td colspan="5">Tổng Tiền</td>
    <td>'.$tong.'</td>
   
</tr>';
}

function tongdonhang(){
    $tong=0;
    foreach ($_SESSION['mycart'] as $cart) {
        $ttien=$cart[3]*$cart[5];
        $tong+=$ttien;  
    }
   return $tong;
}
function insert_bill($iduser,$name,$email,$address,$pttt,$phone,$ngaydathang,$tongdonhang){
    $sql="INSERT INTO bill(iduser,bill_name,bill_email,bill_address,bill_pttt,bill_phone,ngaydathang,total) values('$iduser','$name','$email','$address','$pttt','$phone','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_bill_chitiet($idcart,$idbill){
    $sql="INSERT INTO chitietbill(id_bill_cart,id_bill) values('$idcart','$idbill')";
    return pdo_execute($sql);
}
function insert_cart($idtk,$idsp,$img,$namesp,$gia,$size,$soluong,$thanhtien,$idbill){
    $sql="INSERT INTO cart(iduser,idpro,img,name,price,size,soluong,thanhtien,idbill) values('$idtk','$idsp','$img','$namesp','$gia','$size','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}
function load_one_bill($id){
    $sql="select*from bill where id = ".$id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function load_all_Historycart($id){
    $sql="select*from cart where idbill = ".$id;
    $bill = pdo_query($sql);
    return $bill;
}
function update_bill($id,$status){
    $sql="update bill set bill_status='".$status."'where id=".$id;
    pdo_execute($sql);
}
function load_all_cart($idbill){
    $sql="select*from cart where idbill = ".$idbill;
    $bill = pdo_query($sql);
    return $bill;
}
function load_one_cart($idsp){
    $sql="select*from cart where idpro = ".$idsp;
    $cart = pdo_query_one($sql);
    return $cart;
}
function load_all_bill($iduser=""){
    $sql="select*from bill where 1"; 
    if($iduser>0) $sql.=" AND iduser = ".$iduser;
    $sql.=" order by id desc"; 
    $listbill = pdo_query($sql);
    return $listbill;
}
function load_one_billct($iduser=""){
    $sql="select*from bill where 1"; 
    if($iduser>0) $sql.=" AND iduser = ".$iduser;
    $sql.=" order by id desc"; 
    $listbill = pdo_query_one($sql);
    return $listbill;
}
function delete_bill($id){
    $sql="delete from bill where id=".$id;
    pdo_query($sql);
}
function load_all_cart_count($idbill){
    $sql="select*from cart where idbill = ".$idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function get_ttdh($n){
    switch ($n) {
        case '0':
          $tt="Đơn hàng mới";
          break;
        case '1':
            $tt="Đang xử lí";
            break;
        case '2':
            $tt="Đang giao hàng";
            break;
        case '3':
            $tt="Đã giao hàng";
            break;
        
        default:
            $tt="Đơn hàng mới";
            break;
    }
    return $tt;
}
function get_pttt($p){
    switch ($p) {
        case '1':
          $paid="Thanh toán khi nhận hàng";
          break;
        case '2':
            $paid="Thanh toán online";
            break;
        case '3':
            $paid="Chuyển khoản ngân hàng";
            break;
        default:
            $paid="Thanh toán khi nhận hàng";
            break;
    }
    return $paid;
}
function get_size_product($a){
    switch ($a) {
        case '0':
            $s="M";
            break;
        case '1':
            $s="L";
            break;
        case '2':
            $s="XL";
            break;
        case '3':
            $s="XXL";
            break;
        default:
            $s="L";
            break;
    }
    return $s;
}
function load_all_thongke(){
    $sql="select danhmuc.id_danhmuc as madm,danhmuc.name_danhmuc as tendm, count(sanpham.id_sanpham) as countsp, min(sanpham.gia) as minprice, max(sanpham.gia) as maxprice, avg(sanpham.gia) as avgprice";
    $sql.=" from sanpham left join danhmuc on danhmuc.id_danhmuc=sanpham.iddm";
    $sql.=" group by danhmuc.id_danhmuc order by danhmuc.id_danhmuc desc";
    $listtk= pdo_query($sql);
    return $listtk;
}
?>
