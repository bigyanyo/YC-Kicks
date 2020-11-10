<?php

session_start();

if(isset($_POST['login-submit'])) {
    
    require 'dBHandler.php';

    $uidmail = $_POST['uidmail'];
    $password = $_POST['pwd'];

    if (empty($uidmail) || empty($password)) {
        header("Location: ../index.php?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
        $stmt = mysqli_stmt_init($con);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "ss", $uidmail, $uidmail);
            mysqli_stmt_execute($stmt);
            $result=mysqli_stmt_get_result($stmt);

            if ($row=mysqli_fetch_assoc($result)) {
                $pwcheck=password_verify($password, $row['pwdUsers']);
                if ($pwcheck == false) {
                    header("Location: ../index.php?error=wrongpassword");
                    exit();
                }
                else if ($pwcheck == true) {
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUiD'] = $row['uidUsers'];
                    header("Location: ../index.php?login=success");
                    exit();
                }
                else {
                    header("Location: ../index.php?error=wrongpassword");
                    exit();
                }
            }
            else {
                header("Location: ../index.php?error=nouser");
                exit();
            }
        }
    }

}

else {
    header("Location: ../index.php");
    exit();
}