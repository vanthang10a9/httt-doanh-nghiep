<?php
session_start();
$id = $_POST['id'];
$qty = $_POST['quantity'];

if(isset($_SESSION['cart'][$id])) {
    $qty += $_SESSION['cart'][$id];
} 

$_SESSION['cart'][$id] = $qty;
?>
