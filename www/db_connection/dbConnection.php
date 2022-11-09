<?php
	define("HOST","localhost");
	define("USER","root");
	define("PASSWORD","0000");
	define("DB","db");

	$connection = new mysqli(HOST,USER,PASSWORD,DB);
	
	if($connection->error)
	{
        http_response_code(505);
		//A função die, significa que vamos matar o processo, encerrar o processo
    	die("{ \"connectionStatus\": \"". $connection->error."\"}");
	}
?>
