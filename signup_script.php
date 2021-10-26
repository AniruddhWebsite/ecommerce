<?php
require 'includes/common.php';//including database connection
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['e-mail']);
$select_query="SELECT email FROM users";
$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
$row=mysqli_fetch_array($select_query_result);
$exist=FALSE;
if(!mysqli_num_rows($select_query_result)){
foreach($row['email'] as $index=>$value){
    if($value===$email){
       header('location:signup.php?email_exist_error=entered email already exists. Enter new email.');
       $exist=TRUE;
    }    
}
}
$email=mysqli_real_escape_string($con,$_POST['e-mail']);
$password=md5(mysqli_real_escape_string($con,$_POST['password']));
$contact_number=$_POST['contact'];
$city=mysqli_real_escape_string($con,$_POST['city']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$user_registration_query="INSERT into users(name, email, password, contact, city, address) values ('$name','$email','$password','$contact','$city','$address')";
$user_registration_submit=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
echo "Your details are successfully submitted";
$_SESSION['email']=$email;
$_SESSION['id']=mysqli_insert_id($con);
header('location:products.php');
?>