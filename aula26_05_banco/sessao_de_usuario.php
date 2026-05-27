<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pagina WEB - Sessão de usuários</title>
</head>
<body>
	<?php 
	session_start();
	$_SESSION['nome'] = "administrador";

	//elimina todas as variaveis de sessão mas, mantem a sessão
	//session_unset();

	//elimina toda a sessão;
	//session_destroy();
	
	 ?>
	 <h3>Sessão de usuário</h3>
	 <label>Bem vindo usuário: </label><?php echo $_SESSION['nome']; ?>
	 <br>
	 <label>ID do usuário: </label><?php echo session_id();?>

</body>
</html>