<?php

namespace App\Model;

use App\DAO\InsumoCategoriaDAO;

final class InsumoCategoriaModel extends Model
{
    public $id;
    public $descricao;    
    

    /**
     * 
     */
    public function getAllRows()
    {
        $dao = new InsumoCategoriaDAO();

        $this->rows = $dao->getAllRows();
        $this->rows_count = count($this->rows);
    }


    /**
     * 
     */
    public function getById(int $id)
    {

    }


    /**
     * 
     */
    public function save()
    {

    }
}