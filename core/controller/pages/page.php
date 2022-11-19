<?php

namespace core\controller\pages;

use core\controller\views\Views;

class Page
{

    private static function getHeader()
    {
        return Views::render('layouts/header',[
            'header' => 'Palpites do Bonança',
        ]);
    }
    private static function getFooter()
    {
        return Views::render('layouts/footer',[
            'site' => 'https://palpitesdobonanca.com.br',
        ]);
    }

    /**
     * Responsável por retornar o conteúdo do html da página inicial
     * @return string
     */
    public static function getPage($title, $content)
    {
        return Views::render('layouts/page', [
            'title' => $title,
            'header' => self::getHeader(),
            'footer' => self::getFooter(),
            'content' => $content,
        ]);
    }
}
