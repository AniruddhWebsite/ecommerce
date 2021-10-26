<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) { 
    header('location: products.php'); 
}
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
        <title>Lifestyle Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    </head>
    <body>
        <!--Navigation Bar-->
        <?php
        require 'includes/header.php';
        ?>
        <!--Navigation Bar ends-->
        <!--Banner-->
        <div id="banner_image">
            <div class="container">
                <center>
                <div id="banner_content">
                    <h1>
                        We sell lifestyle.
                    </h1>
                    <p>
                        Flat 40% OFF on premium brands
                    </p>
                    <a href="products.php" target="_blank" class="btn btn-danger btn-lg active">
                        Shop Now
                    </a>
                </div>
                </center>
            </div>
        </div>
        <!--Banner ends-->
        <br><br>
        <!--Thumbnails-->
        <div class="container">
            <div class="row">
                <!--Camera Thumbnail-->
                <div class="col-xs-4">
                    <a href="products.php" target="_blank" class="thumbnail">
                        <img src="folder/1.jpg" alt="Cameras">
                        <caption>
                            <div class="text-center">
                                <h2>
                                    Cameras
                                </h2>
                                <p>
                                    Choose among the best available in the world.
                                </p>
                            </div>
                        </caption>
                        </a>
                    </div>
        <!--Camera thumbnail ends-->
        <!--Watch Thumbnail-->
                <div class="col-xs-4">
                    <a href="products.php" target="_blank" class="thumbnail">
                        <img src="folder/7.jpg" alt="Watches">
                        <caption>
                            <div class="text-center">
                                <h2>
                                    Watches
                                </h2>
                                <p>
                                    Original watches from the best brands.
                                </p>
                            </div>
                        </caption>
                        </a>
                    </div>
        <!--Watch thumbnail ends-->
        <!--Camera Thumbnail-->
                <div class="col-xs-4">
                    <a href="products.php" target="_blank" class="thumbnail">
                        <img src="folder/8.jpg" alt="Shirts">
                        <caption>
                            <div class="text-center">
                                <h2>
                                    Shirts
                                </h2>
                                <p>
                                    Our exquisitive collection of shirts.
                                </p>
                            </div>
                        </caption>
                        </a>
                    </div>
        <!--Shirt thumbnail ends-->
            </div>
        </div>
        <!--content ends-->
        <br><br>
        <!--footer-->
        <?php
        require 'includes/footer.php';
        ?>
        <!--footer ends-->
    </body>
</html>
