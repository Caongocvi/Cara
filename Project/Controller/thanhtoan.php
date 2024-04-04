<?php 
    if(isset($_SESSION['makh'])) {
        $makh = $_SESSION['makh'];
        //Controller yêu cầu model insert vào bảng hóa đơn trước để sinh ra masohd rồi mới được insert bảng cthoadon
        $hd = new hoadon();
        $sohd = $hd->insertHoaDon($makh);// số 5
        $_SESSION['masohd'] = $sohd;
        $total = 0;
        //Lúc này đã có mã số hd vừa thêm vào thì được insert vào chitiethoadon
        //chi tiết hóa đơn tức là lấy giỏ hàng thêm vô
        foreach($_SESSION['cart'] as $key => $item) {
            //controller yêu cầu model insert vào chi tiết hóa đơn
            $hd->insertCTHoaDon($sohd, $item['mahh'], $item['soluong'], $item['mausac'], $item['size'], $item['thanhtien']);
            $total += $item['thanhtien'];
            //Hàm cập nhật số lượng tồn theo mã hàng
            //update soluong tonghh($mahh, $mausac, $size, $soluongmua)
        }
        //Sau khi insert vào bảng cthoadon thì update tổng thành tiền trở lại hóa đơn
        $hd->updateHoaDonTongTien($sohd, $makh, $total);
    }

    // unset($_SESSION['cart']);
    include_once './View/order.php';
?>