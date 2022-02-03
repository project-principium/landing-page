<?php

namespace Controller;

use Inphinit\Viewing\View;

class Home
{
    public function automaticGetLanguage()
    {
        header('Location: ' . "/" . explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE'])[0] . "/");
        die();
    }

    public function index($lang = "pt-BR")
    {
        $lang = strtolower($lang);
        
        View::render('home', [
            "title" => "Home"
        ]);
    }
}
