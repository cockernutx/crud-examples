<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="add_books.css"></link>
    <title>Cadastro de Clientes</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">            
            <a class="nav-link" href="index.php">Add a book!</a>
            <a class="nav-link" href="clientes.php">Browse books!</a>
          </div>
        </div>
      </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="save_book.php" method="POST">
                    <input type="hidden" name="acao" value="cadastrar">
                    <div class="form-group">
                        <label>Book Name</label>
                        <input type="text" name="bookName" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Summary</label>
                        <input type="text" name="summary" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Books available</label>
                        <input type="number" name="booksAvailable" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Book price</label>
                        <input type="number" min="1" step="any" name="price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button id="sendButton" class="btn btn-success"type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
