<?php
ob_start();
session_start();
require __DIR__.'/include/header.php';
require __DIR__.'/class/products.php';
  if(isset($_SESSION['logged_in']) && $_SESSION['role'] != 'admin') {
    header('Location: http://localhost/shop/');
  }
$errors = [];
$succes = [];
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name        = $_POST['name'];
  $price     = $_POST['price'];

  if($_FILES["image"]["error"] == 4){
    array_push($errors, 'Please fill in the image field');
  }

  if(!count($errors)) {
  $dir ='upload';
  if(!is_dir($dir)){
    umask(0);
    mkdir($dir,0775);
  }
  $image =  time().$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],$dir.'/'.$image);

    $add = new products;
    $add->add($name,$price,$image);
}
}
  ?>
<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h1 class="mt-4"></h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Products</li>
      </ol>
      <?php include 'include/errors.php'; ?>
      <div class="card mb-4">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Add Products</div>
        <div class="card-body">
          <form class="" novalidate="" action="" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="firstName">Name</label>
                <input type="text" class="form-control" name="name" id="firstName" placeholder="" value="" required="">
              </div>
              <div class="col-md-4 mb-3">
                <label for="lastName">Price</label>
                <input type="number" class="form-control" name="price" id="lastName" placeholder="" value="" required="">
              </div>
              <div class="col-md-4 mb-3">
                <label for="lastName">Image</label>
                <input type="file" class="form-control" name="image" id="lastName" placeholder="" value="" required="">
              </div>
            </div>
            <hr class="mb-4">
            <div class="col-md-12 text-center">
              <button class="btn btn-primary btn-lg" type="submit">Add Product</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
<?php
require_once 'include/footer.php';
ob_end_flush();
?>
