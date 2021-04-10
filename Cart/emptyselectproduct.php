<?php 
        require_once "connection.php";
        $username="sukram";
        $query = "delete  from selectcartproduct where Username = '$username'";
        $querydisplay = mysqli_query($con,$query);

        header('location:cartfinal.php');


?>