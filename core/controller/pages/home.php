<?php

namespace core\controller\pages;

use core\controller\views\Views;
use core\controller\models\Model;

class Home extends Page{
    /**
     * Responsável por retornar o conteúdo do html da página inicial
     * @return string
     */
    public static function getHome(){
        $model = new Model();
        $content = Views::render('layouts/home',[
            'header' => "$model->area - Resultados, análises e criação de jogos",
        ]);
        return parent::getPage('Grupo AD Bonança',$content);
    }
}