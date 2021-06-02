<?php

use App\Controller\{InsumoCategoriaController};

switch($uri)
{
    case '/':
        include PATH_VIEW . 'index.php';
    break;

    case '/insumo/categoria':
       InsumoCategoriaController::index();
    break;

    case '/insumo/categoria/cadastro':
        InsumoCategoriaController::cadastro();
    break;

    case '/insumo/categoria/cadastro/salvar':
        InsumoCategoriaController::salvar();
    break;

    case '/insumo/categoria/ver':
        InsumoCategoriaController::ver();
    break;

    case '/insumo/categoria/excluir':
        InsumoCategoriaController::excluir();
    break;

    default:
        echo "rota inválida";
    break;
}