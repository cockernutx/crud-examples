<?php 
	include("../db_connection/dbConnection.php");
	//Aqui vai buscar a ação através do Request
    $sql = "SELECT * FROM produtos WHERE proId = ".@$_GET["id"];

    $result = $connection->query($sql) or die($connection->error);
    $rowAmmount = $result->num_rows;
    $bookName = "";
    $summary = "";
    $available = 0;
    $price = 0.0;
    while($linhas = $result->fetch_object()) {
        $bookName = $linhas->proNome;
        $available = $linhas->proQtd;

        $price = $linhas->proValor;
    }
?>