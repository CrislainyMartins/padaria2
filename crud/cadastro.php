<?php 
include ("conexao.php");
$nome= $_POST['nome'];
$preco= $_POST['preco'];



$consulta= "INSERT INTO produtos(nome, preco)
VALUES('$nome','$preco')";

if ($conexao=mysqli_query($conexao, $consulta)){
    echo"produto cadastrado com sucesso";
}
else{
    echo"erro ".mysqli_connect_error($conexao);
}
?>