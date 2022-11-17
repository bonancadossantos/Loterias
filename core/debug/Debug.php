<?php
namespace core\debug;
class Debug{
    
    /**
     * Imprime informações sobre a classe, função e a linha onde o debug foi realizado
     * 
     * @param constant $pClass Parâmetro que refere-se ao nome da classe
     * @param constant $pFunction Parâmetro que refere-se ao nome da função invocada
     * @param constant $pLine A linha onde esta sendo chamado o debug
     */
    function __construct($pClass, $pFunction, $pLine)
    {
        echo "Retorno da classe <b>$pClass</b>;<br>
        Função; <b>$pFunction</b> na linha <b>$pLine</b>.";
    }
}