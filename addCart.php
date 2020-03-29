<?php
include 'connect.php';

if(isset($_POST['p_id']) && $_POST['user_id']) {
  $user_id = $_POST['user_id'];
  $stmt = $con->prepare("SELECT * FROM products WHERE id = ?");
  $stmt->execute(array($_POST['p_id']));
  $fetch = $stmt->fetch();
  echo $price = $fetch['price'];

  $cart = $con->prepare("INSERT INTO cart(p_id,user_id,price)VALUES(:zp_id,:zuser_id,:zprice)");
  $cart->execute(array(
      'zp_id'     => $_POST['p_id'],
      'zuser_id'  => $_POST['user_id'],
      'zprice'    => $price
  ));
}
