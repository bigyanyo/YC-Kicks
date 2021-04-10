<?php
    require "header.php";
?>

<?php
    if (isset($_GET['password'])){
        if($_GET['password']=="empty"){
            echo "<script>alert('You cannot proceed without feeding me values. Please try again!')</script>";
        }
        else if($_GET['password']=="error"){
            echo "<script>alert('An error occured during execution. Please try again!')</script>";
        }
        else if($_GET['password']=="notsame"){
            echo "<script>alert('You entered two different password. Please re-enter new password!')</script>";
        }
        else if($_GET['password']=="mismatch"){
            echo "<script>alert('Your password does not match. Please try again!')</script>";
        }
    }
?>
    
    <div>
        <form action="phpOnly/changepassw.php" method="post">

            <label>
                Current Password: 
            </label>
            <input type="password" name="currentPw"><br>

            <label>
                New Password: 
            </label>
            <input type="password" name="newPw"><br>

            <label>
                Confirm Password: 
            </label>
            <input type="password" name="reNewPw"><br>
            
            <input type="submit" name="submitPw" value="Change">

        </form>
    </div>
    
<?php
    require "footer.php";
?>