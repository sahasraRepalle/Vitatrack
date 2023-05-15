<?php
class primaryother {
    var $found = "";
    var $labtestresults = "";
    var $immunizations = "";
    var $allergies = "";
    var $medications = "";

    // Methods
    function get_labtestresults() {
        return $this->labtestresults;
    }

    function get_immunizations() {
        return $this->immunizations;
    }

    function get_allergies() {
        return $this->allergies;
    }

    function get_medications() {
        return $this->medications;
    }

    function __construct($patientid) {
        // Include sql connection file
        require(dirname(__FILE__) . '/connection.class.php');
        $connection = new connection();
        $connect = $connection->get_connection();
        // Prepare a select statement
        $sql = "SELECT * FROM primaryother WHERE patientid = ?";
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
                    mysqli_stmt_bind_result($stmt, $patientid, $labtestresults, $immunizations, $allergies, $medications);
                    if(mysqli_stmt_fetch($stmt)){
                        $this->patientid = $patientid;
                        $this->labtestresults = $labtestresults;
                        $this->immunizations = $immunizations;
                        $this->allergies = $allergies;
                        $this->medications = $medications;
                        $this->found = true;
                    }
                } else{
                    // primaryother does not exist. 
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

