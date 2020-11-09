<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>
    
    <div>
        <form action="changepassw.php" method="post">

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
    
</body>
</html>