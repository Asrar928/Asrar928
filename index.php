<?php
ob_start();
session_start();
  require __DIR__.'/include/header.php';
  require __DIR__.'/admin/class/products.php';

  $products = new products;
  $all = $products->all();
?>
<script>
$(document).ready(function() {
  $('.add-to-cart').click(function(e) {
      var p_id    = $(this).parent().find('.p_id').val();
      var user_id = $(this).parent().find('.user_id').val();
      var Byjson = {'p_id':p_id,'user_id':user_id};
      $.ajax({
        url: 'addCart.php',
        type: 'post',
        data:Byjson,
        success:function(data) {
          alert('product added to cart');
        }
      });
      return false;

  });
  });
</script>
    <section id="home-section" class="hero">
      <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(images/bg_1.jpg);">
          <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

              <div class="col-md-12 ftco-animate text-center">
                <h1 class="mb-2">We serve Fresh Vegestables &amp; Fruits</h1>
                <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
              </div>

            </div>
          </div>
        </div>

        <div class="slider-item" style="background-image: url(images/bg_2.jpg);">
          <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

              <div class="col-sm-12 ftco-animate text-center">
                <h1 class="mb-2">100% Fresh &amp; Organic Foods</h1>
                <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row no-gutters ftco-services">
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Free Shipping</h3>
                <span>On order over $100</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Always Fresh</h3>
                <span>Product well package</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Superior Quality</h3>
                <span>Quality Products</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Support</h3>
                <span>24/7 Support</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-category ftco-no-pt">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-6 order-md-last align-items-stretch d-flex">
                <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(images/category.jpg);">
                  <div class="text text-center">
                    <h2>Vegetables</h2>
                    <p>Protect the health of every home</p>
                    <p><a href="#" class="btn btn-primary">Shop now</a></p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/category-1.jpg);">
                  <div class="text px-3 py-1">
                    <h2 class="mb-0"><a href="#">Vegetables</a></h2>
                  </div>
                </div>
                <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/category-2.jpg);">
                  <div class="text px-3 py-1">
                    <h2 class="mb-0"><a href="#">Fruits</a></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/category-3.jpg);">
              <div class="text px-3 py-1">
                <h2 class="mb-0"><a href="#">Juices</a></h2>
              </div>
            </div>
            <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/category-4.jpg);">
              <div class="text px-3 py-1">
                <h2 class="mb-0"><a href="#">Dried</a></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">Featured Products</span>
            <h2 class="mb-4">Our Products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <?php foreach($all as $one) { ?>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="#" class="img-prod"><img class="img-fluid" src="admin/upload/<?php echo $one['image']; ?>" alt="Colorlib Template">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#"><?php echo $one['name']; ?></a></h3>
                <div class="d-flex">
                  <div class="pricing">
                    <p class="price"><span>$<?php echo $one['price']; ?></span></p>
                  </div>
                </div>
                <?php if(isset($_SESSION['logged_in'])) { ?>
                <div class="bottom-area d-flex px-3">
                  <div class="m-auto d-flex">
                    <form action="" method="">
                      <input type="hidden" name="p_id" class="p_id" value="<?php echo $one['id']; ?>">
                      <input type="hidden" name="user_id" class="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                    <a class="buy-now d-flex justify-content-center align-items-center mx-1 add-to-cart">
                      <span><i class="ion-ios-cart"></i></span>
                    </a>
                  </form>
                  </div>
                </div>
              <?php } ?>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
<?php
require_once 'include/footer.php';
ob_end_flush();
?>
