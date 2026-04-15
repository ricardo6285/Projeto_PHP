<?php 

$numeros = array(12,-5,0,7,-3,8,10,-1,4,6);
$positivos = 0;
$negativos = 0;
$pares = 0;
$impares = 0;

// percorre a array
for ($i=0; $i <count($numeros) ; $i++) { 


// verifica se é positivo(maior que 0)	
	if($numeros[$i] > 0 ){
	$positivos++;	
	}
// verifica se é negativo
	if ($numeros[$i] < 0) {
		$negativos++;
	}


 // Verificar se é par
    // Um número é par quando o resto da divisão por 2 é igual a 0
    if ($numeros[$i] % 2 == 0) {
    	$pares++;
    }else{
    	$impares++;
    }

}

// Exibir resultados
echo "Resultados da Análise:<br>";
echo "Números positivos: $positivos<br>";
echo "Números negativos: $negativos<br>";
echo "Números pares: $pares<br>";
echo "Números impares: $impares<br>";


foreach ($numeros as $indice => $valor) {
    echo "Posição $indice tem o valor $valor<br>";
}





 ?>