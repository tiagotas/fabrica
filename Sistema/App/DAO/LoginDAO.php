<?php

namespace App\DAO;

use Library\Core\DAO;
use App\Model\LoginModel;
use Exception;

final class LoginDAO extends DAO
{
    /**
     * 
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 
     */
    public function auth($email, $password)
    {
        $sql = "SELECT id, nome, email FROM usuario WHERE email = ? AND senha = sha1(?) ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $password);
        $stmt->execute();

        $dados_usuario = $stmt->fetchObject('App\Model\LoginModel');

        return $dados_usuario;
    }
}
