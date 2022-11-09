<?php
	include("../db_connection/dbConnection.php");
	//Aqui vai buscar a ação através do Request
	switch ($_REQUEST["addBook"]) {
		case 'add':
			$sql = "INSERT INTO Books 
						(BookName, Summary, BooksAvailable, BookPrice)
					VALUES
						('".$_POST["bookName"]."','".$_POST["summary"]."','".$_POST["booksAvailable"]."','".$_POST["price"]."')";

			$result = $connection->query($sql) or die($connection->error);

			if($result==true)
			{
				print "<script>alert('Book registered succesfully!');</script>";
				print "<script>location.href='/';</script>";
			}
			else
			{
				print "<script>alert('There was an error registering the book :(');</script>";
				print "<script>location.href='/';</script>";
			}
		break;
		
	}
?>
