<?php
    //include auth.php file on all secure pages
    include("auth.php");
    require(dirname(__FILE__) . '/classes/primaryotherresults.class.php');
    $patientid = 1;
    if (!isset($_SESSION['patientid'])) {
        $patientid = $_SESSION['patientid'];
    }
    $primaryother = new primaryother($patientid);
?>
<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="VITATRACK Logo.png">
    <title>Other</title>
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
                        <h2><center>Lab Test Results</center></h2>
                        <p><center><?php echo $primaryother->get_labtestresults(); ?></center></p>
                    </center>
                    <td width="20%">
                        <img border="5"; src="Ltr.jfif" alt="mac_and_cheese" width="500" height="500"> 

                </tr></table>
                <br><br><br>
            <table width="120%" border="1">
                <tr>
                    <td width="130%"><center>
                        <h2><center>Immunizations</center></h2>
                        <p><center><?php echo $primaryother->get_immunizations(); ?></center></p>
                    </center>
                    <td width="20%">
                        <img border="5"; src="Im.webp" alt="mac_and_cheese" width="500" height="500"> 

                </tr></table>
<br><br><br>
<table width="120%" border="1">
    <tr>

        <td width="130%"><center>
            <h2><center>Allergies</center></h2>
            <p><center><?php echo $primaryother->get_allergies(); ?></center></p>
        </center>
        <td width="20%">
            <img border="5"; src="allergies.jpg" alt="mac_and_cheese" width="500" height="500"> 

    </tr></table>
    <br><br><br>
    <table width="120%" border="1">
        <tr>
    
            <td width="130%"><center>
                <h2><center>Medications</center></h2>
                <p><center><?php echo $primaryother->get_medications();?></center></p>
            </center>
            <td width="20%">
                <img border="5"; src="med.jfif" alt="mac_and_cheese" width="500" height="500"> 
    
        </tr></table>