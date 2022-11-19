<?php

namespace core\controller\class;

use core\controller\interfaces\Modalidades;

class Loterias implements Modalidades
{
    public string $modalidade;
    function __construct(string $pModalidade)
    {
        $this->modalidade = $pModalidade;
    }
    function gerarModalidade(string $pModalidade)
    {
        
    }
    function gerarDezenas(): array
    {
        return [];
    }
    function gerarLinhas(): array
    {
        return [];
    }
    function gerarColunas(): array
    {
        return [];
    }
}
