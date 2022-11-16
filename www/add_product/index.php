<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
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
                <form action="save_product.php" method="POST">
                    <input type="hidden" name="addBook" value="add">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="bookName" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Quantidade</label>
                        <input type="number" name="booksAvailable" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Preço</label>
                        <input type="number" min="1" step="any" name="price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button id="sendButton" class="btn btn-success"type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
