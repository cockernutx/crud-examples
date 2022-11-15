<?php
	include("../db_connection/dbConnection.php");

			$sql = "DELETE FROM produtos WHERE proId=".$_POST["id"];

			$result = $connection->query($sql) or die($connection->error);

			if($result==true)
			{
				print "<script>alert('Product deleted succesfully!');</script>";
				print "<script>location.href='/';</script>";
			}
			else
			{
				print "<script>alert('There was an error deleting the product :(');</script>";
				print "<script>location.href='/';</script>";
			}

?>
