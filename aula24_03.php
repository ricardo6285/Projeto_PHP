<?php 
$reprovados = 0;
$exame = 0;
$aprovados = 0;
echo "===================================================<br>";
echo "Aluno 1:<br> ";
$nota1 =3; $nota2 =2;
echo"Nota1::$nota1 e Nota2:: $nota2<br>";
$media = ($nota1 + $nota2) / 2;
echo "Media $media<br>";
if($media < 3 ){
echo "reprovado<br>";$reprovados++;	
}elseif ($media >= 3.0 && $media <= 7.0) {
	echo "Exame<br>";$exame++;
}else {
	echo "Aprovado<br>";$aprovados++;
}

echo "===================================================<br>";

echo "Aluno 2:<br>";
$nota1 = 3; $nota2 =1;
echo"Nota1::$nota1 e Nota2:: $nota2<br>";
$media = ($nota1 + $nota2) / 2;
echo "Media $media<br>";
if($media < 3 ){
echo "reprovado<br>";$reprovados++;	
}elseif ($media >= 3.0 && $media <= 7.0) {
	echo "Exame<br>";$exame++;
}else {
	echo "Aprovado<br>";$aprovados++;
}
echo "===================================================<br>";

echo "Aluno 3:<br>";
$nota1 = 6; $nota2  =6;
echo"Nota1::$nota1 e Nota2:: $nota2<br>";
$media = ($nota1 + $nota2) / 2;
echo "Media $media<br>";
if($media < 3 ){
echo "reprovado<br>";$reprovados++;	
}elseif ($media >= 3.0 && $media <= 7.0) {
	echo "Exame<br>";$exame++;
}else {
	echo "Aprovado<br>";$aprovados++;
}
echo "===================================================<br>";

echo "Aluno 4:<br>";
$nota1 = 9; $nota2 = 9;
echo"Nota1::$nota1 e Nota2:: $nota2<br>";
$media = ($nota1 + $nota2) / 2;
echo "Media $media<br>";
if($media < 3 ){
echo "reprovado<br>";$reprovados++;	
}elseif ($media >= 3.0 && $media <= 7.0) {
	echo "Exame<br>";$exame++;
}else {
	echo "Aprovado<br>";$aprovados++;
}
echo "===================================================<br>";

echo "Aluno 5:<br>";
$nota1 = 9; $nota2 = 5;
echo"Nota1::$nota1 e Nota2:: $nota2<br>";
$media = ($nota1 + $nota2) / 2;
echo "Media $media<br>";
if($media < 3 ){
echo "reprovado<br>";$reprovados++;	
}elseif ($media >= 3.0 && $media <= 7.0) {
	echo "Exame<br>";$exame++;
}else {
	echo "Aprovado<br>";$aprovados++;
}
echo "===================================================<br>";

echo "Aluno 6:<br>";
$nota1 = 10; $nota2 = 10;
echo"Nota1::$nota1 e Nota2:: $nota2<br>";
$media = ($nota1 + $nota2) / 2;
echo "Media $media<br>";
if($media < 3 ){
echo "reprovado<br>";$reprovados++;	
}elseif ($media >= 3.0 && $media <= 7.0) {
	echo "Exame<br>";$exame++;
}else {
	echo "Aprovado<br>";$aprovados++;
}
echo "===================================================<br>";
echo "$exame foram para exame<br>";
echo "$reprovados foram reprovados<br>";
echo "$aprovados foram aprovados";
 ?>



 