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
        <li><span>Qualificar Aluno</span></li>
    </ul>
      <h2 class="page-head-title uk-heading-bullet">Qualificar Aluno</h2>
    </div>
    <div class="uk-grid-medium uk-child-width-expand@s uk-text-left" uk-grid>
      <div>
          <div class="uk-card uk-card-default uk-card-body">
            <section class="box ">
                <div class="content-body">
                  <div class="row">
                    <header class="panel_header">
                        <h2 class="title pull-left uk-heading-bullet">Informações do Aluno</h2>
                    </header>
                      <form action="add.php" method="post" class="uk-grid-small" uk-grid>
                        <div class="uk-width-1-2@s">
                          <label class="uk-form-label" for="form-stacked-text">CPF</label>
                          <div class="uk-form-controls">
                              <input class="uk-input cpf" id="form-stacked-text" type="text" name="customer['']" placeholder="Digite o cpf do aluno que deseja pesquisar">
                          </div>
                        </div>
                        <div class="uk-width-1-2@s">
                          <label class="uk-form-label" for="form-stacked-text">Orientador</label>
                          <div class="uk-form-controls">
                              <input class="uk-input" id="form-stacked-text" disabled type="text" name="customer['']">
                          </div>
                        </div>
                        <div class="uk-width-1-3@s">
                          <label class="uk-form-label" for="form-stacked-text">Curso</label>
                          <div class="uk-form-controls">
                              <input class="uk-input" id="form-stacked-text" disabled type="text" name="customer['']">
                          </div>
                        </div>
                        <div class="uk-width-1-3@s">
                          <label class="uk-form-label" for="form-stacked-text">Semestre de Ingresso</label>
                          <div class="uk-form-controls">
                              <input class="uk-input" id="form-stacked-text" disabled type="text" name="customer['']">
                          </div>
                        </div>
                        <div class="uk-width-1-3@s">
                          <label class="uk-form-label" for="form-stacked-text">Área de Conhecimento</label>
                          <div class="uk-form-controls">
                              <input class="uk-input" id="form-stacked-text" disabled type="text" name="customer['']">
                          </div>
                        </div>
                      <header class="panel_header">
                          <h2 class="title pull-left uk-heading-bullet">Informações Sobre a Defesa</h2>
                      </header>
                      <div class="uk-width-1-2@s">
                        <label class="uk-form-label" for="form-stacked-text">Data</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="date" name="customer['']">
                        </div>
                      </div>
                      <div class="uk-width-1-2@s">
                        <div class="uk-form-label">Aprovação</div>
                        <div class="uk-form-controls">
                            <select class="uk-select" id="form-stacked-select" name="customer['']">
                                <option>Sim</option>
                                <option>Não</option>
                            </select>
                        </div>
                      </div>
                      <div class="uk-width-1-3@s">
                        <label class="uk-form-label" for="form-stacked-text">Pesquisar por SIAPE</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="text" name="customer['']">
                        </div>
                      </div>
                      <div class="uk-width-1-3@s">
                        <div class="uk-form-label">Pesquisar Professor</div>
                        <div class="uk-form-controls">
                            <select class="uk-select" id="form-stacked-select" name="customer['']">
                                <option>Ivan Machado</option>
                                <option>Daniela Claro</option>
                            </select>
                        </div>
                      </div>
                      <div class="uk-width-1-3@s">
                        <label class="uk-form-label" for="form-stacked-text">Nota</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="number" name="customer['']">
                        </div>
                      </div>
                      <div id="actions" class="cadastrar">
                        <button type="submit" class="uk-button uk-button-primary">Adicionar Avaliação</button>
                        <a href="index.php" class="uk-button uk-button-danger">Limpar</a>
                      </div>
                      <table class="uk-table uk-table-hover uk-table-divider">
                        <thead>
                          <tr>
                        		<th>Avaliador(a)</th>
                        		<th>Nota</th>
                        	</tr>
                        </thead>
                        <tbody>
                        	<tr>
                        		<td><?php echo $customer['']; ?>Ivan Machado</td>
                        		<td><?php echo $customer['']; ?>10,0</td>
                        	</tr>
                        	<tr>
                        		<td colspan="6">Nenhum registro encontrado.</td>
                        	</tr>
                        </tbody>
                      </table>
                      <div id="actions" class="cadastrar">
                        <button type="submit" class="uk-button uk-button-primary">Qualificar</button>
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
