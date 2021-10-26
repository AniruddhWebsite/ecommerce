<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
$update_query="UPDATE users_items SET status='confirmed'";
$update_query_result=mysqli_result($con,$update_query) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--minified css file-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--Link to External CSS file: index.css-->
        <link rel="stylesheet" type="text/css" href="index.css">
        <title>Success | Lifestyle Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!--Navigation Bar-->
        <?php
        include 'includes/header.php';
        ?>
        <!--Navigation Bar ends-->
        <br><br><br><br>
        <!--Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="jumbotron">
                        <h3>
                            <span class="glyphicon glyphicon-ok"></span><?php echo"Your order is confirmed.";?>
                        </h3>
                        <h4>
                            <?php echo "Thank you for shopping with us."; ?>
                        </h4>
                        <p>
                            <a href="products.php" target="_blank">
                                <?php echo "Click here" ?>
                            </a>
                            <?php echo "to purchase any other item." ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--Content ends-->
        <br><br>
         <!--footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--footer ends-->
    </body>
</html>


