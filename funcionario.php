<?php
    include("conexao.php");
   
    $nome = $_POST["nome"];
    $data_nasc = $_POST["data"];
    $rg = $_POST["rg"];
    $cpf = $_POST["cpf"];
    $pai = $_POST["pai"];
    $mae = $_POST["mae"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    
    $result_func = "INSERT INTO funcionario(nome, data_nasc, rg, cpf, pai, mae, email, telefone)
                    VALUES ('$nome', '$data_nasc', '$rg', '$cpf', '$pai', '$mae', '$email', '$telefone')";
    $resultado_func = mysqli_query($conn, $result_func);
   
    if(mysqli_affected_rows($conn) != 0){
                echo "Funcionário cadastrado com sucesso";
            }else{
                echo "Erro ao cadastrar";
                   
                 
            }
            
?>