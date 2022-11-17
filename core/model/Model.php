<?php

namespace core\model;

use core\routes\Rotas;

class Model extends Rotas
{
    protected string $endModel;
    function __construct(Rotas $pRotas)
    {
        var_dump($pRotas);
        $bd = new Bd($pRotas->scArea,$pRotas->scEndereco,$pRotas->scQuery);
    }
}
