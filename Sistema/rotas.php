<?php

use App\Controller\{DashboardController, InsumoCategoriaController, LoginController};

switch($uri)
{
    case '/login':
        LoginController::index();
    break;

    case '/auth':
        LoginController::auth();
    break;

    case '/logout':
        LoginController::logout();
    break;

    case '/recuperar-senha':
        LoginController::esqueciSenha();
    break;


    case '/':
        DashboardController::index();
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