<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<h1>Formulario de IMC</h1>
<img src="imagem/images.jfif">

<form action="imc.php" method="post">

<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome"
		maxlength="50" required autocomplete="off" autofocus size="30">

<br/><br/>
		<label for="peso">Peso:</label>
		<input type="text" name="peso" id="peso"
		maxlength="50" required autocomplete="off" autofocus size="30">
<br/><br/>

		<label for="altura">Altura:</label>
		<input type="text" name="altura" id="altura"
		maxlength="50" required autocomplete="off" autofocus size="30">
<br/><br/>
		<input type="submit" name="entrar" value="Entrar">
		<input type="reset" name="limpar" value="Limpar">
	</form>	
</body>
</html>