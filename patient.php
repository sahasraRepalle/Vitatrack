<?php
    //include auth.php file on all secure pages
    include("auth.php");
    require(dirname(__FILE__) . '/classes/patientresults.class.php');
    $patient = new patient("jane.doe@gmail.com");
    echo $patient->get_userid();
    echo $patient->get_firstname();
    echo $patient->get_lastname();
    echo $patient->get_patientid();
?>