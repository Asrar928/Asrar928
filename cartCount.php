<?php
session_start();
include 'connect.php';
$active = 1;
$stmt = $con->prepare("SELECT * FROM cart WHERE user_id = ? AND active = ?");
$stmt->execute(array($_SESSION['user_id'],$active));
$count = $stmt->rowCount();

echo $count;
