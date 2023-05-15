<?php
    //include auth.php file on all secure pages
    include("auth.php");
    require(dirname(__FILE__) . '/classes/bmichartresults.class.php');
    $patientid = 1;
    if (!isset($_SESSION['patientid'])) {
        $patientid = $_SESSION['patientid'];
    } 
    $bmichart = new bmichart($patientid);
?>
<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="VITATRACK Logo.png">
    <title>BMI</title>
</head>
<body>
    <img src="VITATRACK Logo.png" alt="VITATRACK Logo" class="eatezlogo" style="height:6vh; width:auto;">
    <nav>
    </nav>
    <div class="line"></div>
    <article>
        
        <div <center>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br>
            <table width="150%" border="1">
                <tr>
                    <td width="110%"><center>
                        <h2><center>BMI range</center></h2>
                        <p><center><?php echo $bmichart->get_bmirange();?></center></p>
                    </center>
                    <td width="10%">
                        <img border="5"; src="bmir.webp" alt="mac_and_cheese" width="500" height="500"> 

                </tr></table>
                <br><br><br>
            <table width="150%" border="1">
                <tr>
                    <td width="110%"><center>
                        <h2><center>Height</center></h2>
                        <p><center><?php echo $bmichart->get_height();?></center></p>
                    </center>
                    <td width="10%">
                        <img border="5"; src="height.png" alt="mac_and_cheese" width="500" height="500"> 

                </tr></table>
<br><br><br>
<table width="150%" border="1">
    <tr>

        <td width="110%"><center>
            <h2><center>Weight</center></h2>
            <p><center><?php echo $bmichart->get_weight();?></center></p>
        </center>
        <td width="10%">
            <img border="5"; src="weight.png" alt="mac_and_cheese" width="500" height="500"> 

    </tr></table>