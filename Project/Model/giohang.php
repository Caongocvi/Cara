<?php 
    class giohang{
        //Thêm thông tin sản phẩm vòa giỏ hàng
        function addCart($mahh, $mausac, $size, $soluong) {
            //còn thiếu hình, tên, đơn giá, thành tiền
            $sanpham=new hanghoa();
            $sp=$sanpham->getHangHoaId($mahh);
            $tenhh=$sp['tenhh'];
            $dongia=$sp['dongia'];
            //Lấy màu dựa vào mã màu
            $mau = $sanpham->getHangHoaTenMau($mausac);//Màu sắc là id không phải tên
            $tenmau = $mau['mausac'];
            //Lấy hình
            $hinh=$sanpham->getHangHoaIdMauSize($mahh,$mausac,$size);
            $img = $hinh['hinh'];
            $total = $soluong * $dongia;
            $flag = false;
            //Trước khi đưa 1 object vào giỏ hàng thì kiểm tra hàng đó có tồn tại trong giỏ hàng chưa
            foreach($_SESSION['cart'] as $key => $item) {
                if($item['mahh'] == $mahh && $item['mausac'] == $tenmau && $item['size'] == $size) {
                    $flag = true;
                    $soluong += $item['soluong'];//$soluong=$soluong+$item['soluong];=$soluong=2+1=3
                    $this->updateHH($key, $soluong);
                }
            }
            if($flag == false) {
                //Giỏ hàng chứa 1 món hàng, món hàng là 1 object
                $item=array(
                    'mahh'=>$mahh,//thuộc tính->giá trị, trong đó thuộc tính tự đặt
                    'tenhh'=>$tenhh,
                    'hinh'=> $img,
                    'mausac'=>$tenmau,
                    'size'=>$size,
                    'soluong'=>$soluong,
                    'dongia'=>$dongia,
                    'thanhtien'=>$total
                );
                //đem đối tượng add vào giỏ hàng a[]
                $_SESSION['cart'][] = $item;
            }
        }
        //Phương thức tính tổng tiền trong giỏ hàng
        function subTotal() {
            $subtotal = 0;
            foreach($_SESSION['cart'] as $key => $item) {
                $subtotal += $item['thanhtien']; //$subtotal =  $subtotal + $item['thanhtien']
            }
            $subtotal = number_format($subtotal, 2);
            return $subtotal;
        }
        //Phương thức update
        function updateHH($index, $soluong) {
            if($soluong <= 0) {
                unset($_SESSION['cart'][$index]);
            }else {
                //Cập nhật tức là phép gán
                $_SESSION['cart'][$index]['soluong']=$soluong;
                $tiennew = $_SESSION['cart'][$index]['soluong'] * $_SESSION['cart'][$index]['dongia'];
                $_SESSION['cart'][$index]['thanhtien']=$tiennew;
            }
        }
    }
?>