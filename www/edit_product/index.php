<?php
                include("./get_prod.php");
                ?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="edit_book.css"></link>
    <title>Cadastro de Clientes</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="../">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="#">Adicionar um produto!</a>
                <a class="nav-link" href="../">Olhar produtos!</a>
            </div>
        </div>
    </div>
</nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form id="styledForm" action="edit.php" method="POST">
                <input type="hidden" name="id" value="<?php print @$_GET["id"]; ?>">
                    <h1>Nome: <input type="text" name="bookName" value=<?php echo $bookName?> /></h1>
                    <div class="row g-3">
                        <div class="col-md-auto">Quantidade: <input type="number" name="bookAvailable" value=<?php echo $available?> /></div>
                        <div class="col">Preço: <input type="number" name="bookPrice" value=<?php echo $price?> /></div>
                    </div>
                    <div class="form-group">
                        <button id="sendButton" class="btn btn-success"type="submit">Enviar</button>
                    </div>
                </form>
                <form action="delete.php" method="POST">
                <input type="hidden" name="id" value="<?php print @$_GET["id"]; ?>">     
                      <div class="form-group">
                        <button id="sendButton" class="btn btn-danger"type="submit">DELETAR</button>
                    </div></form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
