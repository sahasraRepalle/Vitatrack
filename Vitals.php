<?php
    //include auth.php file on all secure pages
    include("auth.php");
    require(dirname(__FILE__) . '/classes/vitalsresults.class.php');
    $patientid = 1;
    if (!isset($_SESSION['patientid'])) {
        $patientid = $_SESSION['patientid'];
    }
    $vitals = new vitals($patientid);
?>
<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="VITATRACK Logo.png">
    <title>Vitals</title>
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
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <table width="120%" border="1">
                <tr>
                    <td width="130%"><center>
                        <h2><center>Average heart rate</center></h2>
                        <p><center><?php  echo $vitals->get_averageheartrate(); ?></center></p>
                    </center>
                    <td width="20%">
                        <img border="5"; src="ahr.webp" alt="mac_and_cheese" width="500" height="500"> 

                </tr></table>
                <br><br><br>
            <table width="120%" border="1">
                <tr>
                    <td width="130%"><center>
                        <h2><center>Blood pressure</center></h2>
                        <p><center><?php echo $vitals->get_bloodpressure();?></center></p>
                    </center>
                    <td width="20%">
                        <img border="5"; src="bp.png" alt="mac_and_cheese" width="500" height="500"> 

                </tr></table>
<br><br><br>
<table width="120%" border="1">
    <tr>

        <td width="130%"><center>
            <h2><center>Temperature</center></h2>
            <p><center><?php echo $vitals->get_temperature();?></center></p>
        </center>
        <td width="20%">
            <img border="5"; src="temp.jfif" alt="mac_and_cheese" width="500" height="500"> 

    </tr></table>
    <br><br><br>
    <table width="120%" border="1">
        <tr>
    
            <td width="130%"><center>
                <h2><center>Respiration rate</center></h2>
                <p><center><?php echo $vitals->get_respirationrate(); ?></center></p>
            </center>
            <td width="20%">
                <img border="5"; src="resp.jpg" alt="mac_and_cheese" width="500" height="500"> 
    
        </tr></table>