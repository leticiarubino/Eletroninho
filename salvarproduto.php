<?php
    include_once("conexao.php");
   
    $produto = $_POST["produto"];
    $tipo = $_POST["tipo"];
    $modelo = $_POST["modelo"];
    $defeito = $_POST["defeito"];
    $cliente = $_POST["cliente"];
    $telefone = $_POST["telefone"];

    
    $result_produtos= "INSERT INTO produtos(produto, tipo, modelo, defeito, cliente, telefone)
                    VALUES ('$produto','$tipo', '$modelo', '$defeito', '$cliente', '$telefone')";
    $resultado_produtos= mysqli_query($conn, $result_produtos);
   
    if(mysqli_affected_rows($conn) != 0){
        echo "<script>alert('Produto cadastrado com sucesso');</script>";
    }   

      
      

        else{
                echo "Erro ao cadastrar";
                   
                 
            }
            return(mysqli_affected_rows($conn) != 0)
?>