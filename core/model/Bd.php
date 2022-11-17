<?php

namespace core\model;

use PDO;

class Bd //implements iTiposBD
{
    protected string $endBd;
    private static array $opcoes = [];
    function __construct(string $pArea, string $pEndereco, string $pQuery = NULL)
    {
        echo "<h2>A área da requisição é {$pArea}</h2>";
        echo "<h2>O endereço foi {$pEndereco}</h2>";
        echo "<h2>E a solicitação da query foi " . ($pQuery == NULL ? "nula" : $pQuery) . "</h2>";
        //$this->conexao(self::$opcoes);
    }
    /*function conexao(array $opcoes) : object {
        $instanciaPDO = new PDO();
        return $instanciaPDO;
    }*/
    function __toString()
    {
        return $this->endBd;
    }
}
