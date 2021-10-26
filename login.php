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
        <title>Login | Lifestyle Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       <!--Navigation Bar-->
        <?php
        include 'includes/header.php';
        ?>
        <!--Navigation Bar ends-->
        <br><br><br><br><br>
        <!--Login Panel-->
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary" >
                        <!--Panel header-->
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <!--Panel header ends-->
                        <!--Panel Body-->
                        <div class="panel-body">
                            <p class="text-warning">
                                <i>
                                    Login to make a purchase
                                </i>
                            </p>
                            <form method="post" action="login_submit.php">
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true" pattern="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/">
                                    <div>
                                        <?php
                                        echo $_POST['email_error'];
                                        ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required = "true" pattern=".{6,}">
                                    <div>
                                        <?php
                                        echo $_POST['password_error'];
                                        echo $_POST['password_incorrect'];
                                        ?>
                                    </div>
                                </div>
                                <a href="products.html" target="_blank" class="btn btn-primary active">
                                    Login
                                </a>
                                <br><br>
                            </form><br/>
                        </div>
                        <!--Panel Body ends-->
                        <!--Panel Footer-->
                        <div class="panel-footer">
                            <p>
                                Don't have an account? <a href="#">Register</a>
                            </p>
                        </div>
                        <!--Panel Footer ends-->
                    </div>
                </div>
            </div>
        </div>
        <!--Login Panel ends-->
        <br><br>
        <!--footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--footer ends-->
    </body>
</html>

