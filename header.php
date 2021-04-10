<?php
    ini_set('session.cookie_lifetime', 60 * 60 * 24 * 30);
    ini_set('session.gc-maxlifetime', 60 * 60 * 24 * 30);
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Bigyan Bista, Sushant Rahapal, Susant Basnet">
    <meta name="keywords" content="YC Kicks, Shoes">
    <meta name="description" content="Shoe Shop">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header-style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>YC KICKS</title>
  </head>
  <body>

    <nav>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-equals"></i>
        </label>
        
        <div class="logo">
            <img class="nav-logo" src="img/YCLogo.png"> 
        </div>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="newArrival.php">New Arrivals</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
        
        <form>
            <input type="search" name="squery" class="search-data" placeholder="Search..." required>
            <button type="submit" class="fas fa-search"></button>
        </form>
        
        <div class="user-cart">
            <?php
                if(isset($_SESSION['userUiD'])){
                    echo '<span id="userID_login">'.$_SESSION['userUiD'].'</span>';
                    echo '<ul id="drop-menu">';
                    echo '<li><a href="profiles.php">Profiles</a></li>';
                    echo '<li><a href="reset_password.php">Change Password</a></li>';
                    echo '<li><a class="logout" href="phpOnly/plogout.php">Logout</a></li>';
                    echo '</ul>';
                }
            ?>
            <a href="login.php"><div class="far fa-user"></div></a>
            <a href="#"><div class="fas fa-shopping-bag"></div></a>
        </div>
    </nav>

<script type="text/javascript">
hideDrop();
var hidden = false;
var dm = document.getElementById("userID_login");
dm.addEventListener("click", (e)=>{
    if(hidden){
        showDrop();
        e.stopPropagation();
    }else{
        hideDrop();
    }
})
window.addEventListener("click", ()=>{
    hideDrop();
})
function showDrop(){
    hidden = false;
    document.getElementById("drop-menu").style.opacity= "1";
    document.getElementById("drop-menu").style.visibility= "visible";
}
function hideDrop(){
    hidden = true;
    document.getElementById("drop-menu").style.opacity = "0";
    document.getElementById("drop-menu").style.visibility = "hidden";
}
</script>