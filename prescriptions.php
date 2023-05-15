<?php
    //include auth.php file on all secure pages
    include("auth.php");
    require(dirname(__FILE__) . '/classes/prescriptionsresults.class.php');
    $patientid = 1;
    if (!isset($_SESSION['patientid'])) {
        $patientid = $_SESSION['patientid'];
    }
    $prescriptions = new prescriptions($patientid);
?>
<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="VITATRACK Logo.png">
    <title>Prescriptions</title>
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
                        <h2><center>Need for glasses/contacts</center></h2>
                        <p><center><?php echo $prescriptions->get_glasses_contacts(); ?></center></p>
                    </center>
                    <td width="10%">
                        <img border="5"; src="gc.png" alt="mac_and_cheese" width="500" height="500"> 

                </tr></table>
                <br><br><br>
            <table width="110%" border="1">
                <tr>
                    <td width="120%"><center>
                        <h2><center>Name of New Prescription</center></h2>
                        <p><center><?php echo $prescriptions->get_prescriptionmedicines(); ?></center></p>
                    </center>
                    <td width="10%">
                        <img border="5"; src="np.jpg" alt="mac_and_cheese" width="500" height="500"> 

                </tr></table>
<br><br><br>
