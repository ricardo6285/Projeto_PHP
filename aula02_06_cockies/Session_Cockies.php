

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Testando se o cookie foi definido</title>
 </head>
 <body>
 <?php 
$value = 'aluno';
setcookie("Ocupacao",$value);
setcookie("Ocupacao",$value,time()+60);
setcookie("usuarios","etecia", time()+86400);

setcookie("admin","user_admin", time()+86400);

echo $_COOKIE['usuarios'] . "<br>";
$admin = $_COOKIE['admin'];

if(isset($_COOKIE['usuarios'])){
	echo "Bem vindo ". $_COOKIE["usuarios"] . "!<br>";
}else{
	echo "Usuario novo, seja bem vindo!<br>";
}



  ?>
 </body>
 </html>