<?php
    require "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <script src="https://kit.fontawesome.com/10022afe1e.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="css/signup-style.css"> -->
</head>
<body>
    <main>
    <div class="container">
        <div class="forms-container">
            <div class="login-signup">
                <form action="phpOnly/psignup.php" method="post" class="signup-form">
                    <h2 class="title">Sign Up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="uid" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" name="email" placeholder="Email">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="pwd" placeholder="Password">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="pwd-repeat" placeholder="Confirm Password">
                    </div>
                    <input type="submit" value="Signup" name="signup-submit" class="btn solid">
                </form>
            </div>
        </div>
    </div>
    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3 class="about">One of us?</h3>
                <p class="about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, eligendi?</p>
                <a href="login.php" class="login-link"><button class="btn transparent" id="login-btn">Login</button></a>
            </div>
            <img src="img/airJordan.png" alt="" class="image">
        </div>
    </div>
    </main>

<?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
            echo "<script>alert('You have to feed me data to get access. Fill up the fields.')</script>";
        }
        else if ($_GET['error'] == "invaliduidandmail") {
            echo "<script>alert('Given data is not in proper order.  Please try again.')</script>";
        }
        else if ($_GET['error'] == "invalidmail") {
            echo "<script>alert('I am sorry! The e-mail is unfortunately invalid. Please try again.')</script>";
        }
        else if ($_GET['error'] == "invaliduid") {
            echo "<script>alert('I am sorry! The username is unfortunately invalid. Please try again.')</script>";
        }
        else if ($_GET['error'] == "passwordcheck") {
            echo "<script>alert('You cannot enter with two different passwords!!  Please re-type password.";
        }
        else if ($_GET['error'] == "usernametaken") {
            echo "<script>alert('Oh! It seems like we have already a user registered from your credentials. Would you mind adding some numbers or texts?')</script>";
        }                          
    }
    else if (isset($_GET['signup']) && $_GET['signup'] == "success") {
        echo "<script>alert('Congratulations! Your data is successfully registered to our stomach.')</script>";
    }
?>

</body>
</html>