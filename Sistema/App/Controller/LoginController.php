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
        $model = new LoginModel();

        $model->checkRememberUser();

        parent::render('login/login_form', $model);
    }


    /**
     * Faz a autenticação do usuário.
     */
    public static function auth()
    {
        $model = new LoginModel();

        $model->email = $_POST['email'];
        $model->senha = $_POST['senha'];

        $model->auth();

        if(!$model->hasValidationErrors())
        {
            if(isset($_POST['remember']))
                LoginModel::remember($model->email);
            
            header("Location: /");

        } else
            parent::render('login/login_form', $model);            
    }


    /**
     * Faz o logout (sair) do usuário.
     */
    public static function logout()
    {
        LoginModel::logout();

        header("Location: /login");
    }


    /**
     * 
     */
    public static function esqueciSenha()
    {
        parent::render('login/esqueci_senha_form', new LoginModel());
    }
}