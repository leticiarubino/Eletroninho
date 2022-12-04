<?php
    include_once("conexao.php");
   
    $nome = $_POST["Nome"];
    $rg = $_POST["RG"];
    $cpf = $_POST["CPF"];
    $pai = $_POST["Pai"];
    $mae = $_POST["Mãe"];
    $email = $_POST["Email"];
    $telefone = $_POST["Telefone"];
    
    $result_cliente = "INSERT INTO cliente (Nome, RG, CPF, Pai, Mãe, Email, Telefone)
                    VALUES ('$nome','$rg', '$cpf' ,'$pai', '$mae', '$email', '$telefone')";
    $resultado_cliente = mysqli_query($conn, $result_cliente);
   
    if(mysqli_affected_rows($conn) != 0){
                echo "Cliente cadastrado com sucesso";
            }else{
                echo "Erro ao cadastrar";
                   
                 
            }
            
?>