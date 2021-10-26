<?php
require 'includes/common.php'; //including file containing database connection
$email=$_POST['e-mail'];//fetching email from user input
$regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
/*Checking for the correctness of the email*/
if(!preg_match($regex_email,$email)){
    header('location:login.php?email_error=enter correct email');
}
$email=mysqli_real_escape_string($con,$email);//escaping characters
$password=$_POST['password'];//fetching password from user input
/*Checking for the correctness of the password*/
if(strlen($password)<6){
     header('location: login.php?password_error=enter correct password');
}
$password=mysqli_real_escape_string($con,$password);
$password=md5($password);//Security features
/*Fetching record from the database*/
$select_query="SELECT id, email FROM users WHERE email=$email";
$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
$row=mysqli_fetch_array($select_query_result);
/*Checking for the emptiness of the table*/
if((mysqli_num_rows($select_query_result))==0){
    echo "<br>There exists no user.";
}
/*Checking if that user exists*/
if($password===$row['password']){
    $_SESSION['email']=$email;
    $_SESSION['user_id']=mysqli_insert_id($con);
    header('location:products.php');
    echo "You are successfully logged in.";
}
 else {
    header('location:login.php?password_incorrect=incorrect password entered');
}
?>
