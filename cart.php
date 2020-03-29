<?php
ob_start();
session_start();
  require __DIR__.'/include/header.php';
  require __DIR__.'/class/cart.php';

  $cart = new cart;
  $all = $cart->all();

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $address   = $_POST['address'];
    $phone     = $_POST['phone'];

    $cart = new cart;
    $cart->order($address,$phone,$_SESSION['user_id']);
  }
?>
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center fadeInUp ftco-animated">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
            <h1 class="mb-0 bread">My Cart</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section ftco-cart">
    			<div class="container">
    				<div class="row">
        			<div class="col-md-12 ftco-animate fadeInUp ftco-animated">
        				<div class="cart-list">
    	    				<table class="table">
    						    <thead class="thead-primary">
    						      <tr class="text-center">
    						        <th>&nbsp;</th>
    						        <th>&nbsp;</th>
    						        <th>Product name</th>
    						        <th>Price</th>
    						        <th>Total</th>
    						      </tr>
    						    </thead>
    						    <tbody>
                      <?php foreach($all as $one) { ?>
    						      <tr class="text-center">
    						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
    						        <td class="image-prod"><div class="img" style="background-image:url(<?php echo 'admin/upload/'; ?><?php echo $cart->getInfo($one['p_id'])['image']; ?>);"></div></td>
    						        <td class="product-name">
    						        	<h3><?php echo $cart->getInfo($one['p_id'])['name']; ?></h3>
    						        </td>
    						        <td class="price">$<?php echo $one['price']; ?></td>
    						        <td class="total">$<?php echo $one['price']; ?></td>
    						      </tr><!-- END TR-->
                    <?php } ?>
    						    </tbody>
    						  </table>
    					  </div>
        			</div>
        		</div>
        		<div class="row justify-content-end">
        			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
        				<div class="cart-total mb-3">
        					<h3>Your Information</h3>
      						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="info">
    	              <div class="form-group">
    	              	<label for="">Address</label>
    	                <input type="text" name="address" class="form-control text-left px-3" placeholder="">
    	              </div>
    	              <div class="form-group">
    	              	<label for="country">Phone Number</label>
    	                <input type="number" name="phone" class="form-control text-left px-3" placeholder="">
    	              </div>
                    <div class="form-group">
                      <p><input type="submit" value="Proceed to Checkout" class="btn btn-primary py-3 px-4"></p>
                    </div>
    	            </form>
        				</div>
        			</div>
        			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
        				<div class="cart-total mb-3">
        					<h3>Cart Totals</h3>
        					<p class="d-flex">
        						<span>Subtotal</span>
        						<span>$<?php $cart->getSum($_SESSION['user_id']); ?></span>
        					</p>
        					<p class="d-flex">
        						<span>Delivery</span>
        						<span>$0.00</span>
        					</p>
        					<p class="d-flex">
        						<span>Discount</span>
        						<span>$0.00</span>
        					</p>
        					<hr>
        					<p class="d-flex total-price">
        						<span>Total</span>
        						<span>$<?php $cart->getSum($_SESSION['user_id']); ?></span>
        					</p>
        				</div>
        			</div>
        		</div>
    			</div>
    		</section>

<?php
require_once 'include/footer.php';
ob_end_flush();
?>
