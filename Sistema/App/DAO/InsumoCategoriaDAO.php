<?php
/**
 * Faz as operações básicas no Banco de Dados (MySQL)
 * C reate (Insert) -> cadastra novos registros
 * R ead   (Select) -> lista os registros
 * U pdate (Update) -> atualiza um registro específico
 * D elete (Delete) -> delete um registro específico
 */

namespace App\DAO;

use Library\Core\DAO;
use App\Model\InsumoCategoriaModel;
use Exception;

final class InsumoCategoriaDAO extends DAO
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
    public function insert(InsumoCategoriaModel $model)
    {
        try 
        {
            $sql = "INSERT INTO insumo_cat (descricao) VALUES (?) ";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->descricao);
            
            return $stmt->execute();

        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }


    /**
     * 
     */
    public function update(InsumoCategoriaModel $model)
    {
        try 
        {
            $sql = "UPDATE insumo_cat SET descricao = ? WHERE id = ? ";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->descricao);
            $stmt->bindValue(2, $model->id);
            
            return $stmt->execute();

        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }


    /**
     * 
     */
    public function delete(int $id)
    {
        try 
        {
            $sql = "DELETE FROM insumo_cat WHERE id = ?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            
            return $stmt->execute();

        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }


    /**
     * 
     */
    public function getById(int $id)
    {
        try 
        {
            $sql = "SELECT * FROM insumo_cat WHERE id = ?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();

            $registro_completo = $stmt->fetchObject('App\Model\InsumoCategoriaModel');

            return $registro_completo;

        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }


    /**
     * Retorna a lista completa de Categorias de Insumos do Banco de Dados da Fábrica.
     */
    public function getAllRows()
    {
        try {

            $stmt = $this->conexao->prepare("SELECT * FROM insumo_cat");
            $stmt->execute();

            $listagem = $stmt->fetchAll(DAO::FETCH_CLASS);

            return $listagem;

        } catch(Exception $e) {
            echo $e->getMessage();
        }               
    }
 }