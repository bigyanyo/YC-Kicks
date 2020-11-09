<?php

if(isset($_POST['submitPw'])){

    require 'dbHandler.php';
    $select = "select * from users";
    $query = mysqli_query($con, $select);
    $data = mysqli_fetch_assoc($query);


    $oldpwd = $data['password'];
    $currentpwd = $_POST['currentPw'];
    $new = $_POST['newPw'];
    $confirm = $_POST['reNewPw'];

    var_dump($data);

    if($currentpwd == $oldpwd){

        if ($new == $confirm) {

            $update = "UPDATE users SET password = '$new' WHERE userId = 1 ";
            $query1 = mysqli_query($con, $update);

            if($query1){

                echo "Password Changed!!!";
                exit();
                
            }
            else{

                echo "error";
                exit();

            }

        }
            else{

                echo "Both password do not match!";
                exit();

            }
        }

    else{

        echo "You entered wrong password";
        exit();

    }

    mysqli_close($con);
    exit();
}
?>