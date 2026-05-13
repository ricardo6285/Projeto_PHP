<?php 
   $nome = $_POST["nome"];
    $idadeUsuario = $_POST["idade"];
    $salarioUsuario = $_POST["salario"];

    // Arrays
    $idade = array();

    $idade[0] = 10;
    $idade[8] = 5;

    $valor = array(10,20,30,40);

    $nomes = array("Maria","José","Pedro","Paulo");

    $salario = array();

    $salario[] = 1500;
    $salario[] = 1250.35;
    $salario[] = 1587.96;
    $salario[] = 1587.89;

    // Adicionando dados do formulário nos arrays
    $nomes[] = $nome;
    $idade[] = $idadeUsuario;
    $salario[] = $salarioUsuario;

    // Exibindo resultados
    echo "<h3>Dados Recebidos:</h3>";

    echo "Nome: " . $nome . "<br>";
    echo "Idade: " . $idadeUsuario . "<br>";
    echo "Salário: " . $salarioUsuario . "<br><br>";

    echo "<h3>Exemplos dos Arrays:</h3>";

    echo ($valor[0] . "<br>");
    echo ($valor[3] . "<br>");
    echo ($salario[2] . "<br>");

    echo("<br><strong>Array Valor:</strong><br>");
    var_dump($valor);

    echo("<br><br><strong>Array Nomes:</strong><br>");
    var_dump($nomes);

    echo("<br><br><strong>Array Idade:</strong><br>");
    var_dump($idade);

    echo("<br><br><strong>Array Salário:</strong><br>");
    var_dump($salario);


 ?>