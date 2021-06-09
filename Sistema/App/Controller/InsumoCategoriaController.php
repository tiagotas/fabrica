<?php

namespace App\Controller;

use App\Model\InsumoCategoriaModel;

final class InsumoCategoriaController extends Controller
{
    /**
     * Abre a View de listagem de categorias de insumos.
     */
    public static function index()
    {
        parent::isProtected();

        $model = new InsumoCategoriaModel();
        $model->getAllRows();

        parent::render('Insumos_categoria/listar_insumos_categoria',  $model);
    }
    

    /**
     * Abre a View de Formulário de Cadastro de categorias de insumos.
     */
    public static function cadastro(InsumoCategoriaModel $_model = null)
    {
        parent::isProtected();

        $model = $_model == null ? new InsumoCategoriaModel() : $_model;

        parent::render('Insumos_categoria/form_insumos_categoria', $model);
    }

    
    /**
     * Processa a requisição do formulário para salvar um cadastro
     */
    public static function salvar()
    {
        parent::isProtected();

        $model = new InsumoCategoriaModel();
        
        $model->id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $model->descricao = $_POST['descricao'];
        
        if($model->save())
            header("Location: /insumo/categoria"); 
        else
            self::cadastro($model);        
    }


    /**
     * Abre o formulário de cadastro com os dados completos do registro
     */
    public static function ver()
    {
        parent::isProtected();

        $model = new InsumoCategoriaModel();
        
        $model->getById( (int) $_GET['id']);

        parent::render('Insumos_categoria/form_insumos_categoria', $model);
    }


    /**
     * Processa a solicitação de exclusão de um registro do banco de dados
     */
    public static function excluir()
    {
        parent::isProtected();

        $model = new InsumoCategoriaModel();

        $model->delete( (int) $_GET['id']);

        header("Location: /insumo/categoria");               
    }
}