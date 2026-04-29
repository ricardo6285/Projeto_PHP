<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<form action="contato.php" method="post">
	<label for="idNome">Nome:</label>
	<input type="text" id="idNome" name="nome" placeholder="Insira seu nome:"maxlength="50" autocomplete="off" required autofocus>

	<label for="idEmail">Email:</label>
	<input type="email" id="idEmail" name="email" placeholder="Insira seu email:" maxlength="50" autocomplete="off" required>

	<label for="idMensagem">Mensagem:</label>
	<textarea id="idMensagem" name="mensagem" required></textarea>

	<input type="submit" name="enviar">
    <input type="reset" name="limpar" value="limpar">

</form>



<script src="js/script.js"></script>
</body>
</html>