<?php

namespace core\controller\views;

class Views
{
    /**
     * Responsável por validar se o endereço solicitado pelo render existe e retornar 
     * @param string $view
     * @return string
     */
    private static function getContent($view)
    {
        $file = __DIR__.'/../../../content/'.$view.'.html';
        return file_exists($file) ? file_get_contents($file) : '';
    }
    /**
     * Responsável por renderizar o conteúdo da página
     * @param string $view
     * @param array $vars
     * @return string
     */
    public static function render($view, $vars = [])
    {
        $contentView = self::getContent($view);
        
        /**
         * As chaves serão usadas para sobrescrever os dados no conteúdo
         */
        $keys = array_keys($vars);
        /**
         * Transformando os valores obtidos das chaves com array_map
         * array_map irá utilizar uma função que pde ser anônima ou não
         * o parâmetro da função irá abrigar momentaneamente o valor do array
         * passado para a função array_map para que possamos trabalhar com a lógica
         * da função que passamos as mudanças que desejemos
         */
        $keys = array_map(function($itens){
            return '{{'.$itens.'}}';
        },$keys);

        /**
         * O retorno será feito com str replace
         * Lembrando que os valores estão em vars
         */
        return str_replace($keys,array_values($vars),$contentView);
    }
}
