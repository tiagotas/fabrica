<html>
    <head>
    
    </head>

    <body>
        
        <?php include PATH_VIEW . 'includes/header.php' ?>

        <h1>Lista de Categorias de Insumos de Favricação de Sapatos</h1>

        <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($lista_do_db as $item): ?>
                <tr>
                    <td><?= $item->id ?></td>
                    <td><a href="/insumo/categoria/ver?id=<?= $item->id ?>"><?= $item->descricao ?></a></td>
                </tr>
                <?php endforeach ?>

            </tbody>
        </table>

        <?php include PATH_VIEW . 'includes/footer.php' ?>
    
    </body>
</html>