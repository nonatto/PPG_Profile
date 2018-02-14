<?php
require_once('functions.php');
edit();
?>
<?php include "../inc/header.php"; ?>
<!-- Seção de Conteúdo -->
<div class="uk-container">
  <div class="row">
    <div class="page-head">
      <ul class="uk-breadcrumb">
        <li><a href="<?php echo BASEURL; ?>index.php">Visão Geral</a></li>
        <li><span>Editar Professor</span></li>
      </ul>
      <h2 class="page-head-title uk-heading-bullet">Editar Professor</h2>
    </div>
    <div class="uk-grid-medium uk-child-width-expand@s uk-text-left" uk-grid>
      <div>
        <div class="uk-card uk-card-default uk-card-body">
          <section class="box ">
            <div class="content-body">
              <form action="edit.php?id=<?php echo $customer['id']; ?>" method="post" class="uk-grid-small" uk-grid>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Informações Pessoais</h2>
                </header>
                <div class="uk-width-1-3@s">
                  <label class="uk-form-label" for="form-stacked-text">Nome</label>
                  <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" type="text" name="customer['nome']" value="<?php echo $customer['nome']; ?>">
                  </div>
                </div>
                <div class="uk-width-1-3@s">
                  <label class="uk-form-label" for="form-stacked-text">Sobrenome</label>
                  <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" type="text" name="customer['sobrenome']" value="<?php echo $customer['sobrenome']; ?>">
                  </div>
                </div>
                <div class="uk-width-1-3@s">
                  <label class="uk-form-label" for="form-stacked-text">SIAPE</label>
                  <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" type="text" pattern="[0-9]+$" maxlength="7" name="customer['siape']" value="<?php echo $customer['siape']; ?>">
                  </div>
                </div>
                <div class="uk-width-1-3@s">
                  <label class="uk-form-label" for="form-stacked-text">Data Admissão</label>
                  <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" type="date" name="customer['dataAdmissao']" value="<?php echo $customer['dataAdmissao']; ?>">
                  </div>
                </div>
                <div class="uk-width-1-3@s">
                  <label class="uk-form-label" for="form-stacked-select">Departamento</label>
                  <div class="uk-form-controls">
                    <select class="uk-select" id="form-stacked-select" name="customer['idDepartamento']" id="id_departamento">
                    <?php 
                    $sql = "SELECT * FROM departamento";
                    $bd=open_database();
                    $resultado = mysqli_query($bd, $sql);
                    while ($dados = mysqli_fetch_assoc($resultado)){
                      $id = $dados['id'];
                      $nome = $dados['nome'];
                      if( $id == $customer['idDepartamento'])
                        echo "<option value='$id' selected>$nome</option>";
                      else
                        echo "<option value='$id'>$nome</option>";
                    }
                    ?>
                  </select>
                  </div>
                </div>
                <div class="uk-width-1-3@s">
                  <label class="uk-form-label" for="form-stacked-select">Instituição</label>
                  <div class="uk-form-controls">
                    <select class="uk-select" id="form-stacked-select" name="customer['idInstituicao']" id="id_instituicao">
                    <?php 
                    $sql = "SELECT * FROM instituicao";
                    $bd=open_database();
                    $resultado = mysqli_query($bd, $sql);
                    while ($dados = mysqli_fetch_assoc($resultado)){
                      $id = $dados['id'];
                      $nome = $dados['nome'];
                      if( $id == $customer['idInstituicao'])
                        echo "<option value='$id' selected>$nome</option>";
                      else
                        echo "<option value='$id'>$nome</option>";
                    }
                    ?>
                  </select>
                  </div>
                </div>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Dados para Login</h2>
                </header>
                <div class="uk-width-1-2@s">
                  <label class="uk-form-label" for="form-stacked-text">E-mail</label>
                  <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" type="email" name="customer['email']" value="<?php echo $customer['email']; ?>">
                  </div>
                </div>
                <div class="uk-width-1-2@s">
                  <label class="uk-form-label" for="form-stacked-text">Senha</label>
                  <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" type="password" name="customer['senha']" value="<?php echo $customer['senha']; ?>">
                  </div>
                </div>
                <div id="actions" class="cadastrar">
                  <button type="submit" class="uk-button uk-button-primary">Salvar</button>
                  <a href="index.php" class="uk-button uk-button-danger">Cancelar</a>
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
<?php include "../inc/footer.php";?>
