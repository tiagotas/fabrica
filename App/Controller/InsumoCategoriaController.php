<?php

include 'DAO/InsumoCategoriaDAO.php';

class InsumoCategoriaController
{
    /**
     * Abre a View de listagem de categorias de insumos.
     */
    public static function index()
    {
        $dao = new InsumoCategoriaDAO();

        $lista_do_db = $dao->getAllRows();

        include 'View/modulos/Insumos_categoria/listar_insumos_categoria.php';
    }
    

    /**
     * Abre a View de Formulário de Cadastro de categorias de insumos.
     */
    public static function cadastro()
    {
        include 'View/modulos/Insumos_categoria/form_insumos_categoria.php';
    }
}



