<?php

$connection = new mysqli("127.0.0.1", "root", "0000", "db");
if ($connection->connect_errno) {
	http_response_code(505);
    echo "{ \"connectionStatus\": \"" . $connection->connect_errno . "\"}" ;
}


?>
