<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location:products.php');
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
        <title>Cart | Lifestyle Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!--Navigation Bar-->
        <?php
        include 'includes/header.php';
        ?>
        <!--Navigation Bar ends-->
        <br><br><br><br>
        <!--Table-->
        <?php
        $user_id=$_SESSION['id'];
        $select_query="SELECT * FROM users_items ui INNER JOIN items i ON ui.item_id=i.id WHERE ui.user_id='$user_id'";
        $select_query_result=mysqli_query($con,$select_query);
        if(mysqli_num_rows($select_query_result)==0){
            echo "Add items to the cart first!";
        }
        else{
            $row=mysqli_fetch_array($select_query_result);
            $id=$row['item_id'];
            $sum=0;
            while($row['price']>0)
            {
                $sum=$sum+$row['price'];
                $row=mysqli_fetch_array($select_query_result);
                $id=$id.", ".$row['item_id'];
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th>
                    Item Number
                </th>
                <th>
                    Item Name
                </th>
                <th>
                    Price
                </th>
                <th>
                </th>
            </tr>
            <tr>
                <a href='Cart-remove.php?id={$row['item_id']}' class='remove_item_link'> Remove</a>
            <td>
                <?php
                echo $row['item_id'];
                ?>
            </td>
            <td>
                <?php
                echo $row['name'];
                ?>
            </td>
            <td>
                <?php
                echo $row['price'];
            }
                ?>
            </td>
            </tr>
        <tr>
            <td>
                
            </td>
            <td>
                Total
            </td>
            <td>
                <?php
                echo "Rs ".$sum;
                ?>
            </td>
            <td>
                <?php
        }
        ?>
                <a href="success.php?success_id=$row['item_id']" target="_blank" class="btn btn-primary">
                    Confirm Order
                </a>
            </td>
        </tr>
        </table>
                    </div>
                    </div>
                </div>
        </div>
        <!--Table ends-->
        <br><br>
        <!--footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--footer ends-->  
    </body>
</html>

