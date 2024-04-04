<script type="text/javascript">
    function chonsize(a) {
        document.getElementById("size").value = a;

    }
</script>
<style>
@import url("https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Spartan", sans-serif;
}
html {
  scroll-behavior: smooth;
}
h1 {
  font-size: 50px;
  line-height: 64px;
  color: #222;
}

h2 {
  font-size: 46px;
  line-height: 54px;
  color: #222;
}

h4 {
  font-size: 20px;
  color: #222;
}

h6 {
  font-weight: 700;
  font-size: 12px;
}

p {
  font-size: 16px;
  color: #465b52;
  margin: 15px 0 20px 0;
}

.section-p1 {
  padding: 40px 80px;
}

.section-m1 {
  margin: 40px 0;
}
body {
  width: 100%;
}
#prodetails .wrap {
  display: flex;
  margin-top: 20px;
}
#prodetails .single-pro-image{
  width: 40%;
  margin-right: 50px;
}
.small-img-group {
    margin-top: 6px;
    display: flex;
    flex-wrap: wrap; 
    justify-content: space-between; 
}

.small-img-col {
    flex: 0 0 calc(25% - 10px); 
    margin-bottom: 10px; 
}

.small-img {
    width: 100%;
    height: auto; 
}
#prodetails .single-pro-details {
  width: 50%;
  padding-top: 30px;
}
#prodetails .single-pro-details h6 {
  font-size: 16px;
}
#prodetails .single-pro-details h4 {
  padding: 40px 0 20px 0;
}
#prodetails .single-pro-details h2 {
  font-size: 26px;
  margin-right: 450px;
}
#prodetails .single-pro-details select {
  display: block;
  padding: 5px 10px;
  margin-bottom: 10px;
}
#prodetails .single-pro-details input {
  width: 50px;
  height: 47px;
  padding-left: 10px;
  font-size: 16px;
  margin-right: 10px;
}
#prodetails .single-pro-details input:focus {
  outline: none;
} 
#prodetails .normal {
    font-size: 16px;
    font-weight: 600;
    padding: 12px 30px;
    color: #fff;
    background-color: #088178;
    border-radius: 4px;
    cursor: pointer;
    border: none;
    outline: none;
    transition: 0.4s ease;
}
#prodetails .normal:hover {
    background-color: #fff;
    border: 1px solid #088178;
    color: #000;
    transform: scale(1.05);
}
#prodetails .single-pro-details span {
  line-height: 25px;
  font-size: 16px;
  font-weight: 500;
}
#prodetails .size {
  background-color: #088178;
  margin-bottom: 20px;
  color: #fff;
  font-weight: 500;
}
#product1 {
    text-align: center;
} 
#product1 h2 {
    font-size: 50px;
    font-weight: 700;
}
#product1 .pro-container {
    display: flex;
    justify-content: space-between;
    padding-top: 20px;
    flex-wrap: wrap;
}
#product1 .pro {
    width: 23%;
    min-width: 250px;
    padding: 10px 12px;
    border: 1px solid #cce7d0;
    border-radius: 25px;
    cursor: pointer;
    box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.02);
    margin: 15px 0;
    transition: 0.2s ease;
    position: relative;
}
#product1 .pro:hover {
    box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.06);
}
#product1 .pro img {
    width: 100%;
    border-radius: 20px;
}
#product1 .pro .des {
    text-align: start;
    padding: 10px 0;
}
#product1 .pro .des span{
    color: #606063;
    font-size: 12px;

}
#product1 .pro .des h5 {
    padding-top: 7px;
    font-weight: 700;
    color: #1a1a1a;
    font-size: 14px;
}
#product1 .pro .des i{
    font-size: 12px;
    color: rbg(243, 181, 25);
}
#product1 .pro .des h4 {
    padding-top: 7px;
    font-size: 15px;
    font-weight: 700;
    color: #088178;
}
#product1 .pro .des i {
    font-size: 12px;
    color: rgb(243, 181, 25);
}
#product1 .pro .cart {
    width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 50px;
    background-color: #e8f6ea;
    font-weight: 500;
    color: #088178;
    border: 1px solid #cce7d0;
    position: absolute;
    bottom: 20px;
    right: 10px;
}
#product1 .normal {
    font-size: 16px;
    font-weight: 600;
    padding: 15px 30px;
    color: #fff;
    background-color: #088178;
    border-radius: 4px;
    cursor: pointer;
    border: none;
    outline: none;
    transition: 0.4s ease;
}
#product1 .normal:hover {
    background-color: #fff;
    border: 1px solid #088178;
    color: #000;
}

