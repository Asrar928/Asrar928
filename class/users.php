<?php
class users {
  public static function register($name,$email,$pass) {
    global $con;
    global $errors;
    global $succes;
    if(empty($name)){array_push($errors, 'Please fill in the name field');}
    if(empty($email)){array_push($errors, 'Please fill in the email field');}
    if(empty($pass)){array_push($errors, 'Please fill in the password field');}

    if(!count($errors)) {
      $checkEmial = $con->prepare("SELECT email FROM users WHERE email = ?");
      $checkEmial->execute(array($email));
      $count = $checkEmial->rowCount();
      if($count > 0) {
          array_push($errors, 'This email already exists');
      }
    }

    if(!count($errors)) {
      $pass = password_hash($pass, PASSWORD_DEFAULT);
      $stmt = $con->prepare("INSERT INTO users (name,email,password)VALUES(:zname,:zemail,:zpass)");
      $stmt->execute(array(
        'zname'          => $name,
        'zemail'         => $email,
        'zpass'         => $pass
      ));

      $_SESSION['logged_in'] = true;
      $_SESSION['user_id'] = $con->lastInsertId();
      $_SESSION['name'] = $name;
      $_SESSION['role']  = 'user';

      header('Location: index.php');
    }



  }

  public function login($email,$pass) {
    global $con;
    global $errors;
    global $succes;
    if(empty($email)){array_push($errors, 'Please fill in the email field');}
    if(empty($pass)){array_push($errors, 'Please fill in the password field');}

    if(!count($errors)) {
      $checkEmial = $con->prepare("SELECT * FROM users WHERE email = ?");
      $checkEmial->execute(array($email));
      $checkEmialFetch = $checkEmial->fetch();
      $count = $checkEmial->rowCount();
      if(!$count > 0) {
          array_push($errors, 'This email not exists');
      }else{
        $hashPassword = $checkEmialFetch['password'];
        if(password_verify($pass, $hashPassword)) {
          $_SESSION['logged_in'] = true;
          $_SESSION['user_id'] = $checkEmialFetch['id'];
          $_SESSION['name'] = $checkEmialFetch['name'];
          $_SESSION['role'] = $checkEmialFetch['role'];

          header('Location: index.php');
        }else{
          array_push($errors, 'The information is incorrect ! ');
        }
      }
    }
  }



}
