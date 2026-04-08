<?php 
// ============================== Funções =====================================

// criando função em php 

function somaValor(){

	echo "Somando..<br/>";
}



function imprimirNome($nome){
echo "Olá $nome";
somaValor();
}


function somar($num1,$num2){
	return($num1 + $num2);
}






// executando a função
somaValor();
imprimirNome(somaValor());
$resultado = somar(10.50,20);
echo("O resultado da soma $resultado");
echo "<BR> O resultado direto chamando a função:". somar(30,50);

 ?>