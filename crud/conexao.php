<?php
// Configuração do banco de dados
$localhost = "localhost";
$username = "root"; // Altere para o usuário do seu banco
$password = ""; //  a senha do banco
$dbname = "padaria";

// Conectar ao banco de dados
$conexao = new mysqli($localhost, $username, $password, $dbname);

// Verificar conexão
if ($conexao->connect_error) {
    die(("erro na conexão" . $conexao->connect_error));}
    else{
        //echo"conexão realizada";

    }

?>