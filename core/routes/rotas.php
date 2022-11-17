<?php

namespace core\routes;

use core\controller\class\Controller;

class Rotas extends Controller
{
    public string $scArea = "";
    public string $scEndereco = "";
    public string $scQuery = "";

    function __construct(Controller $pEndereco)
    {
        $parseUrl = parse_url($pEndereco->obterEndereco());
        $this->analisarRequisicao($parseUrl);
    }
    /**
     * Método que tem como objetido analisar a requisição e
     * redistribuir seus valores às devidas variáveis da classe que
     * serão utilizadas por sub classes (scVariáveis)
     */
    function analisarRequisicao(array $pEndereco)
    {
        $temp = $this->ajustaArrayEndereco($pEndereco['path']);
        var_dump($temp);
        if (!array_key_exists('query',$pEndereco)) {
            echo '<h2>Não houve query</h2>';
            $this->scArea = $this->scObterArea($temp);
            $this->scEndereco = $this->scObterEndereco($temp);
            
        } else {
            //$this->scEndereco = $pEndereco['path'];
            $this->scArea = $this->scObterArea($temp);
            $this->scObterEndereco($temp);
            $this->scQuery = $pEndereco['query'];
            $this->scObterQuery();
            echo "<h2>A query na requisição é = {$this->scQuery}</h2>";
        }
    }
    /*
    Irá obter a área em que a requisição de endereço está sendo feita
    */
    function scObterArea(array $pEndereco) : string{
        $this->scArea = $pEndereco[array_key_last($pEndereco)-1];
        echo "<h2>A área requerida foi = {$this->scArea}</h2>";
        return $this->scArea;
    }
    /**
     * Obtem o endereço da requisição
     */
    function scObterEndereco(array $pEndereco): string
    {   
        $this->scEndereco = $pEndereco[array_key_last($pEndereco)];
        echo "<h2>O endereço da requisição foi = {$this->scEndereco}</h2>";
        return $this->scEndereco;
    }
    /**
     * Obtem a query, se houver, da requisição
     */
    function scObterQuery()
    {
        $parse = [];
        parse_str($this->scQuery, $parse);
        echo '<h2>Query recebida.</h2>';
        var_dump($parse);
    }
    /**
     * Tem sido necessário ajustar o array depois do explode
     * para remover o índice final que fica como uma string vazia
     */
    function ajustaArrayEndereco(string $pEndereco) : array {
        $temp = explode('/', $pEndereco);
        do {
            unset($temp[array_key_last($temp)]);
        } while ($temp[array_key_last($temp)] === '');
        return $temp;
    }
}