</style>
<section id="prodetails" class="section-p1"> 
  <form action="index.php?action=giohang&act=giohang_action" method="post">
    <div class="wrap">
      <?php 
        //Điều phối sản phẩm và truyền id qua
        if(isset($_GET['id'])) {
          $id=$_GET['id'];//19
          //View đòi hỏi là cần thông tin của id = 19
          // ai làm?model làm
          $hh = new hanghoa();
          $sp = $hh->getHangHoaId($id);//$sp=array(mahh:19, tenhh: giày)
          $tenhh = $sp['tenhh'];
          $mota = $sp['mota'];
          $dongia = $sp['dongia'];
          $tenloai = $sp['tenloai'];
        }
      ?>
      <?php 
        $hinh = $hh->getHangHoaHinh($id);
        $set = $hinh->fetch();
      ?>
        <div class="single-pro-image">
          <input type="hidden" name="mahh" value="<?php echo $id;?>">
            <img src="Content\img\products\<?php echo $set['hinh'];?>" width="100%" id="MainImg" alt="">
            <div class="small-img-group">
              <?php 
                while($img = $hinh->fetch()):
              ?>
                <div class="small-img-col">
                    <img src="Content\img\products\<?php echo $set['hinh'];?>"  width="100%" class="small-img" alt="">
                </div>
              <?php 
                endwhile;
              ?>
            </div>
        </div>
        <div class="single-pro-details">
          <h6>Home / <?php echo $tenloai;?></h6>
          <h4><?php echo $tenhh;?></h4>
          <h2>$<?php echo number_format($dongia);?>.00</h2>
          <select name="mymausac" id="">
            <option value="">Select color</option>
            <?php 
              $mau = $hh->getHangHoaMau($id);
              while($set = $mau->fetch()):
            ?>
            <option value="<?php echo $set['idmau'];?>">
              <?php 
                echo $set['mausac'];
              ?>
            </option>
            <?php 
              endwhile;
            ?>
          </select>
          <h4>Select size</h4>
          <input type="hidden" name="size" value="1">
          <?php 
            $size = $hh->getHangHoaSize($id);
            while($set = $size->fetch()):
          ?>
            <button type="button" onclick="chonsize('<?php echo $set['size'];?>')"  name="" class="btn btn-circle size" id="green" value="<?php echo $set['idsize']; ?>">
              <?php echo $set['size']; ?>
            </button>
          <?php 
            endwhile;
          ?><br>
          <input type="number" name="soluong" value="1" id="">
          <button class="normal" type="submit" data-toggle="modal" data-target="#myModal">Add to cart</button>
          <h4>Product details</h4>
          <span><?php echo $mota; ?></span>
        </div>
    </div>
  </form>
</section>
<section id="product1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">
        <?php 
            $hh = new hanghoa();
            $result=$hh->getHangHoaNew(); //view lấy được dữ liệu là 8 sản phẩm
            //Đổ dữ liệu lên view
            while($set=$result->fetch()): //$set=array(mahh: 24, tenhh: giày...)
         ?>
        <div class="pro">
            <img src="Content\img\products\<?php echo $set['hinh'];?>" alt="">
            <div class="des">
                <!-- <span>adidas</span> Thêm tên brand từ csdl vào đây -->
                <h5><?php echo $set['tenhh'];?></h5> <!-- Thêm tên sp từ cơ sở dữ liệu vào đây -->
                <div class="rating">
                    <div class="stars"> 
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div> <!-- Thêm rating từ cơ sở dữ liệu vào đây -->
                <h4>$<?php echo number_format($set['dongia']);?></h4>
            </div>
            <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'];?>"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <?php 
            endwhile;
        ?>
        <div class="col-lg-12 text-center mt-4">
            <a class="normal" href="index.php?action=sanpham&act=sanphamkhuyenmai">
                <span class="">See More</span>
            </a>  
        </div>
    </div>
</section>