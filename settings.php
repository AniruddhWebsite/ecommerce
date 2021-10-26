<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
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
        <title>Settings | Lifestyle Store</title>
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
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>Change Password</h2>
                        <form method="post" action="settings_script.php">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Old Password" name="old password"  required = "true" pattern=".{6,">
                                <?php
                                echo $_GET['exist_error'];
                                ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control"  placeholder="New Password"  name="new password" required = "true" pattern=".{6,">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Re-type New Password" name="re-type new password" required = "true" pattern=".{6,">
                                <?php
                                echo $_GET['retype_error'];
                                ?>
                            </div>
                            <button type="change" name="change" class="btn btn-primary">Change</button>
                        </form>
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

