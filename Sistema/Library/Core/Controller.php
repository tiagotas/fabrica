<?php

namespace Library\Core;

abstract class Controller 
{
    /**
     * Verifica se o usuário fez login.
     */
    protected static function isProtected()
    {
        // Verifica se o usuário fez o login.
    }


    /**
     * Busca um View para ser apresentada ao usuário.
     */
    protected static function render($view, Model $model = null)
    {
        $path = PATH_VIEW . '/modulos/' . $view . '.php';

        if(file_exists($path))
            require $path;
        else
            echo "Arquivo não encontrado.";
    }
}