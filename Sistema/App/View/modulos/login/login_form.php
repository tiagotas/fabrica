<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <title>EtecShoes - Login</title>

  <?php include PATH_VIEW . '/includes/config_css.php' ?>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="/App/View/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin">
    <form method="post" action="/auth">

      <h1 class="h3 mb-3 fw-normal">EtecShoes</h1>

      <?php if ($model->hasValidationErrors()) : ?>
        <div class="alert alert-danger" role="alert">
          <h4 class="alert-heading">Ops!</h4>
          <hr>
          <?php foreach ($model->getValidationErrors() as $error) : ?>
            <?= $error ?>
          <?php endforeach ?>
        </div>
      <?php endif ?>

      <div class="form-floating">
        <label for="floatingInput">Seu e-mail:</label>
        <input name="email" type="email" class="form-control" id="floatingInput" value="<?= $model->email ?>" placeholder="name@example.com">
      </div>
      <div class="form-floating">
        <label for="floatingPassword">Senha:</label>
        <input name="senha" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      </div>

      <div class="checkbox mb-3">
        <label>
          <input name="remember" type="checkbox" value="true"> Lembrar meu Usuário
        </label>
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">ENTRAR</button>

      <p class="pt-3">
        <a href="/recuperar-senha">Esqueci a Senha</a>
      </p>

      <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
    </form>
  </main>



</body>

</html>