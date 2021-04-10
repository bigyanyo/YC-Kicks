<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="">
    <form action="uploadadmin.php" method="post" enctype="multipart/form-data">
    <div class="container">
    <table class="">
    <tr>
    <td>Product Image:</td>
    <td><input type="file" name="pic" required></td>
    </tr>
    <tr>
    <td>Product Name:</td>
    <td><input type="text" name="product_name" required></td>
    </tr>
    <tr>
    <td>Sizes:</td>
    <td><input type="text" name="size" required></td>
    </tr>
    <tr>
    <td>Unit Price:</td>
    <td><input type="text" name="unit_price" required></td>
    </tr>
    <td>Quantiy:</td>
    <td><input type="text" name="quantity" required></td>
    <tr>
    <tr class=button>
    <td><input type="submit" name="upload" value = "Upload"></td>
    </tr>
</body>
</html>