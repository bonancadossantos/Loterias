<?php

namespace core\controller\interfaces;

use core\controller\interfaces\Dezenas;
use core\controller\interfaces\Colunas;
use core\controller\interfaces\Linhas;

interface Modalidades extends Dezenas, Linhas, Colunas
{
    function gerarModalidade(string $pModalidade);
}
