<?php
ob_start();
session_start();
require __DIR__.'/include/header.php';
require __DIR__.'/class/products.php';
  if(isset($_SESSION['logged_in']) && $_SESSION['role'] != 'admin') {
    header('Location: http://localhost/shop/');
  }
$products = new products;
$all = $products->order();
  ?>
<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h1 class="mt-4"></h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Products</li>
      </ol>
      <div class="card mb-4">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Products List</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Users</th>
                  <th>Price</th>
                  <th>Image</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($all as $one) { ?>
                <tr>
                  <td><?php echo $products->productInfo($one['user_id'])['name']; ?></td>
                  <td><?php echo $products->userInfo($one['user_id'])['name']; ?></td>
                  <td>$<?php echo $one['price']; ?></td>
                  <td><img src="upload/<?php echo $products->productInfo($one['p_id'])['image']; ?>" width="50" height="50"></td>
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php
require_once 'include/footer.php';
ob_end_flush();
?>
