<?php
include("conexao.php");

$sql = "select * from cliente";
$query = mysqli_query($conn, $sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Lista de Clientes - Eletroninho</title>
<style>

body {
    background: linear-gradient(#8FE3CF, #256D85, #2B4865, #002B5B);
    background-size: cover;
    width:100%;
    align-items: baseline;
    justify-content: center;
    padding: 10px;
    min-height: 100vh;
    margin:0;
}

table, th,td {
  border-collapse: collapse;
  padding: 10px 10px;
  table-layout: auto;
  font-family: secular;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);


}

table {
  width: 80%;

}


td{
  background-color:#fff  ;
    color: #;
    opacity: 70%;
    font-family:secular;
    font-family:Mulish;
    
}
</style>
</head>

<body>
<?php

if(mysqli_fetch_array($query) < 1) {
  $mysqli->close();
}
?>
<h1><center> LISTA DE CLIENTES </center></h1>
<div style="overflow-x:auto;">
<table width="" border="" align="center">

<thead>

<tr>
    <th>ID</th>
    <th>NOME</th>
    <th>RG</th>
    <th>CPF</th>
    <th>PAI</th>
    <th>MÃE</th>
    <th>EMAIL</th>
    <th>TELEFONE</th>

    <th>EDITAR/EXCLUIR</th>
  </tr>
</thead>
<?php
while($L = mysqli_fetch_array($query)) {
  $id        = $L["id"];
  $nome      = $L["Nome"];
  $rg     = $L["RG"];
  $cpf     = $L["CPF"];
  $pai     = $L["Pai"];
  $mae     = $L["Mãe"];
  $email     = $L["Email"];
  $telefone     = $L["Telefone"];
  
    echo"
<tbody>
  <tr>
    <td>$id</td>
    <td>$nome</td>
    <td>$rg</td>
    <td>$cpf</td>
    <td>$pai</td>
    <td>$mae</td>
    <td>$email</td>
    <td>$telefone</td>

    <td><button><a href=\"editar_cliente.php?id=$id\">EDITAR</a> </button> |
 <button> <a href=\"excluircliente.php?id=$id\">EXCLUIR</a></button></td>
  </tr>
  </tbody>\n";
}  
?> 
</table>
</div>
</body>
</html>