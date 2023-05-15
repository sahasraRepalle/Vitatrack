<?php
class visionexam {
    var $found = "";
    var $visualacutitytestresults = "";
    var $colorvisiontestresults = "";
    var $eyepowerchange="";

    // Methods
    function get_visualacutitytestresults() {
        return $this->visualacutitytestresults;
    }

    function get_colorvisiontestresults() {
        return $this->colorvisiontestresults;
    }

    function get_eyepowerchangeresults() {
        return $this->eyepowerchange;
    }

    function __construct($patientid) {
        // Include sql connection file
        require(dirname(__FILE__) . '/connection.class.php');
        $connection = new connection();
        $connect = $connection->get_connection();
        // Prepare a select statement
        $sql = "SELECT * FROM visionexam WHERE patientid = ?";
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
                    mysqli_stmt_bind_result($stmt, $patientid, $visualacutitytestresults, $colorvisiontestresults, $eyepowerchange);
                    if(mysqli_stmt_fetch($stmt)){
                        $this->visualacutitytestresults = $visualacutitytestresults;
                        $this->colorvisiontestresults = $colorvisiontestresults;
                        $this->eyepowerchange = $eyepowerchange;
                        $this->found = true;
                    }
                } else{
                    // visionexam does not exist. 
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

