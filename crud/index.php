<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <h1>Cadastro de Produtos</h1>
    <form action="cadastro.php" method="POST">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome </label>
            <input type="text" class="form-control" name="nome">

            <label for="preco" class="form-label">Preço</label>
            <input type="number" class="form-control" name="preco">

            <input type="submit" class="btn btn-success">
            <a href="../crud/tabela.php"><button    type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button></a>
                   
</body>
</html>


