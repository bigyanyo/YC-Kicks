<?php
    include 'connection.php';
    $id = $_GET['id'];
    $q ="SELECT * FROM cartadmin WHERE id=$id"; 
    $query=mysqli_query($con,$q);
   foreach(mysqli_fetch_all($query,MYSQLI_ASSOC) as $result)
   {
        print_r($result);
      
        $file = $result['Pic'];
        $ProductName = $result['Product_Name'];
        $Size= $result['Size'];
        $UnitPrice = $result['Unit_Price'];
        $Quantity=$result['quantity'];
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
    <div class="">
     <form action="edit.php" method="post" enctype="multipart/form-data">
    <div class="">
    <table border=1>
   
    <tr>
    <td>Product Image:</td>
    <td><input type="file" name="pic" value="<?php echo $file;?>"></td>
    </tr>
    <tr>
    <td>Product Name:</td>
    <td><input type="text" name="product_name" value="<?php echo $ProductName;?>" ></td>
    </tr>
    <tr>
    <td>Sizes:</td>
    <td><input type="text" name="size" value="<?php echo $Size;?>"></td>
    </tr>
    <tr>
    <td>Unit Price:</td>
    <td><input type="text" name="unit_price" value="<?php echo $UnitPrice;?>"></td>
    </tr>
    <td>Quantity:</td>
    <td><input type="text" name="quantity" value="<?php echo $Quantity;?>"></td>
    </tr>
    <input type="text" name="id" value = "<?= $id ?>">
    <tr class=button>
    <td><input type="submit" name="update" value = "Update" ></td>
    </tr>
</table>
</div>
</form>
<script>


</script>
</body>
</html>


