<?php
class generaldentalinfo {
    var $found = "";
    var $numberofcavities = "";
    var $numberofadultteeth = "";
    var $numberofbabyteeth = "";
    var $biteclass = "";

    // Methods
    function get_numberofcavities() {
        return $this->numberofcavities;
    }

    function get_numberofadultteeth() {
        return $this->numberofadultteeth;
    }

    function get_numberofbabyteeth() {
        return $this->numberofbabyteeth;
    }

    function get_biteclass() {
        return $this->biteclass;
    }

    function __construct($patientid) {
        // Include sql connection file
        require(dirname(__FILE__) . '/connection.class.php');
        $connection = new connection();
        $connect = $connection->get_connection();
        // Prepare a select statement
        $sql = "SELECT * FROM generaldentalinfo WHERE patientid = ?";
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
                    mysqli_stmt_bind_result($stmt, $patientid, $numberofcavities, $numberofadultteeth, $numberofbabyteeth, $biteclass);
                    if(mysqli_stmt_fetch($stmt)){
                        $this->numberofcavities = $numberofcavities;
                        $this->numberofadultteeth = $numberofadultteeth;
                        $this->numberofbabyteeth = $numberofbabyteeth;
                        $this->biteclass = $biteclass;
                        $this->found = true;
                    }
                } else{
                    // generaldentalinfo does not exist. 
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

