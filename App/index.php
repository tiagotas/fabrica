<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

include 'config.php';

include PATH_CONTROLLER . 'InsumoCategoriaController.php';

switch($uri)
{
    case '/':
        include 'View/index.php';
    break;

    case '/insumo/categoria':
       InsumoCategoriaController::index();
    break;

    case '/insumo/categoria/cadastro':
        InsumoCategoriaController::cadastro();
    break;

    default:
        echo "rota inválida";
    break;

}



