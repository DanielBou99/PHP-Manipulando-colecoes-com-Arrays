<?php
require_once 'Calculadora.php';

$notas = [9, 3, 10, 5, 10];

$calculadora = new Calculadora();

$media = $calculadora->calculaMedia($notas);

if ($media) {
    echo "<p> A média é: $media </p>" . PHP_EOL;
} else {
    echo "<p> Não foi possível calcular a média. </p>" . PHP_EOL;
}

$saldos = [
    2500,
    3000,
    1000,
    3700,
    9000
];

foreach ($saldos as $saldo) {
    echo "O saldo é $saldo";
}

var_dump($saldos);

// Ordenar o array em ordem crescente
sort($saldos);

var_dump($saldos);

echo "O menor saldo é $saldos[0]";