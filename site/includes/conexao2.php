<?php
	
	ini_set('display_errors', 0 );
	error_reporting(0);
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "db_mikabolos";
	$conexao = null;
	

	$conexao = @mysqli_connect($host,$user,$pass,$banco)
	or die ("Problemas com a conexão do Banco de Dados");

		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$telefone = $_POST['telefone'];
		$cidade = $_POST['cidade'];
		$mensagem = $_POST['mensagem'];

		$sqlinsert = "insert into contato(nome, email, telefone, cidade, mensagem) values ('$nome', '$email','$telefone', '$cidade', '$mensagem')";

		if (@mysqli_query($conexao,$sqlinsert)){

			echo "<script>
       	 	window.alert('Enviado')
        	window.location.href='../contato.php';
    		</script>";

			//echo json_encode(array(
			//	return => 'sucesso'
			//	$mensagem => 'Registro cadastrado com sucesso!'
			//));
			
		}else{
			echo "<script>
       	 	window.alert('Não enviado')
        	window.location.href='../contato.php';
    		</script>";
			
		//	echo json_encode(array(
			//	return => 'erro',
			//	$mensagem => @mysqli_error($conexao)
			//))
		}
         ?>
?>