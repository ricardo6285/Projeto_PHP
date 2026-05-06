<?php 

$nome = $_POST['nome'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];

// imc = $peso / ($altura * $altura);
$peso = (float)$peso;
$altura = (float)$altura;






// Cálculo do IMC
$imc = $peso / ($altura * $altura);

// Formatar para 2 casas decimais
echo "Seu IMC é: "($imc);



 ?>