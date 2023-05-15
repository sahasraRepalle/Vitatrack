<?php
    //include auth.php file on all secure pages
    include("auth.php");
    require(dirname(__FILE__) . '/classes/generaldentalinforesults.class.php');
    $patientid = 1;
    if (!isset($_SESSION['patientid'])) {
        $patientid = $_SESSION['patientid'];
    }
    $generaldentalinfo = new generaldentalinfo($patientid);
?>

<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="VITATRACK Logo.png">
    <title>General Dental Info</title>
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
                        <h2><center># of cavities</center></h2>
                        <p><center><?php echo $generaldentalinfo->get_numberofcavities(); ?></center></p>
                    </center>
                    <td width="20%">
                        <img border="5"; src="cav.jpg" alt="mac_and_cheese" width="500" height="500"> 

                </tr></table>
                <br><br><br>
            <table width="120%" border="1">
                <tr>
                    <td width="130%"><center>
                        <h2><center># of adult teeth</center></h2>
                        <p><center><?php echo $generaldentalinfo->get_numberofadultteeth();?></center></p>
                    </center>
                    <td width="20%">
                        <img border="5"; src="pt.jpg" alt="mac_and_cheese" width="500" height="500"> 

                </tr></table>
<br><br><br>
<table width="120%" border="1">
    <tr>

        <td width="130%"><center>
            <h2><center># of baby teeth</center></h2>
            <p><center><?php echo $generaldentalinfo->get_numberofbabyteeth();?></center></p>
        </center>
        <td width="20%">
            <img border="5"; src="bt.jpg" alt="mac_and_cheese" width="500" height="500"> 

    </tr></table>
    <br><br><br>
    <table width="120%" border="1">
        <tr>
    
            <td width="130%"><center>
                <h2><center>Bite Class</center></h2>
                <p><center><?php echo $generaldentalinfo->get_biteclass(); ?></center></p>
            </center>
            <td width="20%">
                <img border="5"; src="bc.jpg" alt="mac_and_cheese" width="500" height="500"> 
    
        </tr></table>s