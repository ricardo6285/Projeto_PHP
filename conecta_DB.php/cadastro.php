<?php 
$host = "localhost";
$user = "user_dbloja";
$pwd = "123456";
$db = "dbloja";

$nome = $_POST['nome'];
$email = $_POST['email'];

$con = mysqli_connect($host,$user,$pwd,$db);

if(mysqli_connect_errno()){
	echo "Erro ao conectar com base de dados". 
	mysqli_connect_error();
}else{
	$sql = "insert into tbPessoa(nome,email) values ('$_POST[nome]','$_POST[email]')";

	if(mysqli_query($con,$sql)){
	echo "Cadastrado com sucesso!!";

	
}else{
	echo "Erro ao Cadastrar !!!" . msqli_error();
}
mysqli_close($con);
}


 ?>