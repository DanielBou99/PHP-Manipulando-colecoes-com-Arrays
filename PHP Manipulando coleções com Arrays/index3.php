<?php

$correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
];

$correntistasNaoPagantes = [
    "Luis",
    "Luisa",
    "Rafael",
];

$correntistas_pagantes = array_diff($correntistas, $correntistasNaoPagantes);

var_dump($correntistas_pagantes);
