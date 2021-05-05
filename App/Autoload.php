<?php

class Autoload
{

    public function __construct()
    {
        spl_autoload_register(function($class)
        {
            $caminho_arquivo_controller = PATH_CONTROLLER . $class . ".php";

            if(file_exists($caminho_arquivo_controller))
                include $caminho_arquivo_controller;            
            else
            {
                $caminho_arquivo_model = PATH_MODEL . $class . ".php";

                if(file_exists($caminho_arquivo_model))
                    include $caminho_arquivo_model;
                else 
                {
                    $caminho_arquivo_dao = PATH_DAO . $class . ".php";

                    include $caminho_arquivo_dao;
                }                
            }
        });              
    }
}

new Autoload();