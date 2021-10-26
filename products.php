<?php
require 'includes/common.php';
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
        <title>Products | Lifestyle Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!--Navigation Bar-->
        <?php
        require 'includes/header.php';
        require 'Check-if-added.php';
        ?>
        <!--Navigation Bar ends-->
        <br><br><br><br>
        <!--Content-->
        <div class="container">
            <!--Jumbotron-->
            <div class="jumbotron">
                <h1>
                    Welcome to our Lifestyle Store!
                </h1>
                <p>
                    We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.
                </p>
            </div>
            <!--Jumbotron ends-->
            <!--Cameras-->
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="folder/5.jpg" alt="Cannon EOS">
                        <div class="text-center">
                        <caption>
                            <h3>
                                Cannon EOS
                            </h3>
                            <p>
                                Price: Rs. 36000.00
                            </p>
                            <?php
                            if (!isset($_SESSION['email'])) { 
                            ?> 
                            <p>
                                <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                            </p>
                            <?php } else { //We have created a function to check whether this particular product is added to cart or not
                            if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {?>
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php 
                            }
                            } 
                            ?>
                        </caption>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="folder/2.jpg" alt="Sony DSLR-white">
                        <div class="text-center">
                        <caption>
                            <h3>
                                Sony DSLR
                            </h3>
                            <p>
                                Price: Rs. 40000.00
                            </p>
                            <?php
                            if (!isset($_SESSION['email'])) { 
                            ?> 
                            <p>
                                <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                            </p>
                            <?php } else { //We have created a function to check whether this particular product is added to cart or not
                            if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {?>
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php 
                            }
                            } 
                            ?>
                        </caption>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="folder/3.jpg" alt="Sony DSLR-black">
                        <div class="text-center">
                        <caption>
                            <h3>
                                Sony DSLR
                            </h3>
                            <p>
                                Price: Rs. 50000.00
                            </p>
                            <?php
                            if (!isset($_SESSION['email'])) { 
                            ?> 
                            <p>
                                <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                            </p>
                            <?php } else { //We have created a function to check whether this particular product is added to cart or not
                            if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {?>
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php 
                            }
                            } 
                            ?>
                        </caption>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="folder/4.jpg" alt="Olympus DSLR">
                        <div class="text-center">
                        <caption>
                            <h3>
                                Olympus DSLR
                            </h3>
                            <p>
                                Price: Rs. 80000.00
                            </p>
                            <?php
                            if (!isset($_SESSION['email'])) { 
                            ?> 
                            <p>
                                <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                            </p>
                            <?php } else { //We have created a function to check whether this particular product is added to cart or not
                            if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {?>
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php 
                            }
                            } 
                            ?>
                        </caption>
                        </div>
                    </div>
                </div> 
            </div>
             <!--Cameras ends-->
            <!--Watches-->
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="folder/9.jpg" alt="Titan Model #301">
                        <div class="text-center">
                        <caption>
                            <h3>
                                Titan Model #301
                            </h3>
                            <p>
                                Price: Rs. 13000.00
                            </p>
                            <?php
                            if (!isset($_SESSION['email'])) { 
                            ?> 
                            <p>
                                <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                            </p>
                            <?php } else { //We have created a function to check whether this particular product is added to cart or not
                            if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {?>
                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php 
                            }
                            } 
                            ?>
                        </caption>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="folder/10.jpg" alt="Titan Model #201">
                        <div class="text-center">
                        <caption>
                            <h3>
                                Titan Model #201
                            </h3>
                            <p>
                                Price: Rs. 3000.00
                            </p>
                            <?php
                            if (!isset($_SESSION['email'])) { 
                            ?> 
                            <p>
                                <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                            </p>
                            <?php } else { //We have created a function to check whether this particular product is added to cart or not
                            if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {?>
                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php 
                            }
                            } 
                            ?>
                        </caption>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="folder/11.jpg" alt="HMT Milan">
                        <div class="text-center">
                        <caption>
                            <h3>
                                HMT Milan
                            </h3>
                            <p>
                                Price: Rs. 8000.00
                            </p>
                            <?php
                            if (!isset($_SESSION['email'])) { 
                            ?> 
                            <p>
                                <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                            </p>
                            <?php } else { //We have created a function to check whether this particular product is added to cart or not
                            if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {?>
                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php 
                            }
                            } 
                            ?>
                        </caption>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="folder/12.jpg" alt="Faber Luba #111">
                        <div class="text-center">
                        <caption>
                            <h3>
                                Faber Luba #111
                            </h3>
                            <p>
                                Price: Rs. 180000.00
                            </p>
                            <?php
                            if (!isset($_SESSION['email'])) { 
                            ?> 
                            <p>
                                <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                            </p>
                            <?php } else { //We have created a function to check whether this particular product is added to cart or not
                            if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {?>
                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php 
                            }
                            } 
                            ?>
                        </caption>
                        </div>
                    </div>
                </div> 
            </div>
            <!--Watches ends-->
            <!--Shirts-->
            <div class="row">
            <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="folder/8.jpg" alt="H&W">
                        <div class="text-center">
                        <caption>
                            <h3>
                                H&W
                            </h3>
                            <p>
                                Price: Rs. 800.00
                            </p>
                            <?php
                            if (!isset($_SESSION['email'])) { 
                            ?> 
                            <p>
                                <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                            </p>
                            <?php } else { //We have created a function to check whether this particular product is added to cart or not
                            if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {?>
                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php 
                            }
                            } 
                            ?>
                        </caption>
                        </div>
                    </div>
                </div> 
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="folder/6.jpg" alt="Luis Phil">
                        <div class="text-center">
                        <caption>
                            <h3>
                                Luis Phil
                            </h3>
                            <p>
                                Price: Rs. 1000.00
                            </p>
                            <?php
                            if (!isset($_SESSION['email'])) { 
                            ?> 
                            <p>
                                <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                            </p>
                            <?php } else { //We have created a function to check whether this particular product is added to cart or not
                            if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {?>
                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php 
                            }
                            } 
                            ?>
                        </caption>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="folder/13.jpg" alt="John Zok">
                        <div class="text-center">
                        <caption>
                            <h3>
                                John Zok
                            </h3>
                            <p>
                                Price: Rs. 1500.00
                            </p>
                            <?php
                            if (!isset($_SESSION['email'])) { 
                            ?> 
                            <p>
                                <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                            </p>
                            <?php } else { //We have created a function to check whether this particular product is added to cart or not
                            if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {?>
                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php 
                            }
                            } 
                            ?>
                        </caption>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="folder/14.jpg" alt="Jhalsani">
                        <div class="text-center">
                        <caption>
                            <h3>
                                Jhalsani
                            </h3>
                            <p>
                                Price: Rs. 1300.00
                            </p>
                            <?php
                            if (!isset($_SESSION['email'])) { 
                            ?> 
                            <p>
                                <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                            </p>
                            <?php } else { //We have created a function to check whether this particular product is added to cart or not
                            if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {?>
                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php 
                            }
                            } 
                            ?>
                        </caption>
                        </div>
                    </div>
                </div>
            </div>
             <!--Shirts ends-->
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


