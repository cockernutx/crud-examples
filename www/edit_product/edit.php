<?php
	include("../db_connection/dbConnection.php");

			$sql = "UPDATE produtos SET 
						proNome='".$_POST["bookName"]."', proQtd='".$_POST["bookAvailable"]."', proValor='".$_POST["bookPrice"]."' 
					WHERE proId = ".$_POST["id"];

			$result = $connection->query($sql) or die($connection->error);

			if($result==true)
			{
				print "<script>alert('Product edited succesfully!');</script>";
				print "<script>location.href='../';</script>";
			}
			else
			{
				print "<script>alert('There was an error editing the Product :(');</script>";
				print "<script>location.href='../';</script>";
			}

?>
