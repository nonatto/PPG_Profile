<?php
require_once('functions.php');
add();
?>

<?php include "../inc/header.php";?>
<!-- Seção de Conteúdo -->
<div class="uk-container">
  <div class="row">
    <div class="page-head">
      <ul class="uk-breadcrumb">
        <li><a href="<?php echo BASEURL; ?>index.php">Visão Geral</a></li>
        <li><span>Cadastrar Instituição</span></li>
      </ul>
      <h2 class="page-head-title uk-heading-bullet">Cadastrar Instituição</h2>
    </div>
    <div class="uk-grid-medium uk-child-width-expand@s uk-text-left" uk-grid>
      <div>
        <div class="uk-card uk-card-default uk-card-body">
          <section class="box ">
            <div class="content-body">
              <div class="row">
                <div class="requerido">
                  <span class="asterisco">*</span> Campos Obrigatórios
                </div>
                <form action="add.php" method="post" class="uk-grid-small" uk-grid>
                  <header class="panel_header">
                    <h2 class="title pull-left uk-heading-bullet">Informações da Instituição</h2>
                  </header>
                  <div class="uk-width-1-2@s">
                    <label class="uk-form-label required" for="form-stacked-text">Nome</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="nome-instituicao" type="text" required name="customer['nome']">
                    </div>
                  </div>
                  <div class="uk-width-1-2@s">
                    <label class="uk-form-label required" for="form-stacked-text">Tipo</label>
                    <div class="uk-form-controls">
                      <select class="uk-select" id="form-stacked-select" required name="customer['tipo']">
                        <option value="">Selecione o tipo da instituição</option>
                        <option value="1">Pública</option>
                        <option value="2">Privada</option>
                      </select>
                    </div>
                  </div>
                  <div id="actions" class="cadastrar">
                    <button type="submit" id="instituicao-cadastrar-sucesso" class="uk-button uk-button-primary" data-message="<span uk-icon='icon: check'></span> Dados cadastrados com sucesso!" data-status="success">Cadastrar</button>
                    <a href="index.php" class="uk-button uk-button-danger">Cancelar</a>
                  </div>
                </form>
                <script>
                jQuery('#instituicao-cadastrar-sucesso').on('click', function() {
                    UIkit.notification($(this).data());
                  });
                </script>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include "../inc/footer.php";?>
