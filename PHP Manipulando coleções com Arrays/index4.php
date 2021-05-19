<?php

namespace Alura;
require 'autoload.php';

$correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
];

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

$relacionados = array_combine($correntistas, $saldos);

var_dump($relacionados);

$relacionados["Gabriel"] = 900;

if (array_key_exists("Gabriel", $relacionados)) {
    echo "O saldo de Gabriel é {$relacionados["Gabriel"]}." . PHP_EOL;
} else {
    echo "Correntista não encontrado." . PHP_EOL;
}

$correntistasSaldoMaior4000 = ArrayUtils::encontrarPessoasComSaldoMaior(
    4000, $relacionados
);

var_dump($correntistasSaldoMaior4000);
