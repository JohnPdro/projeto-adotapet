<?php
include "../includes/conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$data_nascimento = $_POST["data_nascimento"];
$endereco = $_POST["endereco"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$cpf = $_POST["cpf"];
$senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

$sql = "INSERT INTO protetores (nome, email, telefone, data_nascimento, endereco, bairro, cidade, estado, cpf, senha) VALUES ('$nome', '$email', '$telefone', '$data_nascimento', '$endereco', '$bairro', '$cidade', '$estado', '$cpf', '$senha')";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("Location: ../homePage/homePage.html");
?>
