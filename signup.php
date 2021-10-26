<?php
require 'includes/common.php';
if(isset($_SESSION['email'])){
    header('location:products.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--minified CSS file-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Link to External CSS file: index.css-->
        <link rel="stylesheet" type="text/css" href="index.css">
        <title>Sign Up | Lifestyle Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!--Navigation Bar-->
        <?php
        require 'includes/header.php';
        ?>
        <!--Navigation Bar ends-->
        <br><br><br><br><br>
        <!--Sign Up form--> 
        <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>SIGN UP</h2>
                        <form method="post" action="signup_script.php">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="[A-Za-z ]{1,32}">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  name="e-mail" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required = "true" pattern=".{6,}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" name="contact" required = "true" pattern="[0-9]{10}">    
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="City" name="city" required = "true" pattern="[A-Za-z ]{1,32}">
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="Address" name="address" required = "true" pattern="[A-Za-z ]{1,32}">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        <!--Sign Up form ends-->
        <br><br>
        <!--footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--footer ends-->
    </body>
</html>


