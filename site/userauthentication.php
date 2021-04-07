<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "db_mikabolos";
$conexao = @mysqli_connect($host, $user, $pass, $banco) or die (mysql_error());
//mysql_select_db($banco) or die (mysql_error());
?>

<!DOCTYPE html>
<html>
<head>
	<title>Autenticando Usuario</title>

	<script type="text/javascript">
		function loginsuccessfully(){
			setTimeout("window.location='personalizacao1.php'", 5000);
		}
	function loginfailed(){
		setTimeout("window.location='login.php'", 5000);
	}	
	</script>

</head>
<body>


<?php

$email = $_POST['email'];
$senha = $_POST['senha'];
$sql = ("SELECT email, senha FROM clientes WHERE email = '$email' && senha = md5('$senha')");
$sqlquery = mysqli_query($conexao, $sql);
$sqlfetch = mysqli_fetch_assoc($sqlquery);
if ($sqlfetch > 0) {

	session_start();
        $_SESSION['loginform'] = "ativo";
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['senha'] = $_POST['senha'];

	echo "<center> Você foi logado com sucesso, Aguarde um instante </center>";
	echo "<script> loginsuccessfully()</script>";
	
} else {
	echo "<center>Login ou Senha invalidos! </center>";
	echo "<script>loginfailed()</script>";
}

?>
</body>
</html>