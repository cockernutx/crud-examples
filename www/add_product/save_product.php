<?php
	include("../db_connection/dbConnection.php");
	//Aqui vai buscar a ação através do Request
	switch ($_REQUEST["addBook"]) {
		case 'add':
			$sql = "INSERT INTO produtos 
						(proNome, proQtd, proValor)
					VALUES
						('".$_POST["bookName"]."','".$_POST["booksAvailable"]."','".$_POST["price"]."')";

			$result = $connection->query($sql) or die($connection->error);

			if($result==true)
			{
				print "<script>alert('Product registered succesfully!');</script>";
				print "<script>location.href='../';</script>";
			}
			else
			{
				print "<script>alert('There was an error registering the Product :(');</script>";
				print "<script>location.href='../';</script>";
			}
		break;
		
	}
?>
