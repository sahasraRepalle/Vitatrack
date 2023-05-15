<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="VITATRACK Logo.png">
    <title>VITATRACK</title>
</head>
<body>
    <img src="VITATRACK Logo.png" alt="VITATRACK Logo" class="eatezlogo" style="height:6vh; width:auto;">
    <nav>
        <div><a href="index.php">Home</a></div>
        <div><a href="HIPAA.php">Privacy Protection</a></div>
        <div><a href="Primary Care.php">Primary Care</a></div>
        <div><a href="Dental Care.php">Dental Care</a></div>
        <div><a href="Vision Care.php">Vision Care</a></div>
        <div><a href="Logout.php">Logout</a></div>
    </nav>
    <div class="line"></div>
    <main data-home="PrimaryCare">
        <div>
            <h1>Primary Care</h1>       
        </div>
    </main>
    <br><br><br><br>
    <center> <button onclick="window.location.href = 'subpc.php';">4/18/2023</button> </center>  
    <br><br><br><br><br> 
<div class="line"></div>
</body>
</html>