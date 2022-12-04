<?php
include("conexao.php");
$id = $_GET["id"];
settype($id, "integer");

$sql = "select * from produtos where id = $id";
$query = mysqli_query($conn, $sql);
$dados  = mysqli_fetch_array($query);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta charset="utf-8">
 <html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Atualizar Funcionário - Eletroninho</title>

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


#tabela{

}
table, th,td {
  border-collapse: collapse;
  padding: 10px 10px;
  table-layout: auto;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;


}

table {
  width: 40%;

}


td{
  background-color:#fff  ;
    color: #;
    opacity: 70%;
    font-family:Growland;
    
}



h2 {
  font-weight: 20;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  color:#000000;
  text-align: center;


}

</style>
</head>

<body>
<form id="cadproduto" name="cadproduto" method="post" action="edicao_produto.php">
<input type="hidden" name="id" id="id" value="<?php echo $id;?>" />
  <h2>EDIÇÃO DE CADASTRO DE PRODUTOS</h2>
  <table width="390" border="1" align="center">
    <tr>
      <td width="165">Produto</td>
      <td width="209"><input name="produto" type="text" id="produto" value="<?php echo $dados["produto"];?>" /></td>
    </tr>
    <tr>
      <td>Tipo de Produto</td>
      <td><input name="tipo" type="text" id="tipo" value="<?php echo $dados["tipo"];?>" /></td>
    </tr>
    <tr>
      <td>Modelo</td>
      <td><input name="modelo" type="text" id="modelo" value="<?php echo $dados["modelo"];?>" /></td>
    </tr>
	<tr>
      <td>Defeito</td>
      <td><input name="defeito" type="text" id="defeito" value="<?php echo $dados["defeito"];?>" /></td>
    </tr>
    <tr>
      <td>Cliente</td>
      <td><input name="cliente" type="text" id="cliente" value="<?php echo $dados["cliente"];?>" /></td>
    </tr>
    <tr>
      <td>Telefone</td>
      <td><input name="telefone" type="text" id="telefone" value="<?php echo $dados["telefone"];?>" /></td>
    </tr>
	  <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="Gravar" style="cursor:pointer"/></td> 
    </tr>
    </table>
    </form>
    </body>
    </html>