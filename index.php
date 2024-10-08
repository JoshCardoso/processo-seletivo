<?php
//processo Seletivo

//Teste 1
echo"Teste 1";
echo"<br>";

$indece = 13;
$soma = 0;
$k = 0;

while ($k < $indece){
    $k = $k + 1; 
    $soma = $soma + $k;
    
}

echo "o valor final da Variavel Soma é " . $soma;

echo"<br>";
echo"<br>";
// teste 2
echo"Teste 2";
echo"<br>";

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

echo"<br>";
echo"<br>";

// teste 3
echo"Teste 3";
echo"<br>";

$json = file_get_contents('dados.json');
$faturamentos = json_decode($json, true);

$menorFaturamento = PHP_FLOAT_MAX;
$maiorFaturamento = PHP_FLOAT_MIN;
$somaFaturamento = 0;
$diasComFaturamento= 0;
$acimaMedia = 0;

foreach ($faturamentos as $faturamento) {
    if ($faturamento["valor"] > 0) { 
        $diasComFaturamento++;
        $somaFaturamento += $faturamento["valor"];
        
        if ($faturamento["valor"] < $menorFaturamento) {
            $menorFaturamento = $faturamento["valor"];
        }
        
        if ($faturamento["valor"] > $maiorFaturamento) {
            $maiorFaturamento = $faturamento["valor"];
        }
    }
}

$mediaMensal = $somaFaturamento / $diasComFaturamento;

foreach ($faturamentos as $faturamento) {
    if ($faturamento["valor"] > $mediaMensal) {
        $acimaMedia++;
    }
}

echo "Menor valor de faturamento: R$ " . number_format($menorFaturamento, 2, ',', '.') . "<br>";
echo "Maior valor de faturamento: R$ " . number_format($maiorFaturamento, 2, ',', '.') . "<br>";
echo "Número de dias com faturamento acima da média mensal: $acimaMedia<br>";

echo"<br>";
echo"Teste 4";
echo"<br>";
