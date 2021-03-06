<?php
ob_start();
session_start();
  require __DIR__.'/include/header.php';
?>
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center fadeInUp ftco-animated">
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact us</span></p>
        <h1 class="mb-0 bread">Contact us</h1>
      </div>
    </div>
  </div>
</div>
<section class="ftco-section contact-section bg-light">
  <div class="container">

    <div class="row block-9" style="
">
      <div class="col-md-6 order-md-last d-flex" style="
    margin: 0 auto;
">
        <form action="#" class="bg-white p-5 contact-form">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Subject">
          </div>
          <div class="form-group">
            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
          </div>
        </form>

      </div>


    </div>
  </div>
</section>

<?php
require_once 'include/footer.php';
ob_end_flush();
?>
