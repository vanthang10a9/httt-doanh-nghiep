<?php
session_start();
$id = $_GET['id'];
?>
alert(<?php echo $id;?>);
<?php
unset($_SESSION['cart'][$id]);
header("Location:cart.php");
exit();
?>