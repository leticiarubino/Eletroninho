<?php

include("conexao.php");
$produto      = $_POST["produto"];
$tipo = $_POST["tipo"];
$modelo = $_POST["modelo"];
$defeito = $_POST["defeito"];
$cliente = $_POST["cliente"];
$telefone = $_POST["telefone"];
$id        = $_POST["id"];

$sql = "UPDATE produtos SET produto = '$produto', tipo = '$tipo',
defeito = '$defeito', cliente = '$cliente', telefone = '$telefone' WHERE produtos.id = '$id'";

$query = mysqli_query($conn, $sql);

header("Location: listarproduto.php");
?>