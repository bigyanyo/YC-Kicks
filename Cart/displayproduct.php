<?php
   include 'connection.php';

	  $displayquery = "select * from cartadmin";
     $querydisplay = mysqli_query($con,$displayquery);

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class ="flex-container" style="display:flex" style="flex-wrap:wrap">
	<?php

                while($result = mysqli_fetch_array($querydisplay))
                {
                ?>
                <div class="" >
                <img src="<?php echo $result['Pic']; ?>" height="50%" width="50%"><br>
                <?php echo $result['Product_Name']; ?><br>
               <?php  $a=$result['Size']; 
                      $pieces = explode("/", $a);
                      ?>
                  <form action="addtocartdatabase.php" method="post">
                     <label>Size:</label>
                        <select name="size">
                           <?php
                             for($i=0;$i<sizeof($pieces);$i++)
                              {  
                           ?>
                                 <option value="<?php echo $pieces[$i]?>">
                                 <?php   
                                    echo $pieces[$i];
                                 ?>       
                                 </option>
                           <?php
                              }
                           ?>
                        </select><br>
                &#8360;<?php echo $result['Unit_Price']; ?><br>
             <input type="hidden" name="id" value = "<?= $result['id'] ?>">
              <input type="submit" name="add" value = "Add to Cart" >
               </form>
               <?php

           }
           ?>

</div>

</body>
</html>