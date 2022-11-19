<?php

namespace core\controller\pages;

use core\controller\views\Views;

class Home{
    /**
     * Responsável por retornar o conteúdo do html da página inicial
     * @return string
     */
    public static function getHome(){
        return Views::render('layouts/home',[
            'titulo' => 'Palpites do Bonança v1.0',
            'site' => 'https://palpitesdobonanca.com.br/'
        ]);
    }
}