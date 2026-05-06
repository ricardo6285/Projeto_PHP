<?php 

$nome = $_POST['nome'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];

// imc = $peso / ($altura * $altura);
$peso = (float)$peso;
$altura = (float)$altura;






// Cálculo do IMC
$imc = $peso / ($altura * $altura);
$classificacao="";
if($imc < 19){
	$classificacao = "baixo peso";
}else if($imc < 25){
	$classificacao = "peso normal";
}else if($imc < 30){
	$classificacao = "excesso de peso";
}else if($imc > 30){
	$classificacao = "Obesidade";
}else{
	$classificacao = "Obesidade Extrema";
}





// Formatar para 2 casas decimais
echo "Olá $nome<br>seu peso:$peso<br>sua altura:$altura<br> e seu IMC:"; 
printf("%.2f",$imc);
echo "<br>taxa de imc $classificacao";


 ?>