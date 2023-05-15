<?php
class xrays {
    var $found = FALSE;
    var $xrayimaging;
    var $otheroralscans;

    // Methods

    function get_found() {
        return $this->found;
    }

    function get_xrayimaging() {
        return $this->xrayimaging;
    }

    function get_otheroralscans() {
        return $this->otheroralscans;
    }

    function __construct($patientid) {
        // Include sql connection file
        require(dirname(__FILE__) . '/connection.class.php');
        $connection = new connection();
        $connect = $connection->get_connection();
        // Prepare a select statement
        $sql = "SELECT * FROM xrays WHERE patientid = ?";
        if($stmt = mysqli_prepare($connect, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $patientid);
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                // Check if bmichart exists.
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $patientid, $xrayimaging, $otheroralscans);
                    if(mysqli_stmt_fetch($stmt)){
                        $this->xrayimaging = $xrayimaging;
                        $this->otheroralscans = $otheroralscans;
                        $this->found = TRUE;
                    }
                } else{
                    // xrays does not exist. 
                    // Redirect user to error page
                    $this->found = FALSE;
                }
            } else{
                $this->found = FALSE;
            }
 
            // Close statement
            mysqli_stmt_close($stmt);
        }
        // Close connection
        mysqli_close($connect);
    }
}    
?>

