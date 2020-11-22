<?php
    require "header.php";
?>

    <main>
        <?php

        if (isset($_SESSION['userId'])) {
            echo "You are Logged in!!";
            echo "<br><a class='logout' href='phpOnly/plogout.php'>Logout</a>";
        }
        else {
            echo "You are Logged out!!";
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