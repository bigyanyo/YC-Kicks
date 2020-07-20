<?php
    require "header.php";
?>

    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <h1>Sign Up</h1>
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
                    else if ($_GET['signup'] == "success") {
                        //Successful signup msg
                    }
                ?>
                <form action="phpOnly/psignup.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="text" name="email" placeholder="E-mail">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwd-repeat" placeholder="Repeat password">
                    <button type="submit" name="signup-submit">Sign Up</button>
                </form>
            </section>
        </div>
    </main>

<?php
    require "footer.php";
?>