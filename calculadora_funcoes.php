<?php 

function somar($num1,$num2){
	return $num1 + $num2;
}

function subtrair($num1,$num2){
	return $num1 - $num2;
}


function multiplicar($num1,$num2){
	return $num1 * $num2;
}


function dividir($num1,$num2){
	return $num1 / $num2;

}

$op=3;
$num1=50;$num2=10;
switch ($op) {

	case 1:
	$resp=somar($num1,$num2);
	$oper="soma";
    break;
	
	case 2:
	$resp = subtrair($num1,$num2);
	$oper="subtração";
	break;

	case 3:
	$resp = multiplicar($num1,$num2);
	$oper="multiplicação";
	break;	


	case 4:$resp = dividir($num1,$num2);
	$oper="divisão";
    break;    	

    	
	}
echo "A $oper de $num1 e $num2 é $resp<br>";



 ?>