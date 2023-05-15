<?php
class patient {
    var $found = false;
    var $userid = "";
    var $firstname = "";
    var $lastname = "";
    var $patientid = "";
    // Methods
    function get_userid() {
        return $this->userid;
    }

    function get_firstname() {
        return $this->firstname;
    }

    function get_lastname() {
        return $this->lastname;
    }

    function get_patientid() {
        return $this->patientid;
    }

    function __construct($username) {
        // Include sql connection file
        require_once(dirname(__FILE__) . '/connection.class.php');
        $connection = new connection();
        $connect = $connection->get_connection();
        // Prepare a select statement
        $sql = "SELECT * FROM patient WHERE userid = ?";
        
        if($stmt = mysqli_prepare($connect, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $userid, $patientid, $lastname, $firstname);
                    if(mysqli_stmt_fetch($stmt)){
                        // patient exists for the userid
                        $this->userid = $userid;
                        $this->patientid = $patientid; 
                        $this->lastname = $lastname; 
                        $this->firstname = $firstname;    
                        $this->found = true;
                    }
                } else{
                    // Patient doesn't exist 
                    $this->found = false; 
                }
            } else{
                $this->found = false; 
            }
            // Close statement
            mysqli_stmt_close($stmt);
        }
        // Close connection
        mysqli_close($connect);
    }
}    
?>

