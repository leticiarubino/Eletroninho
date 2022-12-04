<?php

include("conexao.php");
$nome = $_POST["Nome"];
$rg = $_POST["RG"];
$cpf = $_POST["CPF"];
$pai = $_POST["Pai"];
$mae = $_POST["Mãe"];
$email = $_POST["Email"];
$telefone = $_POST["Telefone"];
$id        = $_POST["id"];

$sql = "UPDATE cliente SET Nome = '$nome', RG = '$rg', CPF = '$cpf', Pai = '$pai', Mãe = '$mae', Email = '$email',
Telefone = '$telefone' WHERE cliente.id = '$id'";

$query = mysqli_query($conn, $sql);

header("Location: listarcliente.php");
?>