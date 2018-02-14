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
        <li><span>Cadastrar Curso</span></li>
      </ul>
      <h2 class="page-head-title uk-heading-bullet">Cadastrar Curso</h2>
    </div>
    <div class="uk-grid-medium uk-child-width-expand@s uk-text-left" uk-grid>
      <div>
        <div class="uk-card uk-card-default uk-card-body">
          <section class="box ">
            <div class="content-body">
              <div class="row">
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Informações do Curso</h2>
                </header>
                <form action="add.php" method="post" class="uk-grid-small" uk-grid>
                  <div class="uk-width-1-2@s">
                    <label class="uk-form-label required" for="form-stacked-text">Nome</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="text" required name="customer['nome']">
                    </div>
                  </div>
                  <div class="uk-width-1-2@s">
                    <label class="uk-form-label required" for="form-stacked-select">Instituição</label>
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
                <div class="uk-width-1-2@s">
                  <label class="uk-form-label required" for="form-stacked-select">Departamento</label>
                  <div class="uk-form-controls">
                   <select class="uk-select" id="form-stacked-select" required name="customer['idDepartamento']" id="id_departamento">
                    
                  </select>
                </div>
              </div>
              <div class="uk-width-1-2@s">
                <label class="uk-form-label required" for="form-stacked-text">Campus</label>
                <div class="uk-form-controls">
                  <input class="uk-input" id="form-stacked-text" required type="text" name="customer['campus']">
                </div>
              </div>
              <div class="uk-width-1-3@s">
                <label class="uk-form-label required" for="form-stacked-text">Conceito no MEC</label>
                <div class="uk-form-controls">
                  <input class="uk-input" id="form-stacked-text" required title="Preencha o campo com um valor entre 0 e 5" pattern="[0-9]+$" min="0" max="5" type="number" name="customer['conceitoMEC']">
                </div>
              </div>
              <div class="uk-width-1-3@s">
                <label class="uk-form-label required" for="form-stacked-select">Turno</label>
                <div class="uk-form-controls">
                  <select class="uk-select" id="form-stacked-select" required name="customer['turno']">
                    <option value="">Selecione um turno</option>
                    <option value="M">Matutino</option>
                    <option value="V">Vespertino</option>
                    <option value="N">Noturno</option>
                  </select>
                </div>
              </div>
              <div class="uk-width-1-3@s">
                <label class="uk-form-label required" for="form-stacked-text">Ano de Criação</label>
                <div class="uk-form-controls">
                  <input class="uk-input" id="form-stacked-text" required type="number" min="0" required pattern="[0-9]+$" name="customer['anoCriacao']">
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
