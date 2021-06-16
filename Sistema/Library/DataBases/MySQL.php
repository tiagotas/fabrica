<?php
/**
 * Fazer conexão com o MySQL
 */
namespace Library\DataBases;

use PDO;

class MySQL extends PDO
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "@MySQL_dev_2020";
    private $db   = "fabrica";

    private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);


    /**
     * Faz uma conexão com o Banco de Dados da Fábrica.
     */
    public function __construct()
    {
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db;

        return parent::__construct($dsn, $this->user, $this->pass, $this->options);
    }
}