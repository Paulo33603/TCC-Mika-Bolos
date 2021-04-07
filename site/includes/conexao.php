<?php
	include ('util.php');
	ini_set('display_errors', 0 );
	error_reporting(0);

	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "db_mikabolos";
	$conexao = null;

	try{
		$conexao = @mysqli_connect($host,$user,$pass,$banco);

		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$cep = $_POST['cep'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];

		if (!Util::validaCpf($cpf)){
			echo json_encode(array(
				retorno => 'erro',
				mensagem => 'CPF inválido!'
			));

			exit;
		}

		$sqlinsert = "insert into clientes(nome, cpf, cep, email, senha) values ('$nome', '$cpf', '$cep', '$email', md5('$senha'))";
		
		if (@mysqli_query($conexao,$sqlinsert)){
			echo json_encode(array(
				retorno => 'sucesso',
				mensagem => 'Registro cadastrado com sucesso!'
			));
		}else{
			echo json_encode(array(
				retorno => 'erro',
				mensagem => @mysqli_error($conexao)
			));
		}
	} catch (Exception $e){
		echo json_encode(array(
			retorno => 'erro',
			mensagem => $e.getMessage()
		));
	} finally{
		if ($conexao != null){
			mysqli_close($conexao);
		}
	}
?>
