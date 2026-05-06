<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1>Formulario de IMC</h1>

<form action="valida.php" method="post"></form>

<label for="nome">Nome:</label>
		<input type="nome" name="nome" id="nome"
		maxlength="50" required autocomplete="off" autofocus size="30">

<br/><br/>
		<label for="peso">Peso:</label>
		<input type="peso" name="peso" id="peso"
		maxlength="50" required autocomplete="off" autofocus size="30">
<br/><br/>

		<label for="altura">Altura:</label>
		<input type="altura" name="altura" id="altura"
		maxlength="50" required autocomplete="off" autofocus size="30">
<br/><br/>
		<input type="submit" name="entrar" value="Entrar">
		<input type="reset" name="limpar" value="Limpar">
		<script src="js/script.js"></script>
</body>
</html>