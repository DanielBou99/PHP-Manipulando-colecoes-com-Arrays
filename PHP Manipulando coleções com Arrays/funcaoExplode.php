<?php

$nomes = 'daniel,gabriel,geovanni,leonardo';

// transforma uma string em array
$arrayNomes = explode(',',$nomes);

var_dump($arrayNomes);

// transforma um array em uma string
$nomesJuntos = implode(' | ',$arrayNomes);

echo $nomesJuntos;