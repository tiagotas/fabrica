<?php
/**
 * Faz as operações básicas no Banco de Dados (MySQL)
 * C reate (Insert) -> cadastra novos registros
 * R ead   (Select) -> lista os registros
 * U pdate (Update) -> atualiza um registro específico
 * D elete (Delete) -> delete um registro específico
 */
include 'MySQL.php';


class InsumoCategoriaDAO
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = new MySQL();         
    }

    public function insert()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function getById()
    {

    }


    /**
     * Retorna a lista completa de Categorias de Insumos do Banco de Dados da Fábrica.
     */
    public function getAllRows()
    {
        try {

            $stmt = $this->conexao->prepare("SELECT * FROM insumo_cat");
            $stmt->execute();

            $listagem = $stmt->fetchAll(PDO::FETCH_CLASS);

            return $listagem;

        } catch(Exception $e) {
            echo $e->getMessage();
        }               
    }
 }