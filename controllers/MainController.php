<?php

class MainController
{

    public function homepage()
    {
        return $this->show('home');
    }

    public function about()
    {
        return $this->show('about');
    }

    public function products()
    {
        return $this->show('products');
    }

    public function store()
    {
        return $this->show('store');
    }

    public function error()
    {
        http_response_code(404);
        exit('erreur');
    }

    private function show($viewName, $viewVars=[])
    {
        require_once __DIR__  . "/../views/header.tpl.php";
        require_once __DIR__  . "/../views/{$viewName}.tpl.php";
        require_once __DIR__  . "/../views/footer.tpl.php";
    }
}
