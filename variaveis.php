<?php 
$data = "10 de Março de 2026";// string
$salario = 850.00; // float ou double
$cargo = "Estagiario"; // string
$idade = 18; // integer ou int
$resultado = true; //boolean

if ($resultado){
	echo "Verdadeiro <br/>";
	print("data : $data<br/> salario: $salario<br/> cargo: $cargo<br/> idade: $idade<br/>");

	echo("Arquivo criado em $data <br/>");

	printf("Salário mínimo: R$ %.2f <br/>", $salario);

	$texto = sprintf("%s recebe R$ %.2f por mês", $cargo,$salario*2);
	echo $texto;
}










 ?>