<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="estilo.css">
	<title>Cadastro de Contato/cliente</title>
</head>
<body>
	<div class="container">
<h1>Cadastro de Contato/cliente</h1>
<form action="cadastro.php" method="Post">
	
<label>Nome Completo:</label>
<input type="text" name="nome">


<label>Email:</label>
<input type="text" name="email">


<label>Idade:</label>
<input type="text" name="idade">


<label>Cidade:</label>
<input type="text" name="cidade">

<label>Sexo:</label>

<div class="sexo">
<input type="radio" name="sexo" value="Masculino"> Masculino
<input type="radio" name="sexo" value="Feminino"> Feminino
 </div>

<label>Campo de Observacao:</label>

<textarea name="observacao"></textarea>

<input type="submit" value="Enviar">








</form>
</div>
</body>
</html>