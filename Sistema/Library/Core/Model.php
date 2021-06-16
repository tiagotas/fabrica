<?php

namespace Library\Core;

abstract class Model
{
    protected $dao;

    public $rows;
    public $rows_count;

    protected $validation_errors = [];
    

    /**
     * 
     */
    protected function setValidationError($error)
    {
        $this->validation_errors[] = $error;
    }


    /**
     * 
     */
    public function getValidationErrors()
    {
        return $this->validation_errors;
    }


    /**
     * 
     */
    public function hasValidationErrors()
    {
        return count($this->validation_errors) > 0 ? true : false;
    }    
}