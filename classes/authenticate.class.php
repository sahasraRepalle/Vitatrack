<?php
class authenticate {
    var $authenticated = FALSE;
    var $userid = "base";
    var $hello ="";

    // Methods
    function get_authenticated() {
        return $this->authenticated;
    }

    function get_userid() {
        return $this->userid;
    }

    function setHello()
    {
        $this->hello = "Hello";
    }

    function get_hello() {
        return $this->hello;
    }

    function __construct($username, $password) {
        // Include sql connection file
        require_once(dirname(__FILE__) . '/connection.class.php');
        $connection = new connection();
        $connect = $connection->get_connection();
        // Prepare a select statement
        $sql = "SELECT * FROM login WHERE userid = ?";
        
        if($stmt = mysqli_prepare($connect, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $username);
        
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $userid, $db_password, $role);
                    if(mysqli_stmt_fetch($stmt)){
                        // if(password_verify($password, $hashed_password)){
                          if(($password != null) && ($password == $db_password)) {
                            // Password is correct, so start a new session
                            $this->authenticated = TRUE;   
                            $this->userid = $userid;
                         
                        } else{
                            // Password is not valid, display a generic error message
                            $this->authenticated = FALSE; 
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error 
                    $this->authenticated = FALSE; 
                    $this->userid="nouser";
                }
            } else{
                $this->authenticated = "false"; 
                $this->userid="noconnection";
            }
            // Close statement
            mysqli_stmt_close($stmt);
        }
        // Close connection
        mysqli_close($connect);
    }
}  
?>

