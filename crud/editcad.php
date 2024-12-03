<?php 
include ("conexao.php");
$id= $_POST['id'];
$nome= $_POST['nome'];
$preco= $_POST['preco'];



$sql = "UPDATE produtos set nome = '$nome' , preco = '$preco'
WHERE id_produto = $id";

if ($conexao=mysqli_query($conexao, $sql)){
    echo"alterado com sucesso";
}
else{
    echo"erro ao se cadastrar com o banco".mysqli_connect_error($conexao);
}

?>

