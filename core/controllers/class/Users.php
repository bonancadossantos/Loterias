<?php

namespace core\controller\class;

use core\debug\Debug;

class Users
{
    /**
     * Propriedade da classe (pc) para o nome de usuário
     */
    private string $pcUsuario = '';

    /**
     * Método construtor que pode ou não ser debugado
     */
    function __construct(string $pUsuario, bool $pDebug = true)
    {
        $this->pcUsuario = $pUsuario;
        $pDebug == true ? new Debug(__CLASS__, __FUNCTION__, __LINE__) : '';
    }

    /**
     * Responsável por obter o valor da propriedade 
     * tendo em vista que a mesma é privada
     */
    function __get($name) : string
    {
        $name = $this->pcUsuario;
        return $name;
    }
}
