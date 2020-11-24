<?php
    require "header.php";
?>

    <main>
        <?php

        if (isset($_SESSION['userId'])) {
            echo "<script>alert('You are logged in!')</script>";
            echo "<br><a class='logout' href='phpOnly/plogout.php'>Logout</a>";
        }
        else {
            echo "<script>alert('You are not logged in!')</script>";
        }

        if (isset($_GET['logout'])){
            if($_GET['logout']=="success"){
                echo "<script>alert('Sad to see you go! Come back soon!')</script>";
            }
        }
        ?>

    <link rel="stylesheet" href="css/index-style.css">

    <div class="index-first">
		<p class="caption">Good shoes take you <br>to the good places</p>
		<img src="img/YCLogo.png" class="index-img">
		<p class="caption">Nothing is satisfying than <br>buying a quality shoe.</p>

	</div>
 
    </main>

<?php
    require "footer.php";
?>