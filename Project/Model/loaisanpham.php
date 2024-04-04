<?php 
    class loaisanpham{
        //Phương thức lấy tất cả loại
        function getLoaiHangHoa() {
            //b1: kết nối với dữ liệu
            $db = new connect();
            //b2: cần lấy gì thì truy vấn cái đó
            $select = "select a.maloai, a.tenloai from loai a";
            $result = $db->getList($select);
            return $result;// lấy được dữ liệu
        }
    }
?>