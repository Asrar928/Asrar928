<?php
class cart{

  public static function all() {
    global $con;
    $active = 1;
    $stmt = $con->prepare("SELECT * FROM  cart WHERE user_id = ? AND active = ?");
    $stmt->execute(array($_SESSION['user_id'],$active));
    $all = $stmt->fetchAll();
    return $all;
  }

  public static function getInfo($p_id) {
    global $con;
    $stmt = $con->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute(array($p_id));
    $fetch = $stmt->fetch();
    return $fetch;
  }

  public static function getSum($user_id) {
    global $con;
    $active = 1;
    $stmt = $con->prepare("SELECT SUM(price) AS total FROM cart WHERE user_id = ? AND active = ?");
    $stmt->execute(array($user_id,$active));
    $fetch = $stmt->fetch();
    echo $fetch['total'];
  }

  public static function order($address,$phone,$user_id) {
    global $con;
    $active = 0;
    if(!empty($address) && !empty($phone)){
      $stmt = $con->prepare("UPDATE cart SET address = ?, phone = ?, active = ? WHERE user_id = ?");
      $stmt->execute(array($address,$phone,$active,$user_id));
      ?>
      <script>alert('Thanks For Choose Our Market');</script>
      <script>window.location.href = "index.php";</script>
      <?php

    }else{ ?>
        <script>alert('Please fill your information');</script>
    <?php
  }

  }

}
