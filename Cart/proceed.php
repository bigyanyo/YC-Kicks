<?php
        include "connection.php";
       print_r($_POST);
        $m=[];
        foreach($_POST as $key => $value)
        {
                if(preg_match("/quantity_([0-9]+)/", $key, $m))
                {
                       $pid=$m[1];
                        $quantity=$value;
                        $updatequery = "update selectcartproduct set quantity = $quantity where ID = $pid";
                        $query=mysqli_query($con,$updatequery);
                }

        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="uploadusers.php" method="post">
        <label for="fname">Full Name:</label>
        <input type="text" name="fullname" required><br>   
        <label for="address">Address:</label>
        <input type="text"  name="address" required><br>
        <label for="contact">Contact:</label>
        <input type="text" name="contact" required><br>
        <label for="Order">Order Notes:</label><br>
        <textarea name="ordernote" rows="5" cols="50" placeholder="Write Here....&#10If your about to gift someone this item.&#10OR&#10If you want to give a more detail about the location.(Optional)"></textarea><br>
        <input type="submit" name="checkout" value="Checkout">
</form>

    
</body>
</html>