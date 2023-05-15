<?php
    //include auth.php file on all secure pages
    include("auth.php");
    require(dirname(__FILE__) . '/classes/bloodtestresults.class.php');
    $patientid = 1;
    if (!isset($_SESSION['patientid'])) {
        $patientid = $_SESSION['patientid'];
    } 
    $bloodtestresults = new bloodtestresults($_SESSION['patientid']);
    
?>
<html>
<head>

    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="VITATRACK Logo.png">
    <title>Blood Test Results</title>
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
                        <h2><center>Cholestrol Levels</center></h2>
                        <p><center><?php echo $bloodtestresults->get_cholestrollevels();?></center></p>
                    </center>
                    <td width="20%">
                        <img border="5"; src="cl.jpg" alt="mac_and_cheese" width="500" height="500"> 

                </tr></table>
                <br><br><br>
            <table width="120%" border="1">
                <tr>
                    <td width="130%"><center>
                        <h2><center>Sugar Levels</center></h2>
                        <p><center><?php echo $bloodtestresults->get_sugarlevels();?></center></p>
                    </center>
                    <td width="20%">
                        <img border="5"; src="sl.jpg" alt="mac_and_cheese" width="500" height="500"> 

                </tr></table>
<br><br><br>
<table width="120%" border="1">
    <tr>

        <td width="130%"><center>
            <h2><center>Iron Levels</center></h2>
            <p><center><?php echo $bloodtestresults->get_ironlevels();?></center></p>
        </center>
        <td width="20%">
            <img border="5"; src="IL.jpg" alt="mac_and_cheese" width="500" height="500"> 

    </tr></table>
    <br><br><br>
    <table width="120%" border="1">
        <tr>
    
            <td width="130%"><center>
                <h2><center>Hemoglobin Levels</center></h2>
                <p><center><?php echo $bloodtestresults->get_hemoglobinlevels();?></center></p>
            </center>
            <td width="20%">
                <img border="5"; src="hl.png" alt="mac_and_cheese" width="500" height="500"> 
    
        </tr></table>