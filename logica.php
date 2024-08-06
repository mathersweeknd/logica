<?php
function somar4($nota1, $nota2, $nota3, $nota4, $nota5) {

    $soma = $nota1 + $nota2 + $nota3 + $nota4;
    $valortotal = $soma / $nota5;

    return $valortotal;
}

$resultado = somar4(5, 5, 5, 5, 5);

echo "O resultado é: " . $resultado;
?>

<?php

function calcularM($nota1, $nota2, $nota3, $nota4) {
    
    $soma = $nota1 + $nota2 + $nota3 + $nota4;
    $Maritmetica = $soma / 4;
    
    return $Maritmetica;
}

$resultado1 = calcularM(10, 10, 10, 10);

echo "A média das notas aritméticas é de $resultado1";
?>

<?php

$nome = "Jardel";
$valor1 = 12;
$valor2 = 4;
$divisao = $valor1 / $valor2;

echo"O nome da pessoa é $nome e seus seguintes valores sao $valor1 e $valor2, e a divisão entre os valores é $divisao";
?>

<?php
$num1 = 15;
$num2 = 16;

$soma = $num1 + $num2;

echo "A soma dos dois números é: " . $soma;
?>
 