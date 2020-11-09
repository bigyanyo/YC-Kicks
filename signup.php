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
            //errormessage
        }
        else if ($_GET['error'] == "invaliduidandmail") {
            //errormessage for invalid uid and email
        }
        else if ($_GET['error'] == "invalidmail") {
            //errormessage for invalid email
        }
        else if ($_GET['error'] == "invaliduid") {
            //errormessage for invalid username
        }
        else if ($_GET['error'] == "passwordcheck") {
            //errormessage for password mismatch
        }
        else if ($_GET['error'] == "usernametaken") {
            //errormessage for username already taken
        }                          
    }
    else if (isset($_GET['signup']) && $_GET['signup'] == "success") {
        //Successful signup msg
    }
?>

</body>
</html>