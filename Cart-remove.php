<?php
require 'includes/common.php';
$item_id=$_GET['id'];
$user_id=$_SESSION['id'];
$delete_query="DELETE FROM users_items WHERE item_id='$item_id'";
$delete_query_result=mysqli_query($con,$delete_query) or die(mysqli_error($con));
echo "Item is successfully removed";
header('location:cart.php');
?>

