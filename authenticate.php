<?php
    session_start();
    // Check if the user is already logged in, if yes then redirect him to welcome page
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: index.php");
        exit;
    }
    // Define variables and initialize with empty values
    $username = $password = "";
    $username_err = $password_err = $login_err = "";

    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = stripslashes($_POST['username']);
        //escapes special characters in a string
        // $username = mysqli_real_escape_string($connection,$username);
        
        $password = stripslashes($_POST['password']);
        // $password = mysqli_real_escape_string($connection,$password);
        
        // Validate credentials
        if(empty($username_err) && empty($password_err)){
            require_once(dirname(__FILE__) . '/classes/authenticate.class.php');
            $authenticateuser = new authenticate($username, $password);
            if($authenticateuser->get_authenticated()){
                // Store data in session variables
                $_SESSION["loggedin"] = true;
                $_SESSION["userid"] = $authenticateuser->get_userid();
                require(dirname(__FILE__) . '/classes/patientresults.class.php');
                $patient = new patient($authenticateuser->get_userid());
                $_SESSION["patientid"] = $patient->get_patientid();
                header("location: index.php");
                exit;
            } else{
                // Password is not valid, display a generic error message
                $_SESSION['message'] = "<p style='font-size: 14px; color: red;'>Username/password is incorrect.</p>";
                header("location: login.php");
                exit;
            }
        }
    }
?>