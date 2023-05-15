<?php
    //include auth.php file on all secure pages
    include("auth.php");
    require(dirname(__FILE__) . '/classes/oralhygieneresults.class.php');
    $patientid = 1;
    if (!isset($_SESSION['patientid'])) {
        $patientid = $_SESSION['patientid'];
    }
    $oralhygiene = new oralhygiene($patientid);
?>
<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="VITATRACK Logo.png">
    <title>Oral Hygiene</title>
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

         
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

            <table width="100%" border="1">
                <tr>
                    <td width="120%"><center>
                        <h2><center>Cleaning Recommendations</center></h2>
                        <p><center><? echo $oralhygiene->get_cleaningrecommendations();?></center></p>
                    </center>
                    <td width="10%">
                        <img border="5"; src="cr.jpg" alt="mac_and_cheese" width="500" height="500"> 

                </tr></table>
                <br><br><br>
            <table width="100%" border="1">
                <tr>
                    <td width="120%"><center>
                        <h2><center>Hygiene Rating</center></h2>
                        <p><center><?php echo $oralhygiene->get_hygienerating(); ?></center></p>
                    </center>
                    <td width="10%">
                        <img border="5"; src="hr.png" alt="mac_and_cheese" width="500" height="500"> 

                </tr></table>
<br><br><br>
