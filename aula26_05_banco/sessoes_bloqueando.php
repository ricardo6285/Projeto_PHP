<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bloqueando paginas por sessão</title>
	<?php 
	session_start();
	$_SESSION['nome']= $_POST['nome'];
	$_SESSION['senha '] = $_POST['senha'];


 	?>
</head>
<body>
	<b>Funcionário: </b><?php echo $_SESSION['nome']; ?>,logado com sucesso.<br>
	<b>Data da conexão: </b><?php date("d/m/y"); ?><br>
	<b>Hora da conexão :</b><?php date("H:m:s"); ?><br>

	<a href="sessoes_verifica_sessao.php">Área de Administrador</a>
</body>
</html>