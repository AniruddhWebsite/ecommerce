<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
$old_password=md5($_POST['old password']);
$new_password=$_POST['new password'];
$retype_new_password=$_POST['retype new password'];
if(!(strlen($new_password)==strlen($re-type_new_password))){
    header('location:settings.php?retype_error=retype the new password correctly');
}
$select_query="SELECT * FROM users WHERE password=$old password";
$select_query_result=mysqli_query($con,$sselect_query) or die(mysqli_error($con));
if(mysqli_num_rows($select_query_result)){
    $update_query="UPDATE users SET password=md5($new_password)";
    $update_query_result=mysqli_query($con,$update_query_result) or die(mysqli_error($con));
}
else{
    header('location:settings.php?exist_error=record with the old password doesnot exist');
}
?>

