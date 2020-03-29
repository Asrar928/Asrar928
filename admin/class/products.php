<?php
class products {
  public static function all() {
    global $con;
    $stmt = $con->prepare("SELECT * FROM products ORDER BY id DESC");
    $stmt->execute();
    $all = $stmt->fetchAll();
    return $all;
  }

  public static function add($name,$price,$image) {
    global $con;
    global $errors;
    global $succes;
    if(empty($name)){array_push($errors, 'Please fill in the name field');}
    if(empty($price)){array_push($errors, 'Please fill in the price field');}

    if(!count($errors)) {
      $stmt = $con->prepare("INSERT INTO products (name,price,image)VALUES(:zname,:zprice,:zimage)");
      $stmt->execute(array(
        'zname'          => $name,
        'zprice'         => $price,
        'zimage'         => $image
      ));
      header('Location: add_products.php');
    }
  }

  public static function order() {
    global $con;
    $active = 0;
    $stmt = $con->prepare("SELECT * FROM cart WHERE active = ?");
    $stmt->execute(array($active));
    $all = $stmt->fetchAll();
    return $all;
  }

  public static function userInfo($user_id) {
    global $con;
    $active = 1;
    $stmt = $con->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute(array($user_id));
    $user = $stmt->fetch();
    return $user;
  }

  public static function productInfo($p_id) {
    global $con;
    $active = 1;
    $stmt = $con->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute(array($p_id));
    $pro = $stmt->fetch();
    return $pro;
  }


}
