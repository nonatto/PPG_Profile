<?php
require_once('functions.php');
view($_GET['id']);
?>

<?php include "../inc/header.php";?>

<!-- Seção de Conteúdo -->
<div class="uk-container">
  <div class="row">
    <div class="page-head">
      <ul class="uk-breadcrumb">
        <li><a href="<?php echo BASEURL; ?>index.php">Visão Geral</a></li>
        <li><span>Visualizar Curso</span></li>
      </ul>
      <h2 class="page-head-title uk-heading-bullet">Visualizar Curso</h2>
    </div>
    <div class="uk-grid-medium uk-child-width-expand@s uk-text-left" uk-grid>
      <div>
        <div class="uk-card uk-card-default uk-card-body">
          <section class="box ">
            <div class="content-body">
              <div class="row">
                <?php if (!empty($_SESSION['message'])) : ?>
                 <div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
               <?php endif; ?>
               <header class="panel_header">
                 <h2 class="title pull-left uk-heading-bullet">Instituição: <?php echo $customer['nome']; ?></h2>
               </header>
               <header class="panel_header">
                 <h2 class="title pull-left uk-heading-bullet">Tipo: <?php echo ($customer['tipo'] == 1) ? "Pública" : "Privada" ?></h2>
               </header>
               <a href="edit.php?id=<?php echo $customer['id']; ?>" title="Editar"><button class="uk-button uk-button-primary">Editar</button></a>
               <a href="delete.php?id=<?php echo $customer['id']; ?>" class="uk-button uk-button-danger" uk-toggle="target: #modal-example" title="Excluir">Excluir</a>
             </div>
             <!-- Modal de exclusão -->
             <div id="modal-example" uk-modal>
              <div class="uk-modal-dialog uk-modal-body">
                <h2 class="uk-modal-title">Excluir</h2>
                <p>Tem certeza que deseja excluir "<?php echo $customer['nome']; ?>"</p>
                <p class="uk-text-right">
                  <button class="uk-button uk-button-default uk-modal-close" type="button">Cancelar</button>
                  <a href="delete.php?id=<?php echo $customer['id']; ?>">
                    <button id="instituicao-excluir-sucesso" class="uk-button uk-button-danger" title="Excluir" data-message="<span uk-icon='icon: check'></span> Dados excluídos com sucesso!" data-status="success">Excluir</button>
                  </a>
                </p>
              </div>
              <script>
              jQuery('#instituicao-excluir-sucesso').on('click', function() {
                UIkit.notification($(this).data());
              });
            </script>
            </div>
            
          </section>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include "../inc/footer.php";?>
