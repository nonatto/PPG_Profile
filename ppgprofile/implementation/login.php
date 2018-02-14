<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>
<?php error_reporting(false);// para nao da exit() de erros na tel?>
<?php $db = open_database(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="#">
  <!-- Estilos -->
  <link rel="stylesheet" href="<?php echo BASEURL; ?>css/uikit.min.css" />
  <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css" />
  <!--<link rel="stylesheet" id="theme-style-css" href="https://demo.yootheme.com/themes/wordpress/2017/joline/wp-content/themes/yootheme/css/theme.css?ver=1496844980" type="text/css" media="all">-->
  <!-- Fontes -->
  <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="<?php echo BASEURL; ?>js/uikit.min.js"></script>
  <script src="<?php echo BASEURL; ?>js/uikit-icons.min.js"></script>
  <!-- Título -->
  <title>PPG Profile</title>
</head>
<!-- Seção de Conteúdo -->
<div class="uk-container">
  <div class="row">
    <div class="uk-grid-medium uk-child-width-expand@s uk-text-left" uk-grid>
      <div>
          <div class="uk-card uk-card-default uk-card-body" style="width: 50%; margin: 0 auto; top: 10%;">
            <div class="page-head" style="text-align: center; padding-bottom: 20px;">
              <img src="<?php echo BASEURL; ?>images/logo.png" alt="">
            </div>
            <section class="box ">
                <div class="content-body">
                  <div class="row">
                      <form action="authenticate.php" method="post" class="uk-grid-small" uk-grid>
                        <div class="uk-width-1-@s">
                          <label class="uk-form-label" for="form-stacked-text">Login</label>
                          <div class="uk-form-controls">
                              <input class="uk-input" id="form-stacked-text" type="text" name="txt_login">
                          </div>
                        </div>
                        <div class="uk-width-1-@s">
                          <label class="uk-form-label" for="form-stacked-text">Senha</label>
                          <div class="uk-form-controls">
                              <input class="uk-input" id="form-stacked-text" type="password" name="txt_senha">
                          </div>
                          <span><a href="#" class="uk-align-right senha">Esqueceu senha?</a></span>
                          <br>
                          <?php if($_GET['msg']=='dados_incorretos') echo '<span style="color:red;">Dados incorretos</span>'; ?>
                        </div>
                        <div class="uk-width-1-@s">
                    <label class="uk-form-label" for="form-stacked-select">Entrar como:</label>
                    <div class="uk-form-controls">
                      <select class="uk-select" id="form-stacked-select" name="txt_perfil" required="required">
                        <option value="">Selecione um perfil</option>
                        <option value="1">Professor</option>
                        <option value="2">Administrador</option>
                      </select>
                    </div>
                  </div>
                      <div id="actions" class="cadastrar">
                        <button type="submit" class="uk-button uk-button-primary">Entrar</button>
                      </div>
                  </form>
                  </div>
                </div>
            </section>
          </div>
      </div>
    </div>
  </div>
</div>
