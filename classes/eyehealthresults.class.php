<?php
class eyehealth {
    var $found = "";
    var $eyeproblems = "";
    var $eyeinfections = "";
    // Methods
    function get_eyeproblems() {
        return $this->eyeproblems;
    }

    function get_eyeinfections() {
        return $this->eyeinfections;
    }

    function __construct($patientid) {
        // Include sql connection file
        require(dirname(__FILE__) . '/connection.class.php');
        $connection = new connection();
        $connect = $connection->get_connection();
        // Prepare a select statement
        $sql = "SELECT * FROM eyehealth WHERE patientid = ?";
        if($stmt = mysqli_prepare($connect, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $patientid);
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                // Check if eye range exists.
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $patientid, $eyeproblems, $eyeinfections);
                    if(mysqli_stmt_fetch($stmt)){
                        $this->eyeproblems = $eyeproblems;
                        $this->eyeinfections = $eyeinfections;
                        $this->found = true;
                    }
                } else{
                    // eye range does not exist. 
                    // Redirect user to error page
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

