<?php

namespace core\controller\class;

class Controller
{
    public array $cEndereco = [];
    function __construct()
    {
        $this->cEndereco = $_SERVER;
    }
    function obterEndereco()
    {
        return $this->cEndereco['REQUEST_URI'];
    }
    function __toString()
    {
        return $this->cEndereco['REQUEST_URI'];
    }
}
