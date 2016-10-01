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
        <link rel="stylesheet" href='lib/css/bootstrap/bootstrap.min.css'>

  </head>

  <body ng-app="ViivesAPP">


      <div class="subscribeform">

          <form name="DadosNovoUsuarioForm" class="form-horizontal">
              <fieldset>
              <!-- Form Name -->
              <legend>Dados Cadastrais</legend>

              <div class="form-group  ">
                <label class=" control-label col-md-4 control-label text-left" for="nome">Nome</label>
                <div class="col-md-4">
                <input id="nome" ng-model="usuario.nome" name="nome" type="text" placeholder="Nome do Aluno" class="form-control input-md" required="">

                </div>
              </div>

              <div class="form-group ">
                <label class=" control-label col-md-4 control-label text-left" for="endereco">Endereço</label>
                <div class="col-md-4">
                <input id="endereco" ng-model="usuario.endereco" name="endereco" type="text" placeholder="Endereço completo" class="form-control input-md">

                </div>
              </div>

              <div class="form-group ">
                <label class=" control-label col-md-4 control-label text-left" for="telefone_celular">Telefone Celular</label>
                <div class="col-md-4">
                <input  ui-br-phone-number id="telefone_celular" ng-model="usuario.telefone_celular" name="telefone_celular" type="text" placeholder="Telefone Celular" class="form-control input-md">

                </div>
              </div>

              <div class="form-group ">
                <label class=" control-label col-md-4 control-label text-left" for="email">E-mail</label>
                <div class="col-md-4">
                <input id="email" name="email" ng-model="usuario.email" type="email" placeholder="E-mail do usuario" class="form-control input-md">

                </div>
              </div>


              <!-- Button (Double) -->
              <div class="form-group ">
                <label class=" control-label col-md-4 control-label text-left" for="salvar">Ações</label>
                <div class="col-md-8">
                  <button id="salvar" type="submit" name="salvar" ng-disabled="DadosNovoUsuarioForm.$invalid" ng-click="NovoAluno(usuario)" class="btn btn-primary btn-raised">Salvar</button>

                </div>
              </div>

              </fieldset>
          </form>
      </div>
      <div class="navbar navbar-default navbar-fixed-top">
          <div class="container">
              <div class="navbar-header">
                  <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Viives</a><ul>

              </div>
              <center>

                  <div class="navbar-collapse collapse" id="navbar-main">

                      <form class="navbar-form navbar-right" role="search">
                          <button type="button" class="btn btn-success">Me Inscrever</button>
                          <div class="form-group">
                              <input type="text" class="form-control" name="username" placeholder="Email">
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" name="password" placeholder="Senha">
                          </div>
                          <button type="submit" class="btn btn-primary">Entrar</button>
                      </form>
                  </div>
              </center>
          </div>
      </div>
  </body>
</html>
