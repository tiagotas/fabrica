<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>EtecShoes - Listagem de Categoria de Insumo</title>

    <?php include PATH_VIEW . '/includes/config_css.php' ?>

</head>

<body class="bg-light">

    <?php include PATH_VIEW . 'includes/header.php' ?>

    <main class="container bg-white rounded border mt-3 p-3">

        <h4>Lista de Categorias de Insumos de Fabricação de Sapatos <?= $model->rows_count ?> </h4>

        <table class="table table-sm table-stripped">
            <thead class="thead-dark">
                <tr>
                    <th>Código</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($model->rows as $item) : ?>
                    <tr>
                        <td><?= $item->id ?></td>
                        <td><a href="/insumo/categoria/ver?id=<?= $item->id ?>"><?= $item->descricao ?></a></td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
    </main>

    <?php include PATH_VIEW . 'includes/footer.php' ?>

    <?php include PATH_VIEW . '/includes/config_js.php' ?>

</body>

</html>