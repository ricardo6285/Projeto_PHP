<?php 
$op =4;
$num1 = 10;
$num2 = 20;

switch ($op) {
	case '1':$resp = $num1 + $num2;
	$nomeop = "soma";
		break;
	
	case '2':$resp = $num1 - $num2;
	$nomeop = "subtração";
		break;

	case '3':$resp = $num1 * $num2;
	$nomeop = "multiplicação";
		break;		

	case '4':
	if($num2 == 0){
	$nomeop = "operação invalida";
	$resp = "impossivel divisão por 0";

	}else{
	$resp = $num1 / $num2;
	$nomeop = "divisão";
		
	}
	
		break;	
	
	default: echo("sair");
		
		break;
}


echo "A $nomeop do $num1 e $num2 = $resp";

 ?>