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
#header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 80px;
    background: #ecedf1;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0..06);
    z-index: 999;
    position: sticky;
    top: 0;
    left: 0;
}
#nav {
    display: flex;
    align-items: center;
    justify-content: center;
}
#nav li {
    list-style-type: none;
    padding: 0 20px;
    position: relative;
}
#nav li a {
    text-decoration: none;
    font-size: 16px;
    font-weight: 600;
    color: #1a1a1a;
    transition: 0.3s ease;
}
#nav li a:hover,
#nav li a.active {
    color: #088178;

}
#nav li a.active::after,
#nav li a:hover::after {
    content: "";
    width: 30%;
    height: 2px;
    background: #088178;
    position: absolute;
    bottom: -4px;
    left: 20px;
}

#hero {
    background-image: url("Content/imagetourdien/hero4.png");
    height: 90vh;
    width: 100%;
    background-size: cover;
    background-position: top 25% right 0;
    padding: 0 80px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
}

#hero h4{
    padding-bottom: 15px;
}
#hero h1{
    color: #088178;
}
#hero button {
    background-image: url("Content/imagetourdien/button.png");
    background-color: transparent;
    color: #088178;
    border: 0;
    padding: 14px 80px 14px 65px;
    background-repeat: no-repeat;
    cursor: pointer;
    font-weight: 700;
    font-size: 15px;
}
#feature {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
#feature .fe-box {
    width: 180px;
    text-align: center;
    padding: 25px 15px;
    box-shadow: 20px 20px 34px rgba(0, 0, 0, 0.03);
    border: 1px solid #cce7d0;
    border-radius: 4px; 
    margin: 15px 0;
}
#feature .fe-box:hover {
    box-shadow: 10px 10px 54px rgba(70, 62, 211, 0.2);
}
#feature .fe-box img {
    width: 100%;
    margin-bottom: 10px;
}
#feature .fe-box h6 {
    display: inline-block;
    padding: 9px 8px 6px 8px;
    line-height: 1;
    border-radius: 4px;
    color: #088178;
    background-color: #fddde4;
}
#feature .fe-box:nth-child(2) h6 {
    background-color: #cdebbc;
}
#feature .fe-box:nth-child(3) h6 {
    background-color: #d1e8f2;
}
#feature .fe-box:nth-child(4) h6 {
    background-color: #cdd4f8;
}
#feature .fe-box:nth-child(5) h6 {
    background-color: #f6dbf6;
}
#feature .fe-box:nth-child(6) h6 {
    background-color: #fff2e5;
}

/* CSS cho form tìm kiếm */
.form-inline {
    display: flex;
    justify-content: center; /* Căn giữa form */
}

.input-group {
    width: 300px; /* Độ rộng của input group */
}

.form-control {
    width: 100%; /* Chiều rộng của input */
    height: 36px;
    border-radius: 4px; /* Bo tròn góc */
}

#btsearch {
    border-top-right-radius: 4px; /* Bo tròn góc cho nút */
    border-bottom-right-radius: 4px; /* Bo tròn góc cho nút */
    background-color: #088178; /* Màu nền của nút */
    color: #fff; /* Màu chữ của nút */
    border: none; /* Loại bỏ viền */
    cursor: pointer; /* Con trỏ chuột khi di chuột qua */
    transition: background-color 0.3s ease; /* Hiệu ứng chuyển đổi màu nền */
}

#btsearch:hover {
    background-color: #088178; /* Màu nền của nút khi di chuột qua */
}

/* CSS cho hiệu ứng khi focus vào input */
.form-control:focus {
    border-color: #80bdff; /* Màu viền khi focus */
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); /* Hiệu ứng bóng khi focus */
}
</style>

<section id="header"> 
    <a href="#"><img src="Content/imagetourdien/logo.png" alt=""></a>

    <div>
        <ul id="nav">
            <li>
                <form class="form-inline" action="index.php?action=sanpham&act=timkiem" method="post">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <!-- <a href="Trangchu.php?trang=tk"> -->
                        <input type="text" name="txtsearch" class="form-control" placeholder="Search..."/>
                        <input class="input-group-text" style="height: 35px;" type="submit" id="btsearch" value="Search"/>
                        <!-- </a> -->
                        <!-- <span class="input-group-text">@</span> -->
                    </div>
                </form>
            </li>
            <li class="nav-item">
                <a class="active" href="index.php" class="nav-link">Home</a>
            </li>
                <?php 
                    $loai = new loaisanpham();
                    $kq=$loai->getLoaiHangHoa();
                    while($set=$kq->fetch()):
                ?>
            <!-- <li>
                <a href="" style="font-size: 30px;"><?php echo $set['tenloai'];?></a>
            </li> -->
                <?php 
                    endwhile;
                ?>
                <?php 
                    if(!isset($_SESSION['makh'])) {
                ?>
            <li class="nav-item">
                <a href="index.php?action=dangky" class="nav-link">Sign up</a>
            </li>
            <li class="nav-item">
                <a href="index.php?action=dangnhap" class="nav-link">Sign in</a>
            </li>
            <?php 
                }
            ?>
            <?php 
                if(isset($_SESSION['makh'])) {
            ?>
            <li class="nav-item">
                <a href="index.php?action=dangnhap&act=dangxuat" class="nav-link">Log Out</a>
            </li>
            <?php 
                }
            ?>
                <?php 
                    if(isset($_SESSION['makh'])) {
                        echo '<li>
                            <p style="font-size: 16px;
                                        color: #465b52;
                                        margin: 20px 0 20px 0;
                                        font-weight:600;">'. $_SESSION['tenkh'] .'</p>
                            </li>';
                    }
                    else {
                        echo '<li>
                            <p style="font-size: 16px;
                                        color: #465b52;
                                        margin: 20px 0 20px 0;
                                        font-weight:600;">Welcome!</p>
                            </li>';
                    }
                ?>
            <li>
                <a href="index.php?action=giohang" class="nav-link"><i style="font-size: 20px;" class="far fa-shopping-bag"></i></a>
            </li>
        </ul>
    </div>
</section>

<section id="hero">
    <h4>Trade-in-offer</h4>
    <h2>Super value deals</h2>
    <h1>On all products</h1>
    <p>Save more with coupons & up to 70% off!</p>
    <button>Shop Now</button>
</section>

<section id="feature" class="section-p1">
    <div class="fe-box">
        <img src="Content/imagetourdien/f1.png" alt="">
        <h6>Free Shipping</h6>
    </div>
    <div class="fe-box">
        <img src="Content/imagetourdien/f2.png" alt="">
        <h6>Online Order</h6>
    </div>
    <div class="fe-box">
        <img src="Content/imagetourdien/f3.png" alt="">
        <h6>Save Money</h6>
    </div>
    <div class="fe-box">
        <img src="Content/imagetourdien/f4.png" alt="">
        <h6>Promotions</h6>
    </div>
    <div class="fe-box">
        <img src="Content/imagetourdien/f5.png" alt="">
        <h6>Happy Sell</h6>
    </div>
    <div class="fe-box">
        <img src="Content/imagetourdien/f6.png" alt="">
        <h6>F24/7 Support</h6>
    </div>
</section>