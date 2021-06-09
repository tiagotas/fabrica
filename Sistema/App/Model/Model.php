<?php

namespace App\Model;

abstract class Model
{

    protected $dao;

    public $rows;
    public $rows_count;

    protected $validation_erros = [];
    

    /**
     * 
     */
    protected function setValidationError($error)
    {
        $this->validation_erros[] = $error;
    }


    /**
     * 
     */
    public function getValidationErrors()
    {
        return $this->validation_erros;
    }


    /**
     * 
     */
    public function hasValidationErrors()
    {
        return count($this->validation_erros) > 0 ? true : false;
    }    
}