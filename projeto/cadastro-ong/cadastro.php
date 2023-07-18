<?php 
include "../includes/conexao.php";

$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$endereco = $_POST["endereco"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$cnpj = $_POST["cnpj"];
$senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
$sql = "insert into ongs(nome, telefone, email, endereco, bairro, cidade, estado, cnpj, senha) values('$nome', '$telefone', '$email', '$endereco', '$bairro', '$cidade', '$estado', '$cnpj', '$senha')";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("Location: ../homePage/homePage.html");
?>