<?php
    include("conexao.php");
   
    $nome = $_POST["Nome"];
    $data = $_POST["Nascimento"];
    $rg = $_POST["RG"];
    $cpf = $_POST["CPF"];
    $pai = $_POST["Pai"];
    $mae = $_POST["Mãe"];
    $email = $_POST["Email"];
    $telefone = $_POST["Telefone"];
    
    $result_funcionario = "INSERT INTO funcionario(Nome, Nascimento, RG, CPF, Pai, Mãe, Email, Telefone)
                    VALUES ('$nome', '$data', '$rg', '$cpf', '$pai', '$mae', '$email', '$telefone')";
    $resultado_funcionario = mysqli_query($conn, $result_funcionario);
   
    if(mysqli_affected_rows($conn) != 0){
                echo "Funcionário cadastrado com sucesso";
            }else{
                echo "Erro ao cadastrar";
                   
                 
            }
            
?>