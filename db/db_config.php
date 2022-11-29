<?php 
    $db_config = parse_ini_file("./../.env");

    function connect_db() {
        global $db_config;
        $db_host = $db_config["DB_HOST"];
        $db_user = $db_config["DB_USER"];
        $db_password = $db_config["DB_PASSWORD"];
        $db_name = $db_config["DB_NAME"];

        $conn = new mysqli($db_host, $db_user, $db_password, $db_name) or die("Connection failed: " . $conn->error);
        $conn->set_charset("utf8mb4");
        return $conn;
    }

    function close($conn) {
        $conn->close();
    }

    connect_db();
?>
