<?php
include("conexao.php");
$id = $_GET["id"];
$mysqli = new mysqli("localhost","root","","eletroninho");

$mysqli -> query("SELECT * FROM produtos");
echo "Total de registros encontrados: " . $mysqli -> affected_rows;

$mysqli -> query("DELETE FROM produtos WHERE id = $id");
echo "<br> Total de registros excluídos: " . $mysqli -> affected_rows;

$mysqli -> close();
?>