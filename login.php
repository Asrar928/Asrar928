<?php
ob_start();
session_start();
  require __DIR__.'/include/header.php';
  require __DIR__.'/class/users.php';
  // if(isset($_SESSION['logged_in'])) {
  //   header('Location: index.php');
  // }
  $errors = [];
  $succes = [];
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email    = $_POST['email'];
    $pass     = $_POST['pass'];

    $login = new users;
    $login->login($email,$pass);
  }
?>
<section class="ftco-section contact-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-12" style="text-align: center;">
        <?php include 'include/errors.php'; ?>
      </div>
      <div class="col-md-6" style="margin: 0 auto;">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="bg-white p-5 contact-form" method="POST">
          <h2 class="mb-4" style="text-align: center;">Login</h2>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Your Email">
          </div>
          <div class="form-group">
            <input type="password" name="pass" class="form-control" placeholder="Your Password">
          </div>
          <div class="form-group" style="text-align: center;">
            <input type="submit" value="Login" class="btn btn-primary py-3 px-5">
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
