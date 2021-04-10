<?php

session_start();

if(isset($_POST['submitPw'])){

    $loggediniD = $_SESSION['userId'];

    require 'dbHandler.php';
    $select = "SELECT * FROM users WHERE idUsers = '$loggediniD'";
    $query = mysqli_query($con, $select);
    $data = mysqli_fetch_assoc($query);

    // Hash is a one way method so we need to use password_verify
    // Convert everything to hash and compare

    $currentpwd = $_POST['currentPw'];
    $new = $_POST['newPw'];
    $confirm = $_POST['reNewPw'];

    $oldpwd = password_verify($currentpwd, $data['pwdUsers']);

    if(empty($currentpwd) || empty($new) || empty($confirm)){
        header("Location: ../reset_password.php?password=empty");
        exit();
    }

    else if($oldpwd == true){
        if ($new == $confirm) {
            $hashedPwd = password_hash($new, PASSWORD_DEFAULT);
            if(isset($_SESSION['userId'])){
                $update = "UPDATE users SET pwdUsers = '$hashedPwd'";
                $query1 = mysqli_query($con, $update);
            }else{
                die("SQL Error!!");
            }

            if($query1){
                header("Location: ../index.php?password=changed");
                // echo "Password Changed!!!";
                exit();  
            }
            else{
                header("Location: ../reset_password.php?password=error");
                // echo "php Error";
                exit();
            }
        }
            else{
                header("Location: ../reset_password.php?password=notsame");
                // echo "Both password do not match!";
                exit();
            }
        }

    else{
        header("Location: ../reset_password.php?password=mismatch");
        // echo "You entered wrong password";
        exit();
    }
    mysqli_close($con);
    exit();
}
?>