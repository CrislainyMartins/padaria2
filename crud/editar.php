<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Editar produtos</title>

</head>

<body>
    <?php 
    include("conexao.php");
    $id = $_GET["id_produto"] ?? '';
    $sql = "SELECT * FROM produtos WHERE id_produto = $id";

    $dados = mysqli_query($conexao,$sql);
    $linha = mysqli_fetch_assoc($dados);
    
    
    ?>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Alteração de dados</h1>
        <form action="editcad.php" method="POST">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome"required value="<?php echo $linha['nome'] ;?>">

            <label for="preco" class="form-label">Preco</label>
            <input type="number" class="form-control" name="preco" value="<?php echo $linha['preco'] ;?>">



            <input type="submit" class="btn btn-success" value="salvar alterações">
            <input type="hidden" name="id" value="<?php echo $linha['id_produto'] ;?>">
            

          </div>
          <button class="btn btn-success"><a href="../crud/tabela.php" style="text-decoration: none; color:white;">Voltar</a></button>
      </div>
    </div>
  </div>












  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>