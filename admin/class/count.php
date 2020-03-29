<?php
class count {
  public static function user() {
    global $con;
    $stmt = $con->prepare("SELECT COUNT(id) AS userCount FROM users");
    $stmt->execute();
    $fetch = $stmt->fetch();
    return $user = $fetch['userCount'];
  }

  public static function products() {
    global $con;
    $stmt = $con->prepare("SELECT COUNT(id) AS proCount FROM products");
    $stmt->execute();
    $fetch = $stmt->fetch();
    return $pro = $fetch['proCount'];
  }

  public static function order() {
    global $con;
    $stmt = $con->prepare("SELECT COUNT(id) AS cartCount FROM cart");
    $stmt->execute();
    $fetch = $stmt->fetch();
    return $cart = $fetch['cartCount'];
  }
}
