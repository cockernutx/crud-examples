<?php function createTable($tbl) {  ?>
    <table class="table">
  <thead>
    <tr>
        <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Ammount available</th>
      <th scope="col">Price</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
    <?php 

     while($linhas = $tbl->fetch_object()) {
        
        print "<tr>" ;
        print "<th scope=\"row\">".$linhas->BookID."</th>";
        print "<th>".$linhas->BookName."</th>";
        print "<th>".$linhas->BooksAvailable."</th>";
        print "<th>$".$linhas->BookPrice."</th>";
        print "<th><a href=\"edit_book/?id=".$linhas->BookID."\">Edit</a></th>";
        print "</tr>";
     }
    ?>
  </tbody>
</table>
<?php }?>

<?php
	include("db_connection/dbConnection.php");
	//Aqui vai buscar a ação através do Request
    $sql = "SELECT * FROM Books";

    $result = $connection->query($sql) or die($connection->error);
    $rowAmmount = $result->num_rows;

    if($rowAmmount > 0) {
        createTable($result);
    }
?>
