<?php

require 'dBHandler.php';

if(isset($_POST['submit_pw'])) {

    $old_pw = $_POST['currentPW'];
    $new_pw = $_POST['newPW'];
    $reNew_pw = $_POST['reNewPw'];

    // $chg_pwd = mysqli_query("select * from dbName where userName='$userName'");
    $chg_pwd = mysqli_query("select * from users where id='1'");
    $chg_pwdl = mysqli_fetch_array($chg_pwd);
    $data_pwd = $chg_pwdl['password'];

    if($data_pwd==$old_pw){
        if($new_pw==$reNew_pw){
            // $update_pwd = mysqli_query("update dbName set password='$new_pass' where userName='$userName'");
            $update_pwd = mysqli_query("update users set password='$new_pass' where id='1'");
        }
        else{
            echo "You entered wrong password!";
        }
    }
    else{
        echo "You entered wrong password!";
    }

}
else{
    header("Location ../index.php?sql=error");
    exit();
}

?>