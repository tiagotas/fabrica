<?php

namespace App\Controller;

use Library\Core\Controller;
use App\Model\LoginModel;

final class LoginController extends Controller
{
    /**
     * Abre o formulário de login.
     */
    public static function index()
    {
        parent::render('login/login_form');
    }


    /**
     * Faz a autenticação do usuário.
     */
    public static function auth()
    {
        $_SESSION['etecshoes_usuario_logado'] = array(
            'id' => 1,
            'nome' => 'Aluno Etec'
        );

        header("Location: /");
    }


    /**
     * Faz o logout (sair) do usuário.
     */
    public static function logout()
    {
        unset($_SESSION['etecshoes_usuario_logado']);

        header("Location: /login");
    }
}