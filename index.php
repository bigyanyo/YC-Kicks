<?php
    require "header.php";
?>

    <main>
        <?php
        
        if (isset($_SESSION['userId'])) {
            //logged in
        }
        else {
            //logged out
        }

        ?>
 
        <a class="signupButton" href="signup.php">Sign Up</a>
        <a class="loginButton" href="login.php">Log In</a>
 
    </main>

<?php
    require "footer.php";
?>