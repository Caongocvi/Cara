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
button.normal{
    font-size: 14px;
    font-weight: 600;
    padding: 15px 30px;
    color: #000;
    background-color: #fff;
    border-radius: 4px;
    cursor: pointer;
    border: none;
    outline: none;
    transition: 0.4s ease;
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
/* Banner */
#banner {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    background-image: url("Content/img/banner/b2.jpg");
    width: 100%;
    height: 40vh;
    background-size: cover;
    background-position: center;
}
#banner h4 {
    color: #fff;
    font-size: 20px;
}
#banner h2 {
    color: #fff;
    font-size: 40px;
    font-weight: 700;
    padding: 10px 0;
}
#banner h2 span{
    color: #ef3636; 
}
#banner button:hover{
    background-color: #088178;
    color: #fff;
}
</style>
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
        <div class="pro" onclick="window.location.href='index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'];?>'">
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
                See More
            </a>  
        </div>
    </div>
</section>
<section id="banner" class="section-m1"> 
    <h4>Repair Services</h4>
    <h2>Up to <span>70% Off</span> - All T-shirts & Accessories</h2>
    <button class="normal">Explore More</button>
</section>
<section id="product1">
    <h2>New Arrivals</h2>
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
    </div>
</section>
