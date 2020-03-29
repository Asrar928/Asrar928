<?php
ob_start();
session_start();
require __DIR__.'/include/header.php';
require __DIR__.'/class/count.php';
  if(isset($_SESSION['logged_in']) && $_SESSION['role'] != 'admin') {
    header('Location: http://localhost/shop/');
  }
$count = new count;
  ?>
<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h1 class="mt-4">Dashboard</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
      <div class="row">
        <div class="col-xl-3 col-md-6">
          <div class="card bg-primary text-white mb-4">
            <div class="card-body">Users | <?php echo $count->user(); ?></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card bg-warning text-white mb-4">
            <div class="card-body">Products | <?php echo $count->products(); ?></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card bg-success text-white mb-4">
            <div class="card-body">Order | <?php echo $count->order(); ?></div>
            <div class="card-footer d-flex align-items-center justify-content-between">

            </div>
          </div>
        </div>

      </div>
    </div>
  </main>
<?php
require_once 'include/footer.php';
ob_end_flush();
?>
