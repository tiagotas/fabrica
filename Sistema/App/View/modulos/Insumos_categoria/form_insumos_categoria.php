<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>EtecShoes - Cadastro de Categoria de Insumo</title>

    <?php include PATH_VIEW . '/includes/config_css.php' ?>
</head>

<body class="bg-light">

    <?php include PATH_VIEW . 'includes/header.php' ?>

    <main class="container bg-white rounded border mt-3 p-3">

        <fieldset class="border rounded p-3">
            <legend class="text-center h4 w-auto bg-light border rounded p-1">
                Cadastro de Categoria de Insumo
            </legend>

            <form method="post" action="/insumo/categoria/cadastro/salvar">

                <div class="form-group">
                    <label for="descricao">Descrição:</label>
                    <input name="descricao" id="descricao" autofocus class="form-control" type="text" value="<?= $model->descricao ?>" />
                </div>

                <div class="form-row justify-content-center">

                    <a class="btn btn-secondary mr-1" href="/insumo/categoria">
                        <i class="fa fa-arrow-left"></i>
                        Voltar
                    </a>

                    <button type="submit" class="btn btn-success mr-1">
                        <i class="fa fa-save"></i>
                        Salvar
                    </button>

                    <?php if ($model->id !== NULL) : ?>
                        <input name="id" id="id" type="hidden" value="<?= $model->id ?>" />

                        <a class="btn btn-danger" href="/insumo/categoria/excluir?id=<?= $model->id ?>">
                            <i class="fa fa-trash-o"></i>
                            Excluir
                        </a>
                    <?php endif ?>

                </div>



            </form>
        </fieldset>
    </main>

    <?php include PATH_VIEW . '/includes/footer.php' ?>

    <?php include PATH_VIEW . '/includes/config_js.php' ?>
</body>

</html>