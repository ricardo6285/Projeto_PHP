<?php 
$nota1=0;
$nota2=0;
$aluno;
$aprovados=0;
$reprovados=0;
$exame=0;
$mediaclasse=0;

for($aluno = 0; $aluno <=5;$aluno++){
	echo "Aluno $aluno <br/>";
$nota1 =10; $nota2 =10;
echo"Nota1::$nota1 e Nota2:: $nota2<br>";
$media = ($nota1 + $nota2) / 2;
echo "Media $media<br>";
$mediaclasse = $mediaclasse + $media;

if($media < 3 ){
echo "reprovado<br>";$reprovados++;	
}elseif ($media >= 3.0 && $media <= 7.0) {
	echo "Exame<br>";$exame++;
}else {
	echo "Aprovado<br/>";$aprovados++;
}

}
$mediaclasse = $mediaclasse / 6;
echo "$exame foram para exame<br>";
echo "$reprovados foram reprovados<br>";
echo "$aprovados foram aprovados<br>";
echo "Media da classe $mediaclasse";

//======== Exercicio 2 ======================================

/*$total = 240;

while ($total > 0) {

    echo "Digite a mesa (0 para sair): ";
    $mesaEscolhida = (int) readline();

    if ($mesaEscolhida == 0) {
        break;
    }

    echo "Quantos lugares deseja? ";
    $lugares = (int) readline();

    // percorre as mesas
    for ($mesas = 1; $mesas <= 40; $mesas++) {

        if ($mesas == $mesaEscolhida) {

            // cada mesa começa com 6 lugares
            $disponivel = 6;

            if ($lugares <= $disponivel) {

                $disponivel -= $lugares;
                $total -= $lugares;

                echo "Reserva realizada na mesa $mesas\n";

            }

            if ($lugares > $disponivel) {
                echo "Não há lugares suficientes na mesa $mesas\n";
            }

        }

    }

    if ($mesaEscolhida < 1 || $mesaEscolhida > 40) {
        echo "Mesa inválida\n";
    }

}

if ($total == 0) {
    echo "Casa lotada!\n";
}

echo "Sistema encerrado\n";*/










?>









