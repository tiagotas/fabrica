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

        include PATH_VIEW . 'modulos/Insumos_categoria/listar_insumos_categoria.php';
    }
    

    /**
     * Abre a View de Formulário de Cadastro de categorias de insumos.
     */
    public static function cadastro()
    {
        $model = new InsumoCategoriaModel();

        include PATH_VIEW. 'modulos/Insumos_categoria/form_insumos_categoria.php';
    }

    /**
     * Processa a requisição do formulário para salvar um cadastro
     */
    public static function salvar()
    {
        $dao = new InsumoCategoriaDAO();

        $model = new InsumoCategoriaModel();
        $model->id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $model->descricao = $_POST['descricao'];

        if($model->id == NULL)
            $dao->insert($model);
        else
            $dao->update($model);

        header("Location: /insumo/categoria");
    }


    /**
     * Abre o formulário de cadastro com os dados completos do registro
     */
    public static function ver()
    {
        $dao = new InsumoCategoriaDAO();

        $id = (int) $_GET['id'];

        $model = $dao->getById($id);

        include PATH_VIEW. 'modulos/Insumos_categoria/form_insumos_categoria.php';
    }

    /**
     * Processa a solicitação de exclusão de um registro do banco de dados
     */
    public static function excluir()
    {
        $dao = new InsumoCategoriaDAO();

        $id = (int) $_GET['id'];

        $dao->delete($id);

        header("Location: /insumo/categoria");        
    }
}   



