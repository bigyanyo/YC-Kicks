<?php
    require "header.php";
?>

<?php
   include 'connection.php';

	  $displayquery = "select * from cartadmin";
     $querydisplay = mysqli_query($con,$displayquery);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
   <link rel="stylesheet" href="css/displayproduct.css">
</head>
<body>
   <div class="dflex">
	<?php

                while($result = mysqli_fetch_array($querydisplay))
                {
                ?>
              <div class="pall">
                <img src="<?php echo $result['Pic']; ?>"  class="dimg"><br>
                <div class="pdetail">
                <div class="pname"><?php echo $result['Product_Name'];?><br>
               <?php  $a=$result['Size']; 
                      $pieces = explode("/", $a);
                      $b=$result['quantity'];
                      $qpieces = explode("/",$b);
                     
                      ?>

                  <form action="addtocartdatabase.php" method="post">
                     <label>Size:</label>
                        <select name="size">
                           <?php
                             for($i=0;$i<sizeof($pieces);$i++)
                              {  
                           ?>
                           <?php if($qpieces[$i] > 2): ?>
                              <option value="<?php echo $pieces[$i]?>">
                                 <?php   
                                    echo $pieces[$i];
                                 ?>       
                                 </option>
   
                           <?php endif;?>
                                 
                           <?php
                              }
                           ?>
                        </select><br>
                &#8360;<?php echo $result['Unit_Price']; ?><br>
             <input type="hidden" name="id" value = "<?= $result['id'] ?>">
                           </div>
             </div>
              <input type="submit" name="add" value = "Add to Cart" class="psub" >  
                           
                           </div>
               </form>
               
               <?php

           }
           ?>
             </div>


</body>
</html>
<?php
require "footer.php";
?>