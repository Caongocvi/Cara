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
.center-title {
    text-align: center;
    margin: 0 auto;
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
</style>
  <?php 
    //b1: Tổng số sản phẩm trên trang tổng số sản phẩm
    $hh = new hanghoa();
    //Cách 1: dùng truy vấn count
    // $count = $hh->getCountHangHoaAll();
    //Cách 2: dùng row count
    $count = $hh->getHangHoaAll()->rowCount();
    //b2: đặt giới hạn 1 trang bao nhiêu sản phẩm
    $limit = 8;
    //b3: xác định cáo bao nhiêu trang, và start
    $trang = new page();
    $page=$trang->findPage($count, $limit);
    //lấy start 
    $start = $trang->findStart($limit);
  ?>
  
  <!-- end số lượt xem san phẩm -->
  <!-- sản phẩm-->
 <?php 
    //Cùng 1 view mà gọi nhiều dữ liệu có view giống nhau
    $ac=1;
    if(isset($_GET['action'])) {
        if(isset($_GET['act']) && $_GET['act'] == 'sanphamkhuyenmai') {
            $ac = 2;        
        }else if(isset($_GET['act']) && $_GET['act'] == 'timkiem') {
            $ac = 3;
        }
        else {
            $ac = 1;
        }
    }
 ?>

  <!--Section: Examples-->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
          <div class="col-lg-12 text-right">
             <?php 
                if($ac==1 || $ac==2) {
                    echo '<h2 class="title center-title" style="text-align: center; margin: 0 auto;; font-size: 50px; font-weight: 700; line-height: 54px; color: #222;">All Products</h2>';
                }
                if($ac==3) {
                    echo '<h2 class="title center-title" style="text-align: center; margin: 0 auto;; font-size: 50px; font-weight: 700; line-height: 54px; color: #222;">Searched Products</h2>';
                }
             ?>
          </div>

      </div>
      <!--Grid row-->
      <section id="product1">
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">
    <?php 
            $hh = new hanghoa();
            if($ac==1) {
                // $result=$hh->getHangHoaAll();//14 sản phẩm
                $result=$hh->getHangHoaAllPage($start, $limit);//8,8 sản phẩm
            }
            if($ac==2) {
                // $result=$hh->getHangHoaAllSale();//8 sản phẩm
                // $result=$hh->getHangHoaAllPage($start, $limit);//8,8 sản phẩm
                $result=$hh->getHangHoaAll();//14 sản phẩm
            }
            if($ac==3) {
                if(isset($_POST['txtsearch'])) {
                    $tk = $_POST['txtsearch'];
                    $result = $hh->selectTimKiem($tk,$start,$limit);
                }
            }
            //Đổ từng sản phẩm lên view
            while($set=$result->fetch()):
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
    </div>
</section>
      

  </section>
 
  
  <!-- end sản phẩm mới nhất -->

  <section id="product1" style="margin-top: 50px;">
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
                <span class="">See More</span>
            </a>  
        </div>
    </div>
</section>

  <?php 
    if($ac==1):
  ?>
 <!-- Hiển thị số trang -->
  <div class="col-md-6 div col-md-offset-3">
				<ul class="pagination">
					<?php 
                        //Lấy giá trị trang hiện tại
                        $current_page = isset($_GET['page'])?$_GET['page']:1;
                        if($current_page>1 && $page>1) {
                            echo '<li><a href="/index.php?action=sanpham&page='.($current_page-1).'">Prev</a></li>';
                        }
                        for($i=1;$i<$page;$i++) {
                    ?>
                    <li><a href="/index.php?action=sanpham$page=<?php echo $i;?>"><?php echo $i;?></a></li>
                    <?php 
                        }
                        if($current_page<$page && $page>1) {
                            echo '<li><a href="/index.php?action=sanpham&page='.($current_page+1).'">Next</a></li>';
                        }
                    ?>
				    <li ><a href=""></a></li>
				   
				</ul>
</div>
<?php 
    endif;
?>