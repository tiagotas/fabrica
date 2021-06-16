<?php

namespace App\Model;

use Library\Core\Model;
use App\DAO\InsumoCategoriaDAO;

final class InsumoCategoriaModel extends Model
{
    public $id;
    public $descricao;
    

    /**
     * 
     */
    public function __construct()
    {
        $this->dao = new InsumoCategoriaDAO();
    }
    

    /**
     * 
     */
    public function getAllRows()
    {
        $this->rows = $this->dao->getAllRows();
        $this->rows_count = count($this->rows);
    }


    /**
     * 
     */
    public function getById(int $id)
    {
        $dados = $this->dao->getById($id);

        $this->id = $dados->id;
        $this->descricao = $dados->descricao;
    }


    /**
     * 
     */
    public function save()
    {
        if(empty(str_replace(" ", "", $this->descricao)))
            $this->setValidationError("A descrição não pode ser vazia.");
        
            

        if(!$this->hasValidationErrors())
        {
            if($this->id == NULL)
                $this->dao->insert($this);
            else
                $this->dao->update($this);
        } else 
            return false;       
    }


    /**
     * 
     */
    public function delete(int $id)
    {
        $this->dao->delete($id);
    }
}