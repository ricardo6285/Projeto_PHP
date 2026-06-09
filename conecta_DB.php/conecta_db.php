<?php 	


 
$host = "localhost";
$user = "user_dbloja";
$pwd = "123456";
$db = "dbloja";

$con = mysqli_connect($host,$user,$pwd,$db);

if(mysqli_connect_errno()){
	echo "Erro ao conectar com base de dados". 
	mysqli_connect_error();
}else{
	echo "Banco de dados conectado com sucesso!!!";
}


 ?>