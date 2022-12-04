<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Eletroninho- Entrar</title>
		<meta charset="UTF-8" />
		<!-- Estilos da Index.php -->
		<style type="text/css">
			body{
                background: linear-gradient(#8FE3CF, #256D85, #2B4865, #002B5B);
                background-size: cover;
                width:100%;
                align-items: baseline;
                justify-content: center;
                padding: 10px;
                min-height: 100vh;
                margin:0;
            }
			div.global{
			width: 40%;
			height: auto;
			background-color: #B7C4CF;
			border: 1px solid #606060;
			padding: 50px;
			box-shadow: 0px 0px 10px #000;
			margin-top: 10%;
			margin-left: auto;
			margin-right: auto;
			}
			input[type='text'], input[type='password']{
			width: 300px;
			height: 25px;
			border: solid 1px #606060;
			border-radius: 5px;
			}
			input[type='password']{
			margin-left: 10px;
			}
			input[type='submit']{
			width: 150px;
			}
		</style>
	</head>
	<body>
	
		<div class="global">
			<!-- Aqui temos o formulário
				*Action é vazia por que vamos fazer a validação e o redirecionamento nesta mesma página.
			-->
			
			<form name="" method="post" action="">
				<label>Usuário: <input type="text" name="user" /></label><br /><br />
				<label>Senha: <input type="password" name="pass" /></label><br /><br />
				<input type="submit" name="submit" value="Logar" /> 
			</form>
			<?php
				/* Declaração de Variáveis */
				$user = @$_REQUEST['user'];
				$pass = @$_REQUEST['pass'];
				$submit = @$_REQUEST['submit'];
				
				/* Declaração das variáveis que possuem os usuarios e as senhas */
				$user1 = 'teste';
				$pass1 = '123';
				
				$user2 = 'teste1';
				$pass2 = '1';
				
				/* Testa se o botão submit foi ativado */
				if($submit){
					
					/* Se o campo usuário ou senha estiverem vazios geramos um alerta */
					if($user == "" || $pass == ""){
						echo "<script> alert('Por favor, preencha todos os campos!');</script>";
					}
					/* Caso o campo usuario e senha não 
						*estejam vazios vamos testar se o usuário e a senha batem 
					*iniciamos uma sessão e redirecionamos o usuário para o painel */
					else{
						if(($user == $user1 && $pass == $pass1) || ($user == $user2 && $pass == $pass2)){
							session_start();
							$_SESSION['usuario']=$user;
							$_SESSION['senha']=$pass;
							header("Location: painel.html");
						}
						/* Se o usuario ou a senha não batem alertamos o usuario */
						else{
							echo "<>alert('Usuário e/ou senha inválido(s), Tente novamente!');</>";
						}
					}
				}
			?>
		</div>
	</body>
</html>			