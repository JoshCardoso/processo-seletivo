<?php
//processo Seletivo

//Teste 1

$indece = 13;
$soma = 0;
$k = 0;

while ($k < $indece){
    $k = $k + 1; 
    $soma = $soma + $k;
    
}

echo "o valor final da Variavel Soma é " . $soma;

echo"<br/>";
// teste 2

function raiz_quadrado_exata ($n) {
    $raiz = sqrt($n);
    return $raiz == intval($raiz);
}

function pertence_fibonacci($n) {
    
    $teste1 = 5 * pow($n, 2) + 4;
    $teste2 = 5 * pow($n, 2) - 4;
    
    return raiz_quadrado_exata($teste1) || raiz_quadrado_exata($teste2);
}

$numero = 5; 
if (pertence_fibonacci($numero)) {
    echo "$numero pertence à sequência de Fibonacci.";
} else {
    echo "$numero não pertence à sequência de Fibonacci.";
}