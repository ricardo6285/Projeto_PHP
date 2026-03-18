<?php 
$salarioBruto = 3000;
$salarioLiquido ;

if($salarioBruto >= 0 && $salarioBruto <= 2428.80){
	echo "Voçe não pagara imposto esse ano parabens!!!";

}else if($salarioBruto >= 2428.81 && $salarioBruto <= 2826.65){
	$porcentagem = 7.5;
	$salarioLiquido =$salarioBruto -($salarioBruto * $porcentagem/100);

}else if($salarioBruto >= 2826.66 && $salarioBruto <= 3751.05){
	$porcentagem = 15;
	$salarioLiquido =$salarioBruto - ($salarioBruto * $porcentagem/100);

	
}else if($salarioBruto >= 3751.06 && $salarioBruto <= 4664.68){
	$porcentagem = 22.5;
	$salarioLiquido =$salarioBruto - ($salarioBruto * $porcentagem /100);

	
}else if($salarioBruto > 4664.68){
	$porcentagem = 27.5;
	$salarioLiquido = $salarioBruto - ($salarioBruto * $porcentagem / 100);
};
$valorDesconto = ($salarioBruto * $porcentagem / 100);

echo " Salário Bruto:$salarioBruto<br/>";
echo "Porcentagem de desconto:$porcentagem<br/>";
echo "Valor do desconto:$valorDesconto<br/>";
echo "Salário Liquido:$salarioLiquido";

















 ?>