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
        <li><span>Editar Curso</span></li>
      </ul>
      <h2 class="page-head-title uk-heading-bullet">Editar Curso</h2>
    </div>
    <div class="uk-grid-medium uk-child-width-expand@s uk-text-left" uk-grid>
      <div>
        <div class="uk-card uk-card-default uk-card-body">
          <section class="box ">
            <div class="content-body">
              <form action="edit.php?id=<?php echo $customer['id']; ?>" method="post" class="uk-grid-small" uk-grid>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Informações do Curso</h2>
                </header>
                <div class="uk-width-1-2@s">
                  <label class="uk-form-label" for="form-stacked-text">Nome</label>
                  <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" type="text" name="customer['nome']" value="<?php echo $customer['nome']; ?>">
                  </div>
                </div>
                <div class="uk-width-1-2@s">
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
                <div class="uk-width-1-2@s">
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
                <div class="uk-width-1-2@s">
                  <label class="uk-form-label" for="form-stacked-text">Campus</label>
                  <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" type="text" name="customer['campus']" value="<?php echo $customer['campus']; ?>">
                  </div>
                </div>
                <div class="uk-width-1-3@s">
                  <label class="uk-form-label" for="form-stacked-text">Conceito no MEC</label>
                  <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" type="number" name="customer['conceitoMec']" value="<?php echo $customer['conceitoMec']; ?>">
                  </div>
                </div>
                <div class="uk-width-1-3@s">
                  <label class="uk-form-label" for="form-stacked-select">Turno</label>
                  <div class="uk-form-controls">
                    <select class="uk-select" id="form-stacked-select" name="customer['turno']">
                    

                      <?php
                        //exit($customer['turno']."aqui jjjkkkkkkkk");

                        if($customer['turno']=='M'){
                            echo ' <option value="M" selected>Matutino</option>';
                            echo '<option value="V">Vespertino</option>';
                            echo '<option value="N">Noturno</option>';
                          }
                        else if($customer['turno']=='V'){
                            echo ' <option value="M">Matutino</option>';
                            echo '<option value="V" selected>Vespertino</option>';
                            echo '<option value="N">Noturno</option>';
                          }
                        else if($customer['turno']=='N'){
                            echo '<option value="N" selected>Noturno</option>';
                           echo ' <option value="M">Matutino</option>';
                           echo '<option value="V">Vespertino</option>';
                         }
                      ?>
                     
                      
                      
                    </select>
                  </div>
                </div>
                <div class="uk-width-1-3@s">
                  <label class="uk-form-label" for="form-stacked-text">Ano de Criação</label>
                  <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" type="number" name="customer['anoCriacao']" value="<?php echo $customer['anoCriacao']; ?>">
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
