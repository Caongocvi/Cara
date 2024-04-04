<style>
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
#newsletter {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    align-items: center;
    background-image: url("Content/img/banner/b14.png");
    background-position: 20% 30%;
    background-repeat: no-repeat;
    background-color: #041e42;
    width: 100%;
}
#newsletter h4 {
    font-size: 22px;
    font-weight: 700;
    color: #fff;
}
#newsletter p {
    font-size: 16px;
    font-weight: 600;
    color: #fff;
}
#newsletter p span{
    color: #ffbd27;
}
#newsletter .form {
    display: flex;
    width: 40%;
}
#newsletter input {
    height: 5rem;
    padding: 0 20px;
    font-size: 14px;
    width: 60%;
    border: 1px solid transparent;
    border-radius: 4px;
    outline: none;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
#newsletter button {
    background-color: #088178;
    color: #fff;
    white-space: nowrap;
    height: 5rem;
    padding: 0 1.25rem;
    display: flex;
    align-items: center;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}
footer {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}
footer .col {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-bottom: 20px;
}
footer .logo {
    margin-bottom: 30px;
}
footer h4 {
    font-size: 14px;
    padding-bottom: 20px;
}
footer p {
    font-size: 12px;
    margin: 0 0 8px 0;
}
footer a {
    font-size: 13px;
    text-decoration: none;
    color: #222;
    margin-bottom: 10px;
}
footer .follow {
    margin-top: 20px;
}
footer .follow i{
    color: #465b52;
    padding-right: 4px;
    cursor: pointer;
}
footer .install .row img {
    border: 1px solid #088178;
    margin: 0 8px 10px 8px;
    border-radius: 6px;
}
footer .install img {
    margin: 10px 0 15px 0;
}
footer .follow .icon {
    font-size: 16px;
}
footer .follow i:hover,
footer a:hover{
    color: #088178;
}
footer .copyright {
    width: 100%;
    text-align: center;
}
</style>
<section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Sign up for Newsletters</h4>
        <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
    </div>
    <div class="form">
        <input type="text" placeholder="Your email address">
        <button class="normal">Sign up</button>
    </div>
</section>
<footer class="section-p1">
    <div class="col">
        <img class="logo" src="Content/imagetourdien/logo.png" alt="">
        <h4>Contact</h4>
        <p><strong>Address:</strong> 276/91/21 Thong Nhat street, ward 16, district Go Vap, Ho Chi Minh city</p>
        <p><strong>Phone:</strong> 0938032029 / (+84)938032029</p>
        <p><strong>Hours:</strong> 8:00 - 22:00.Mon - Sat</p>
        <div class="follow">
            <h4>Follow Us</h4>
            <div class="icon">
                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                <i class="fab fa-twitter" aria-hidden="true"></i>
                <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                <i class="fab fa-instagram" aria-hidden="true"></i>
            </div>
        </div>
    </div>
    <div class="col">
        <h4>About</h4>
        <a href="#">About Us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact Us</a>
    </div>
    <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign in</a>
        <a href="#">View cart</a>
        <a href="#">Sign up</a>
        <a href="#">Track my order</a>
        <a href="#">Help</a>
    </div>
    <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
            <img src="Content/img/pay/app.jpg" alt="">
            <img src="Content/img/pay/play.jpg" alt="">
        </div>
        <p>Secured Payment Gateways</p>
        <img src="Content/img/pay/pay.png" alt="">
    </div>
</footer>
<div class="copyright">
    <p>A web is designed by <span>Cao Ngọc Vĩ</span> </p>
</div>