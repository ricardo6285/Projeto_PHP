<?php 
$nota1=0;
$nota2=0;
$aluno;
$aprovados=0;
$reprovados=0;
$exame=0;

for($aluno = 0; $aluno <=5;$aluno++){
	echo "Aluno $aluno <br/>";
$nota1 =10; $nota2 =10;
echo"Nota1::$nota1 e Nota2:: $nota2<br>";
$media = ($nota1 + $nota2) / 2;
echo "Media $media<br>";
if($media < 3 ){
echo "reprovado<br>";$reprovados++;	
}elseif ($media >= 3.0 && $media <= 7.0) {
	echo "Exame<br>";$exame++;
}else {
	echo "Aprovado<br/>";$aprovados++;
}

}

echo "$exame foram para exame<br>";
echo "$reprovados foram reprovados<br>";
echo "$aprovados foram aprovados";













 ?>