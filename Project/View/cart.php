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
#cart table {
  width: 100%;
  border-collapse: collapse;
  table-layout: fixed;
  white-space: nowrap;
}
#cart table img {
  width: 70px;
}
#cart table td:nth-child(1) {
  width: 100px;
  text-align: center;
}
#cart table td:nth-child(2) {
  width: 150px;
  text-align: center;
}
#cart table td:nth-child(3) {
  width: 250px;
  text-align: center;
}
#cart table td:nth-child(4),
#cart table td:nth-child(5),
#cart table td:nth-child(6) {
  width: 150px;
  text-align: center;
}
#cart table td:nth-child(5) input {
  width: 70px;
  padding: 10px 5px 10px 15px;
  outline: none;
}
#cart table thead {
  border: 1px solid #e2e9e1;
  border-left: none;
  border-right: none;
}
#cart table thead td {
  font-weight: 700;
  text-transform: uppercase;
  font-size: 13px;
  padding: 18px 0;
}
#cart table tbody tr td {
  padding-top: 15px;
}
#cart table tbody td {
  font-size: 13px;
} 
#cart-add {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
#coupon {
  width: 50%;
  margin-bottom: 30px;
}
#coupon h3,
#subtotal h3 {
  padding-bottom: 15px;
  font-weight: 700;
}
#coupon input {
  padding: 10px 20px;
  outline: none;
  width: 60%;
  margin-right: 10px;
  border: 1px solid #e2e9e1;
}
#coupon button {
  background-color: #088178;
  color: #fff;
  padding: 12px 20px;
}
#coupon button:hover {
  background-color: #fff;
  color: #088178;
  padding: 12px 20px;
  border: 1px solid #088178;
}
#subtotal {
  width: 50%;
  margin-bottom: 30px;
  border: 1px solid #e2e9e1;
  padding: 30px;
}
#subtotal table {
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 20px;
}
#subtotal table td {
  width: 50%;
  border: 1px solid #e2e9e1;
  padding: 10px;
  font-size: 13px;
}
#subtotal a.normal {
  font-size: 14px;
  font-weight: 600;
  background-color: #088178;
  color: #fff;
  padding: 12px 20px;
  border-radius: 4px;
  cursor: pointer;
  border: none;
  outline: none;
  transition: 0.4s ease;
}
#subtotal a.normal:hover {
  background-color: #fff;
  color: #088178;
  padding: 12px 20px;
  border: 1px solid #088178;
}
</style>
<div class="cart">
<?php
    if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
?>
<form action="index.php?action=giohang&act=update_gh" method="post">
  <section id="cart" class="section-p1">
    <table width="100%">
      <thead>
        <tr>
          <td>Remove</td>
          <td>Image</td>
          <td>Product</td>
          <td>Price</td>
          <td>Quantity</td>
          <td>Subtotal</td>
        </tr>
      </thead>
      <tbody>
      <?php 
        foreach($_SESSION['cart'] as $key => $item) :
      ?>
        <tr>
          <td><a href="index.php?action=giohang&act=giohang_xoa&id=<?php echo $key;?>"><i class="far fa-times-circle"></i></a></td>
          <td><img width="100%" src="Content\img\products\<?php echo $item['hinh'];?>" alt=""></td>
          <td><?php echo $item['tenhh'];?></td>
          <td>$<?php echo $item['dongia'];?>.00</td>
          <td><input class="quantity-input" type="number" name="newqty[<?php echo $key;?>]" value="<?php echo number_format($item['soluong']);?>" /></td>
          <td>$<?php echo $item['thanhtien'];?>.00</td>
        </tr>
      <?php 
        endforeach;
      ?>
      </tbody>
    </table>
  </section>
  <section id="cart-add" class="section-p1">
    <div id="coupon">
      <h3 style="margin-bottom: 10px">Apply Coupon</h3>
      <div>
        <input type="text" placeholder="Enter Your Coupon">
        <button class="normal">Apply</button>
      </div>
    </div>
    <div id="subtotal">
      <h3>Cart Total</h3>
      <table>
        <tr>
          <td>Cart Subtotal</td>
          <td><strong>$
            <?php 
              $gh = new giohang();
              echo $gh->subTotal();
            ?></strong></td>
        </tr>
        <tr>
          <td>Shipping: </td>
          <td>Free</td>
        </tr>
        <tr>
          <td><strong>Total</strong></td>
          <td><strong>$
            <?php 
              $gh = new giohang();
              echo $gh->subTotal();
            ?></strong></td>
        </tr>
      </table>
      <a href="index.php?action=thanhtoan" class="normal">Proceed to checkout</a>
    </div>
  </section>
</form>
<?php 
    }
    else {
      echo "<script>alert(`Cart doesn't has products`);</script>";
      echo '<meta http-equiv="refresh" content="0; url=./index.php"/>';
    }
?>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('.quantity-input').on('input', function() {
        var quantity = $(this).val();
        var price = $(this).closest('tr').find('td:eq(3)').text().replace('$', '').replace('.00', '').trim();
        var subtotal = parseFloat(quantity) * parseFloat(price);
        $(this).closest('tr').find('td:eq(5)').text('$' + subtotal.toFixed(2));
    });
});
</script>