<?php
    require "header.php";
?>

    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <h1>Log In</h1>
                <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == "emptyfields") {
                            //errormessage
                        }
                        else if ($_GET['error'] == "nouser") {
                            //errormessage for username not available
                        }
                        else if ($_GET['error'] == "wrongpassword") {
                            //errormessage for password mismatch
                        }                       
                    }
                    else if (isset($_GET['login']) && $_GET['login'] == "success") {
                        //Successful login msg
                    }
                ?>
                <form action="phpOnly/plogin.php" method="post">
                    <input type="text" name="uidmail" placeholder="Username/E-mail">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="login-submit">Log In</button>
                </form>
            </section>
        </div>
    </main>

<?php
    require "footer.php";
?>