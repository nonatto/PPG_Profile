<?php
require_once('functions.php');
index();
?>
<?php include "../inc/header.php"; ?>
<!-- Seção de Conteúdo -->
<div class="uk-container">
  <div class="row">
    <div class="page-head">
      <ul class="uk-breadcrumb">
        <li><a href="<?php echo BASEURL; ?>index.php">Visão Geral</a></li>
        <li><span>Lista de Alunos</span></li>
      </ul>
      <h2 class="page-head-title uk-heading-bullet">Lista de Alunos</h2>
      <div class="cadastrar">
        <a href="<?php echo BASEURL; ?>aluno/add.php"><button class="uk-button uk-button-primary">Adicionar Novo Aluno</button></a>
      </div>
    </div>
    <div class="uk-grid-medium uk-child-width-expand@s uk-text-left" uk-grid>
      <div>
        <div class="uk-card uk-card-default uk-card-body">
          <section class="box ">
            <div class="content-body">
              <div class="row">
                <?php if (!empty($_SESSION['message'])) : ?>
                 <div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <?php echo $_SESSION['message']; ?>
                </div>
                <?php clear_messages(); ?>
              <?php endif; ?>
              <table class="uk-table uk-table-hover uk-table-divider">
                <thead>
                  <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>CPF</th>
                    <th>Opções</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if ($aluno) : ?>
                    <?php foreach ($aluno as $customer) : ?>
                     <tr>
                      <td><?php echo $customer['nome']; ?></td>
                      <td><?php echo $customer['sobrenome']; ?></td>
                      <td><?php echo $customer['cpf']; ?></td>
                      <td class="actions text-right">
                        <a href="view.php?id=<?php echo $customer['id']; ?>" class="uk-icon-link uk-margin-small-right" uk-icon="icon: file" title="Visualizar"></a>
                        <a href="edit.php?id=<?php echo $customer['id']; ?>" class="uk-icon-link uk-margin-small-right" uk-icon="icon: file-edit" title="Editar"></a>
                        <a href="delete.php?id=<?php echo $customer['id']; ?>" class="uk-icon-link" uk-toggle="target: #modal-example" uk-icon="icon: trash" title="Excluir"></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                <?php else : ?>
                 <tr>
                  <td colspan="6">Nenhum registro encontrado.</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- Modal de exclusão -->
      <div id="modal-example" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
          <h2 class="uk-modal-title">Excluir</h2>
          <p>Tem certeza que deseja excluir "<?php echo $customer['nome'] . " " . $customer['sobrenome']; ?>"</p>
          <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancelar</button>
            <a href="delete.php?id=<?php echo $customer['id']; ?>" class="uk-button uk-button-danger" title="Excluir">Excluir</a>
          </p>
        </div>
      </div>
    </section>
  </div>
</div>
</div>
</div>
</div>

<?php include "../inc/footer.php"; ?>
