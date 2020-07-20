<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YC KICKS</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <header>
        <div class="logo">
            <a href="index.php">
                <img src="img/YCLogo.png" alt="Logo">
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">New Arrivals</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Contacts</a></li>
            </ul>
            <div class="afterNav">
                <form action="#" method="get">
                    <input class="search" type="text" name="searchItems" placeholder="Search...">
                    <button class="search" type="submit" name="search-submit">Submit</button>
                </form>
            </div>
        </nav>
        
    </header>