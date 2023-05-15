<?php
    //include auth.php file on all secure pages
    include("auth.php");
    require(dirname(__FILE__) . '/classes/xraysresults.class.php');
    $patientid = 1;
    if (!isset($_SESSION['patientid'])) {
        $patientid = $_SESSION['patientid'];
    }
    $xrays = new xrays($patientid);
?>
<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="VITATRACK Logo.png">
    <title>X-Rays</title>
</head>
<body>
    <img src="VITATRACK Logo.png" alt="VITATRACK Logo" class="eatezlogo" style="height:6vh; width:auto;">
    <nav>
    </nav>
    <div class="line"></div>
    <article>
        
        <div <center>


         
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

            <table width="120%" border="1">
                <tr>
                    <td width="120%"><center>
                        <h2><center>X-Ray Imaging</center></h2>
                        <p><center><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($xrays->get_xrayimaging()->load()) .'" />';?></center></p>
                    </center>
                    <td width="10%">
                        <img border="5"; src="xr.jpg" alt="mac_and_cheese" width="500" height="500"> 

                </tr></table>
                <br><br><br>
            <table width="120%" border="1">
                <tr>
                    <td width="120%"><center>
                        <h2><center>Other Oral Scans</center></h2>
                        <p><center><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($xrays->get_otheroralscans()->load()) .'" />'?></center></p>
                    </center>
                    <td width="10%">
                        <img border="5"; src="os.jfif" alt="mac_and_cheese" width="500" height="500"> 

                </tr></table>
<br><br><br>
