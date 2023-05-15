<?php
class connection {
    var $connection;

    function get_connection() {
        return $this->connection;
    }

    function __construct() {
          //Get Heroku ClearDB connection information
        $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));

        $cleardb_server = $cleardb_url["host"];

        $cleardb_username = $cleardb_url["user"];

        $cleardb_password = $cleardb_url["pass"];

        $cleardb_db = substr($cleardb_url["path"],1);

        $connect = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
        // Check connection
        if($connect === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        } else {
            $this->connection = $connect;
        }
    }
}


?>