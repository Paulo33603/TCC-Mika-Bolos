<?php 
	session_start();
	if ($_SESSION['loginform'] == "ativo") {
	}else{echo ("<script>
        window.alert('Para tal página é necessario o Login')
        window.location.href='login.php';
    	</script>");
    	exit();
	}


?>