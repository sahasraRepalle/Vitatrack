<?php
    //include auth.php file on all secure pages
    include("auth.php");
    require(dirname(__FILE__) . '/classes/visionotherresults.class.php');
    $patientid = 1;
    if (!isset($_SESSION['patientid'])) {
        $patientid = $_SESSION['patientid'];
    }
    $visionother = new visionother($patientid);
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


         
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

            <table width="110%" border="1">
                <tr>
                    <td width="120%"><center>
                        <h2><center>Recommended specialists</center></h2>
                        <p><center><?php  echo $visionother->get_recommendedspecilaists(); ?></center></p>
                    </center>
                    <td width="10%">
                        <img border="5"; src="res.jpg" alt="mac_and_cheese" width="500" height="500"> 

                </tr></table>
                <br><br><br>
            <table width="110%" border="1">
                <tr>
                    <td width="120%"><center>
                        <h2><center>Future procedures</center></h2>
                        <p><center><?php  echo $visionother->get_futureprocedures(); ?></center></p>
                    </center>
                    <td width="10%">
                        <img border="5"; src="fp.png" alt="mac_and_cheese" width="500" height="500"> 

                </tr></table>
<br><br><br>
