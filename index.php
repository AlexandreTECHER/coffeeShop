<?php

require_once __DIR__ . '/controllers/MainController.php';

$pageToLoad = [
    '/' => 'homepage',
    '/about' =>'about',
    '/products' => 'products',
    '/store' => 'store'
];


if(isset($_GET['_url'])){
    $currentPage = $_GET['_url'];
}else{
    $currentPage = '/';
}

$controller = new MainController();

if(!array_key_exists($currentPage, $pageToLoad)){
    $controller->error();
}

$methodToUse = $pageToLoad[$currentPage];

$controller->$methodToUse();

