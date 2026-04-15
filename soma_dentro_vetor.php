<?php 
$num1 = array(10,20,30,40);
$num2 = array(50,60,70,80);
$resultado1 = 0 ;
$resultado2 = 0;

for ($i=0; $i < count($num1) ; $i++) { 
	$resultado1 = $resultado1 + $num1[$i];
}

echo "$resultado1 <br>";

	

for ($i=0; $i < count($num2) ; $i++) { 
	$resultado2 = $resultado2 + $num2[$i];
}

echo "$resultado2 <br>";








 ?>