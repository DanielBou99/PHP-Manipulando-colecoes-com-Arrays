<?php
declare(strict_types=1);

namespace Alura;

class ArrayUtils
{
    public static function remover(int $elemento, array &$array)
    {
        $posicao = array_search($elemento, $array, true);

        if (is_int($posicao)) {
            unset($array[$posicao]);
        } else {
            echo "Não foi encontrado no array.";
        }
    }

    public static function encontrarPessoasComSaldoMaior(int $maior, array $array): array
    {
        $correntistasComSaldoMaior = array();
        foreach ($array as $chave => $valor) {
            if ($valor > $maior) {
                $correntistasComSaldoMaior[$chave] = $valor;
            }
        }

        return $correntistasComSaldoMaior;
    }
    
    
}