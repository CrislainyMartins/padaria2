
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sucesso</title>
 
  </head>

<body>
  <div class="container">
      <div class="coluna">

<?php

include "conexao.php";

$id= $_POST['id'];
$nome= $_POST['nome'];

$sql = "DELETE FROM produtos WHERE id_produto = $id";

if($sql = mysqli_query($conexao,$sql)){

    echo"$nome Excluido com sucesso!";

}
else{

    echo"error ao Excluir usuairo";
    
}



?>

<button class="btn btn-success"><a href="../crud/tabela.php" style="text-decoration: none; color:white;">Voltar</a></button>

      </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>

</html>