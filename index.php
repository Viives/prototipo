<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Viives Protótipo</title>
    <script src="app/lib/angular/angular.min.js"></script>
    <script src="app/js/app.js"></script>
    <link rel="stylesheet" href="app/lib/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="app/lib/css/app.css">
    <link rel="stylesheet" href="home.css">
  </head>

  <body ng-app="">

      <div align="center"class="">
          <h2>Login</h2>
      </div>

    <div class="container">
      <form action="#" method="post" class="form-signin">

        <label for="email" class="sr-only">Email</label>

        <input ng-model="email" type="email" name="email" id="email" class="form-control" placeholder="E-mail"  autofocus>

        <label for="senha" class="sr-only">Senha</label>

        <input type="password" ng-minlength="4" ng-model="senha"  name="senha" id="senha" class="form-control" placeholder="Senha" >

        <button ng-disabled="!email || !senha" class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      </form>
    </div>
  </body>
</html>
