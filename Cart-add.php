<?php
$item_id=$_GET['id'];
require 'includes/common.php';
$user_id=$_SESSION['id'];
$select_query="INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
header('location:products.php');
?>

