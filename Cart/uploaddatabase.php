
<?php

        include 'connection.php';    
        $displayquery = "select * from cartadmin";
        $querydisplay = mysqli_query($con,$displayquery);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <div class="">
     <table border =1>
        <th>Id</th>
     <th>Product Image</th>
     <th>Product Name</th>
     <th>Sizes</th>
     <th>Unit Price</th>
     <th>Quantity</th>
     <th colspan="2">Action</th>
 

    
        <?php
                while($result = mysqli_fetch_array($querydisplay))
                {
                ?>

            <tr>
                <td><?php echo $result['id']; ?>
                <td><img src="<?php echo $result['Pic']; ?>" height="50%" width="50%"></td>
                <td><?php echo $result['Product_Name']; ?></td>
                <td><?php echo $result['Size'];?></td>
               <td>&#8360;<?php echo $result['Unit_Price']; ?></td>
               <td><?php echo $result['quantity'];?></td>
                <td>
                    <a href="update.php?id=<?php echo $result['id']; ?>" class="editbtn">Edit
                    </td>
                <td><a href="delete.php?id=<?php echo $result['id']; ?>" class=deletebtn>delete</td>

            </tr>
                <?php
               }
               
        
     ?>
                
</body>
</html>