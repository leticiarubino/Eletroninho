<?php

include("conexao.php");
$nome      = $_POST["Nome"];
$nascimento = $_POST["Nascimento"];
$rg = $_POST["RG"];
$cpf = $_POST["CPF"];
$endereco = $_POST["Pai"];
$estado = $_POST["Mãe"];
$email = $_POST["Email"];
$telefone = $_POST["Telefone"];
$id        = $_POST["id"];

$sql = "UPDATE funcionario SET Nome = '$nome', Nascimento = '$nascimento',
RG = '$rg', CPF = '$cpf', Pai = '$endereco', Mãe = '$estado', Email = '$email',
Telefone = '$telefone' WHERE funcionario.id = '$id'";

$query = mysqli_query($conn, $sql);

header("Location: listarfunc.php");
?>