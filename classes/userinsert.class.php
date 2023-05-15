<?php
class userinsert {
    var $insertuser = FALSE;
    // Methods
    function get_insertuser() {
        return $this->insertuser;
    }
    function __construct($username, $password, $role) {
        // Include sql connection file
        require_once(dirname(__FILE__) . '/connection.class.php');
        $connection = new connection();
        $connect = $connection->get_connection();
        // Prepare a insert user statement
        $stmt = $connect->prepare("INSERT INTO login (userid, password, role) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $password, $role);
        $stmt->execute();
        $this->insertuser = TRUE;
        $stmt->close();
        $connect->close();
    }
}    
?>

