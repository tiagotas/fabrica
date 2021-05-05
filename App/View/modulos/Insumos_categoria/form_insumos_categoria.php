<?php include PATH_VIEW . 'includes/header.php' ?>


<fieldset>
    <legend>Cadastro de Categoria de Insumo</legend>

        <form method="post" action="/insumo/categoria/cadastro/salvar">

            <label>Descrição:</label>
            <input name="descricao" id="descricao" type="text" value="<?= $model->descricao ?>" />

            <button type="submit">Salvar</button>

            <?php if($model->id !== NULL): ?>
                <input name="id" id="id" type="hidden" value="<?= $model->id ?>" />    
                <a href="/insumo/categoria/excluir?id=<?= $model->id ?>">Excluir</a>
            <?php endif ?>

        </form>
</fieldset>

<?php include PATH_VIEW . 'includes/footer.php' ?>