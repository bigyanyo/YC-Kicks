<?php
        include "connection.php";
        print_r($_POST);
        if(isset($_POST['add']))
        {
            $id=$_POST['id'];
            $Size=$_POST['size'];
        }
        $q = "select * from cartadmin where id=$id";
        $query=mysqli_query($con,$q);
       while($result=mysqli_fetch_array($query))
        {
            $pic=$result['Pic'];
            $productame=$result['Product_Name'];
            $unitprice=$result['Unit_Price'];
        }
        $username="sukram";

        $detail = " insert into selectcartproduct (M_ID,Username,Product_Name,Pic,Price,Size) values('$id','$username','$productame','$pic','$unitprice','$Size')";
        $Query =mysqli_query($con,$detail);
        header('location:User_Cart.php');
?>