<?php
require_once('functions.php');
add();
?>

<?php include "../inc/header.php";?>
<script src="../js/script.js"></script>

<!-- Seção de Conteúdo -->
<div class="uk-container">
  <div class="row">
    <div class="page-head">
      <ul class="uk-breadcrumb">
        <li><a href="<?php echo BASEURL; ?>index.php">Visão Geral</a></li>
        <li><span>Cadastrar Professor</span></li>
      </ul>
      <h2 class="page-head-title uk-heading-bullet">Cadastrar Professor</h2>
    </div>
    <div class="uk-grid-medium uk-child-width-expand@s uk-text-left" uk-grid>
      <div>
        <div class="uk-card uk-card-default uk-card-body">
          <section class="box ">
            <div class="content-body">
              <div class="row">
                <form action="add.php" method="post" class="uk-grid-small" uk-grid>
                  <header class="panel_header">
                    <h2 class="title pull-left uk-heading-bullet">Informações Pessoais</h2>
                  </header>
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label required" for="form-stacked-text">Nome</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="text" required name="customer['nome']">
                    </div>
                  </div>
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label required" for="form-stacked-text">Sobrenome</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="text" required name="customer['sobrenome']">
                    </div>
                  </div>
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label required" for="form-stacked-text">SIAPE</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="text" required pattern="[0-9]+$" maxlength="7" name="customer['siape']">
                    </div>
                  </div>
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label required" for="form-stacked-text">Data de Admmissão</label>
                    <div class="uk-form-controls">
                      <input class="uk-input date" id="form-stacked-text" type="text" required maxlength="10" name="customer['dataAdmissao']">
                    </div>
                  </div>
                  <div class="uk-width-1-3@s">
                  <div class="uk-form-label required">Instituição</div>
                  <div class="uk-form-controls">
                    <select class="uk-select" id="form-stacked-select" required name="customer['idInstituicao']" id="id_instituicao">
                      <option value="">Selecione a instituição</option>
                      <?php 
                      $sql = "SELECT * FROM instituicao";
                      $bd=open_database();
                      $resultado = mysqli_query($bd, $sql);
                      while ($dados = mysqli_fetch_assoc($resultado)){
                        $id = $dados['id'];
                        $nome = $dados['nome'];
                        echo "<option value='$id'>$nome</option>";
                      }
                      ?>
                    </select>
                  </div>
                </div>
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label required" for="form-stacked-select">Departamento</label>
                    <div class="uk-form-controls">
                     <select class="uk-select" id="form-stacked-select" required name="customer['idDepartamento']" id="id_departamento">
                      
                    </select>
                  </div>
                </div>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Dados para Login</h2>
                </header>
                <div class="uk-width-1-2@s">
                  <label class="uk-form-label required" for="form-stacked-text">E-mail</label>
                  <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" type="email" name="customer['email']">
                  </div>
                </div>
                <div class="uk-width-1-2@s">
                  <label class="uk-form-label required" for="form-stacked-text">Senha</label>
                  <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" required type="password" name="customer['senha']">
                  </div>
                </div>
                <div id="actions" class="cadastrar">
                  <button type="submit" class="uk-button uk-button-primary">Cadastrar</button>
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
