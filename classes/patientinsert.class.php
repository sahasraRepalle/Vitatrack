<?php
class patientinsert {
    var $insertpatient = FALSE;
    // Methods
    function get_insertpatient() {
        return $this->insertpatient;
    }
    function __construct($username, $firstname, $lastname) {
        // Include sql connection file
        require_once(dirname(__FILE__) . '/connection.class.php');
        $connection = new connection();
        $connect = $connection->get_connection();
        $stmt = $connect->prepare("INSERT INTO patient (userid, firstname, lastname) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $firstname, $lastname);
        $stmt->execute();
        $this->insertuser = TRUE;
        $stmt->close();
        $connect->close();
    }

}    
?>

