<?php

$paginas = array('home', 'empresa', 'produtos', 'servicos', 'contato');

$route = function () use ($paginas) {

    if (isset($_GET['request'])) {
        $rota = explode('/', rtrim($_GET['request'], '/'))[0];
    } else {
        $rota = 'home';
    }

    if (file_exists('includes/' . $rota . '.php') && in_array($rota, $paginas)) {
        $go = $rota;
    } else {
        header('HTTP/1.0 404 Not Found');
        $go = '404';
    }

    require_once 'includes/' . $go . '.php';
};

$base_url = str_replace('index.php', '', $_SERVER['PHP_SELF']);
define('BASE_URL', $base_url);

