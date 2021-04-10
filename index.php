<?php
    include "header.php";
?>

    <main>
        <?php

        if (isset($_SESSION['userId'])) {
            // echo "<script>alert('You are logged in!')</script>";
        }
        // else {
        //     echo "<script>alert('You are not logged in!')</script>";
        // }
        
        if (isset($_GET['login']) && $_GET['login'] == "success") {
            echo "<script>alert('Congratulations! You logged in successfully.');</script>";
            header("Location: index.php");
        }

        if (isset($_GET['logout'])){
            if($_GET['logout']=="success"){
                echo "<script>alert('Sad to see you go! Come back soon!')</script>";
            }
        }

        if (isset($_GET['password'])){
            if($_GET['password']=="changed"){
                echo "<script>alert('Password successfully changed!!')</script>";
            }
        }
        ?>

    <link rel="stylesheet" href="css/index-style.css">

    <div class="index-first">
		<p class="caption">Good shoes take you <br>to the good places.</p>
		<img src="img/YCLogo.png" class="index-img">
		<p class="caption">Nothing is satisfying than <br>buying a quality shoe.</p>
	</div>
 
    </main>

<?php
    include "footer.php";
?>