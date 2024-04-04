<?php 
    class hoadon {
        function insertHoaDon($makh){
            $date = new DateTime('now');
            $ngay = $date->format('Y-m-d');
            $db = new connect();
            $query = "INSERT INTO hoadon(masohd, makh, ngaydat, tongtien) 
                    VALUES(NULL, $makh, '$ngay', 0)";
            $db->exec($query);
            //insert xong thì cần lấy ra mã hóa đơn vừa insert
            $select = "SELECT masohd 
                        FROM hoadon 
                        ORDER BY masohd DESC LIMIT 1";
            $mahd = $db->getInstance($select);
            return $mahd[0]; // trả về mảng $mahd = array(5); trả về số 5
        }
        //Phương thức insert vào bảng chi tiết hóa đơn
        function insertCTHoaDon($masohd, $mahh, $soluongmua, $mausac, $size, $thanhtien) {
            $db = new connect();
            $query = "insert into cthoadon(masohd, mahh, soluongmua, mausac, size, thanhtien, tinhtrang) values ($masohd, $mahh, $soluongmua, '$mausac', $size, $thanhtien, 0)";
            $db->exec($query); 
        }
        //Phương thức update tổng tiền vào lại bảng hoadon
        function updateHoaDonTongTien($masohd, $makh, $tongtien) {
            $db = new connect();
            $query="update hoadon set tongtien=$tongtien where masohd=$masohd and makh=$makh";
            $db->exec($query);
        }
        //phương thức hiển thị thông tin khách hàng dựa vào masohd
        function selectThongTinKHHD($masohd) {
            $db = new connect();
            $query="select b.masohd, b.ngaydat, a.tenkh, a.diachi, a.sodienthoai from khachhang a inner join hoadon b on b.makh = a.makh where b.masohd = $masohd";
            $result=$db->getInstance($query);
            return $result;
        }
        //phương thức lấy thông tin hàng hóa theo mã số hd
        function selectThongTinHHID($masohd) {
            $db = new connect();
            $query="select DISTINCT a.tenhh, a.mota, c.mausac, c.size, b.dongia, c.soluongmua from hanghoa a, cthanghoa b, cthoadon c where a.mahh=b.idhanghoa and a.mahh=c.mahh and c.masohd=$masohd";
            $result=$db->getList($query);
            return $result;
        }
    }
?>