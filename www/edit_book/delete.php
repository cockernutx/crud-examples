<?php
	include("../db_connection/dbConnection.php");

			$sql = "DELETE FROM Books WHERE BookID=".$_POST["id"];

			$result = $connection->query($sql) or die($connection->error);

			if($result==true)
			{
				print "<script>alert('Book deleted succesfully!');</script>";
				print "<script>location.href='/';</script>";
			}
			else
			{
				print "<script>alert('There was an error deleting the book :(');</script>";
				print "<script>location.href='/';</script>";
			}

?>
