<?php

namespace App\DAO;

use Library\MySQL;

abstract class DAO extends MySQL
{
    /**
     * Armazena a conexão com o SGBD.
     */
    protected $conexao;


    /**
     * Abre conexão com o SGBD.
     */
    protected function __construct()
    {
        $this->conexao = new MySQL();         
    }
}