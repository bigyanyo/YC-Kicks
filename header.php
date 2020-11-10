<?php
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
            <img src="img/YCLogo.png"> 
        </div>

        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">New Arrivals</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
        
        <form>
            <input type="search" name="squery" class="search-data" placeholder="Search..." required>
            <button type="submit" class="fas fa-search"></button>
        </form>
        
        <div class="user-cart">
            <a href="login.php"><div class="far fa-user"></div></a>
            <a href="#"><div class="fas fa-shopping-bag"></div></a>
        </div>
</nav>
