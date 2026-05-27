<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php 
	session_start();



	 ?>
</head>
<body>
<b>funcionario: </b><?php echo $_SESSION['nome']; ?>,Logado com sucesso.<br>
<b>Data da conexao: </b><?php  echo date("d/m/y"); ?><br>
<b>Hora da conexao: </b><?php echo date("h:i:s"); ?><br>
<br>
<a href="sessao_formularios_valida.php">Área do administrador</a>

</body>
</html>