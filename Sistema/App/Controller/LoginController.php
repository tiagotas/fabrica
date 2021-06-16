<?php

namespace App\Controller;

use Library\Core\Controller;
use App\Model\LoginModel;

final class LoginController extends Controller
{
    /**
     * Abre o fomrulário de login.
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

    }


    /**
     * Faz o logout (sair) do usuário.
     */
    public static function logout()
    {

    }
}