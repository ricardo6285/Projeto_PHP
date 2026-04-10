<?php 

function calcularMedia($nota1,$nota2){
	return($nota1 + $nota2)/2;
}

function verificarSituacao($media){
	if($media < 3){
		return "reprovado";
	}elseif($media >=3 && $media <= 7){
		return "exame";
	}else{
		return "aprovado";
	}
}

function mostrarAluno($aluno,$nota1,$nota2,$media){
	echo "Aluno $aluno <br/>";
	echo "Nota1: $nota1 e Nota2: $nota2 <br/>";
	echo "Media $media <br/>";
}

$aprovados = 0;
$reprovados = 0;
$exame = 0;
$mediaclasse = 0;

for ($aluno = 0;$aluno <=5; $aluno++){
	$nota1 = 2;
	$nota2 = 2;

	$media = calcularMedia($nota1,$nota2);
	mostrarAluno($aluno,$nota1,$nota2,$media);
	$situacao = verificarSituacao($media);

	echo ucfirst($situacao) . "<br/>";

	if($situacao === "reprovado"){
		$reprovados++;
	}elseif($situacao === "exame"){
		$exame++;
	}else{
		$aprovados++;
	}
	$mediaclasse += $media;
}

$mediaclasse = $mediaclasse / 6;

echo "$exame foram para exame<br>";
echo "$reprovados foram reprovados<br>";
echo "$aprovados foram aprovados<br>";
echo "Media da classe $mediaclasse";



 ?>