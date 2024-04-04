<style>
@import url('<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">');
*,
*::after,
*::before {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
:root {
    --blue-color: #0c2f54;
    --dark-color: #535b61;
    --white-color: #fff;
}
ul {
    list-style-type: none;
}
ul li {
    margin: 2px 0;
}
.text-dark {
    color: var(--dark-color);
}
.text-blue {
    color: var(--blue-color);
}
.text-end {
    text-align: right;
}
.text-center {
    text-align: center;
}
.text-start {
    text-align: left;
}
.text-bold {
    font-weight: 700;
}
.hr {
    height: 1px;
    background-color: rgba(0, 0, 0, 0.1);
}
.border-bottom {
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}
body {
    font-family: 'Poppins' sans-serif;
    color: var(--dark-color);
    font-size: 14px;
}
.invoice-wrapper {
    min-height: 100vh;
    background-color: rgba(0, 0, 0, 0.1);
    padding-top: 20px;
    padding-bottom: 20px;
}
.invoice {
    max-width: 850px;
    margin-right: auto;
    margin-left: auto;
    background-color: var(--white-color);
    padding: 70px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    min-height: 920px;
}
.invoice-head-top-left img {
    width: 130px;
}
.invoice-head-top-right h3 {
    font-weight: 500;
    font-size: 27px;
    color: var(--blue-color);
}
.invoice-head-middle, 
.invoice-head-bottom {
    padding: 16px 0;
}
.invoice-body {
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 4px;
    overflow: hidden;
}
.invoice-body table {
    border-collapse: collapse;
    border-radius: 4px;
    width: 100%;
}
.invoice-body table td,
.invoice-body table th {
    padding: 12px;
}
.invoice-body table tr {
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}
.invoice-body table thead {
    background-color: rgba(0, 0, 0, 0.2);
}
.invoice-body-info-item {
    display: grid;
    grid-template-columns: 80% 20%;
}
.invoice-body-info-item .info-item-td {
    padding: 12px;
    background-color: rgba(0, 0, 0, 0.2);
}
.invoice-foot {
    padding: 30px 0;
}
.invoice-foot p {
    margin-top: 20px;
    display: flex;
    justify-content: center;
}
.invoice-btn {
    padding: 3px 9px;
    color: var(--dark-color);
    font-family: inherit;
    border: 1px solid rgba(0, 0, 0, 0.1);
    cursor: pointer;
}
.invoice-head-top,
.invoice-head-middle,
.invoice-head-bottom {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    padding-bottom: 10px;
}
</style>
<div class="invoice-wrapper col-lg-12">
<?php 
  if (!isset($_SESSION['makh'])):
    echo '<script>alert("Bạn chưa đăng nhập");</script>';
    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=dangnhap"/>';
 ?>
 
 <?php 
  else:
 ?>
 <form action="" method="post">
 <?php 
          if(isset($_SESSION['masohd'])) {
            $mshd=$_SESSION['masohd'];
            $hd=new hoadon();
            $kh=$hd->selectThongTinKHHD($mshd);
            $ngay=$kh['ngaydat'];
            $tenkh=$kh['tenkh'];
            $dc=$kh['diachi'];
            $sodt=$kh['sodienthoai'];
          
        ?>
    <div class="invoice">
        <div class="invoice-container">
            <div class="invoice-head">
                <div class="invoice-head-top">
                    <div class="invoice-head-top-left text-start">
                        <img src="Content/img/logo.png" alt="">
                    </div>
                    <div class="invoice-head-top-right text-end">
                        <h3>Invoice</h3>
                    </div>
                </div>
                <div class="hr"></div>
                <div class="invoice-head-middle">
                    <div class="invoice-head-middle-left text-start">
                        <p>
                            <span class="text-bold">Date: <?php echo $ngay;?></span> <!-- Chèn ngày tháng năm vào đây -->
                        </p>
                    </div>
                    <div class="invoice-head-middle-right text-end">
                        <p>
                            <span class="text-bold">Invoice No: <?php echo $mshd;?></span>
                        </p>
                    </div>
                </div>
                <div class="hr"></div>
                    <div class="invoice-head-bottom">
                        <div class="invoice-head-bottom-left">
                            <ul>
                                <li class="text-bold">Invoice to: </li> <!-- Chèn tên khách hàng với Địa chỉ vào đây -->
                                <li><?php echo $tenkh;?></li>
                                <li><?php echo $dc;?></li>
                                <li><?php echo $sodt;?></li>
                                <li>Viet Nam</li>
                            </ul>
                        </div>
                        <div class="invoice-head-bottom-right">
                            <ul class="text-end">
                                <li class="text-bold">Pay to: </li> <!-- Chèn tên khách hàng với Địa chỉ vào đây -->
                                <li>Cara</li>
                                <li>276/91/21 Thong Nhat street, ward 16</li>
                                <li>district Go Vap, Ho Chi Minh city</li>
                                <li>Viet Nam</li>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="overflow-view">
                <div class="invoice-body">
                    <table>
                        <thead>
                            <tr>
                                <td class="text-bold text-center">Number</td>
                                <td class="text-bold text-center">Product</td>
                                <td class="text-bold text-center">Color</td>
                                <td class="text-bold text-center">Price</td>
                                <td class="text-bold text-center">QTY</td>
                                <td class="text-bold text-center">Amount</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $j = 0;
                            $sp=$hd->selectThongTinHHID($mshd);
                            while($set=$sp->fetch()):
                            $j++;
                        ?>
                            <tr>
                                <td class="text-center"><?php echo $j;?></td>
                                <td class="text-center"><?php echo $set['tenhh'];?></td>
                                <td class="text-center"><?php echo $set['mausac'];?></td>
                                <td class="text-center">$<?php echo number_format($set['dongia']);?>.00</td>
                                <td class="text-center"><?php echo $set['soluongmua'];?></td>
                                <td class="text-end">$<?php echo number_format($set['dongia']) *  $set['soluongmua'];?>.00</td>
                            </tr>
                            <?php
                                endwhile;
                            ?>
                        </tbody>
                    </table>
                    <?php 
                        }
                    ?>
                    <div class="invoice-body-bottom">
                        <div class="invoice-body-info-item border-bottom">
                            <div class="info-item-td text-end text-bold">
                                Total: 
                            </div>
                            <div class="info-item-td text-end">
                                $<?php $gh = new giohang(); echo $gh->subTotal();?>
                            </div>
                        </div>
                        <div class="invoice-body-info-item border-bottom">
                            <div class="info-item-td text-end text-bold">
                                Shipping: 
                            </div>
                            <div class="info-item-td text-end">
                                Free
                            </div>
                        </div>
                        <div class="invoice-body-info-item border-bottom">
                            <div class="info-item-td text-end text-bold">
                                Sub Total: 
                            </div>
                            <div class="info-item-td text-end">
                                <?php $gh = new giohang(); echo $gh->subTotal();?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="invoice-foot text-center">
                <p><span class="text-bold text-center">
                    Note: 
                </span>This is computer generated receipt and does not require physical signature.</p>
                <div class="invoice-btns">
                    <button type="button" class="invoice-btn">
                        <span>
                            <i class="fa-solid fa-print"></i>
                        </span>
                        <span>Print</span>
                    </button>
                    <button type="button" class="invoice-btn">
                        <span>
                            <i class="fa-solid fa-download"></i>
                        </span>
                        <span>Download</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
 </form>
 <?php 
  endif;
 ?>
</div>