<?php function createTable($tbl) {  ?>
    <table class="table">
  <thead>
    <tr>
        <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Quantidade </th>
      <th scope="col">Preço</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
    <?php 

     while($linhas = $tbl->fetch_object()) {
        
        print "<tr>" ;
        print "<th scope=\"row\">".$linhas->proId."</th>";
        print "<th>".$linhas->proNome."</th>";
        print "<th>".$linhas->proQtd."</th>";
        print "<th>$".$linhas->proValor."</th>";
        print "<th><a href=\"edit_product/?id=".$linhas->proId."\">Edit</a></th>";
        print "</tr>";
     }
    ?>
  </tbody>
</table>
<?php }?>

<?php
	include("./db_connection/dbConnection.php");
	//Aqui vai buscar a ação através do Request
    $sql = "SELECT * FROM produtos";

    $result = $connection->query($sql) or die($connection->error);
    $rowAmmount = $result->num_rows;

    if($rowAmmount > 0) {
        createTable($result);
    }
?>
