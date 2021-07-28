<?php

namespace App\Model;

use Library\Core\Model;
use App\DAO\LoginDAO;

final class LoginModel extends Model
{
    public $id;
    public $nome;
    public $email;
    public $senha;

    /**
     * 
     */
    public function __construct()
    {
        $this->dao = new LoginDAO();
    }


    /**
     * 
     */
    public function auth()
    {
        $dados_usuario = $this->dao->auth($this->email, $this->senha);

        if(is_object($dados_usuario))
        {
            $_SESSION['etecshoes_usuario_logado'] = array(
                'id' => $dados_usuario->id,
                'nome' => $dados_usuario->nome,
                'email' => $dados_usuario->email
            );

        } else
            $this->setValidationError("Login Falhou. Dados incorretos.");
    }

    /**
     * 
     */
    public static function remember($email)
    {
        $validade = strtotime("+1 month");

        setcookie("etecshoes_email", $email, $validade, "/", "", false, true);
    }
    

    /**
     * 
     */
    public function checkRememberUser()
    {
        if(isset($_COOKIE['etecshoes_email']))
        {
            $this->email = $_COOKIE['etecshoes_email'];
        }
    }

    /**
     * 
     */
    public static function forget()
    {
        if(isset($_COOKIE['etecshoes_email']))
        {
            $validade = time() - 3600;

            setcookie("etecshoes_email", "", $validade, "/", "", false, true);
        }
    }

    /**
     * 
     */
    public static function logout()
    {
        self::forget();

        unset($_SESSION['etecshoes_usuario_logado']);        
    }


    /**
     * 
     */
    public static function getCurrentUser()
    {
        return $_SESSION['etecshoes_usuario_logado'];
    }
}