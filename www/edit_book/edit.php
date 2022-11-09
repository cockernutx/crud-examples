<?php
	include("../db_connection/dbConnection.php");

			$sql = "UPDATE Books SET 
						BookName='".$_POST["bookName"]."', Summary='".$_POST["bookSummary"]."', BooksAvailable='".$_POST["bookAvailable"]."', BookPrice='".$_POST["bookPrice"]."' 
					WHERE BookID = ".$_POST["id"];

			$result = $connection->query($sql) or die($connection->error);

			if($result==true)
			{
				print "<script>alert('Book edited succesfully!');</script>";
				print "<script>location.href='/';</script>";
			}
			else
			{
				print "<script>alert('There was an error editing the book :(');</script>";
				print "<script>location.href='/';</script>";
			}

?>
