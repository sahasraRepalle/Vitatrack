<?php
class bloodtestresults {
    var $found = "";
    var $cholestrollevels = "";
    var $sugarlevels = "";
    var $ironlevels = "";
    var $hemoglobinlevels = "";

    // Methods
    function get_cholestrollevels() {
        return $this->cholestrollevels;
    }

    function get_sugarlevels() {
        return $this->sugarlevels;
    }

    function get_ironlevels() {
        return $this->ironlevels;
    }

    function get_hemoglobinlevels() {
        return $this->hemoglobinlevels;
    }

    function __construct($patientid) {
        // Include sql connection file
        require(dirname(__FILE__) . '/connection.class.php');
        $connection = new connection();
        $connect = $connection->get_connection();
        // Prepare a select statement
        $sql = "SELECT * FROM bloodtestresults WHERE patientid = ?";
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
                    mysqli_stmt_bind_result($stmt, $patientid, $cholestrollevels, $sugarlevels, $ironlevels, $hemoglobinlevels);
                    if(mysqli_stmt_fetch($stmt)){
                        $this->cholestrollevels = $cholestrollevels;
                        $this->sugarlevels = $sugarlevels;
                        $this->ironlevels = $ironlevels;
                        $this->hemoglobinlevels = $hemoglobinlevels;
                        $this->found = true;
                    }
                } else{
                    // bmichart does not exist. 
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

