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
        <li><span>Visualizar Aluno</span></li>
      </ul>
      <h2 class="page-head-title uk-heading-bullet">Visualizar Aluno</h2>
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
                  <h2 class="title pull-left uk-heading-bullet">Nome: <?php echo $customer['nome']; ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Sobrenome: <?php echo $customer['sobrenome']; ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Gênero: <?php echo ($customer['genero'] == 1) ? "Masculino" : "Feminino" ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">CPF: <?php echo $customer['cpf']; ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Data de Nascimento: <?php echo $customer['dataNascimento']; ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Nacionalidade: <?php echo $customer['nacionalidade']; ?></h2>
                </header>   
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Logradouro: <?php echo $customer['logradouro']; ?></h2>
                </header>     
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Número: <?php echo $customer['numero']; ?></h2>
                </header>      
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Bairro: <?php echo $customer['bairro']; ?></h2>
                </header>    
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Cidade: <?php echo $customer['cidade']; ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Estado: <?php echo $customer['estado']; ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">CEP: <?php echo $customer['cep']; ?></h2>
                </header>
                <header class="panel_header">
                 <h2 class="title pull-left uk-heading-bullet">Curso da Graduação: <?php $idDaInstituicao = $customer['idCursoGraduacao']; 
                  $sql = "SELECT nome FROM curso where id=".$customer['idCursoGraduacao'];
                  $bd=open_database();
                  $resultado = mysqli_query($bd, $sql);
                  while ($dados = mysqli_fetch_assoc($resultado)){

                    echo $dados['nome'];
                  }

                  ?></h2>
                </header>
                <header class="panel_header">
                 <h2 class="title pull-left uk-heading-bullet">Instituição: <?php $idDaInstituicao = $customer['idInstituicao']; 
                  $sql = "SELECT nome FROM instituicao where id=".$customer['idInstituicao'];
                  $bd=open_database();
                  $resultado = mysqli_query($bd, $sql);
                  while ($dados = mysqli_fetch_assoc($resultado)){

                    echo $dados['nome'];
                  }

                  ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">CR da Graduação: <?php echo $customer['crGraduacao']; ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Ano de Conclusão: <?php echo $customer['anoConclusaoGraduacao']; ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Curso da Pós Graduação: <?php echo $customer['cursoPosGraducao']; ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Área de Conhecimento: <?php echo $customer['areaConhecimento']; ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">CR da Pós Graduação: <?php echo $customer['cr']; ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Semestre de Ingresso: <?php echo $customer['semestreIngresso']; ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Dedicação: <?php echo ($customer['dedicacao'] == 1) ? "Exclusiva" : "Parcial" ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Título: <?php echo ($customer['titulo'] == 1) ? "Mestrado" : "Doutorado" ?></h2>
                </header>
                <header class="panel_header">
                 <h2 class="title pull-left uk-heading-bullet">Orientador: <?php $idDaInstituicao = $customer['idOrientador']; 
                  $sql = "SELECT nome FROM professor where id=".$customer['idOrientador'];
                  $bd=open_database();
                  $resultado = mysqli_query($bd, $sql);
                  while ($dados = mysqli_fetch_assoc($resultado)){

                    echo $dados['nome'];
                  }

                  ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Co-Orientador: <?php echo $customer['coOrientador']; ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Data da Defesa: <?php echo $customer['dataDefesa']; ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Aprovação: <?php echo ($customer['aprovacao'] == 1) ? "Aprovado" : "Reprovado" ?></h2>
                </header>
                <header class="panel_header">
                <h2 class="title pull-left uk-heading-bullet">Nota: <?php echo $customer['nota']; ?></h2>
                </header>
                <a href="edit.php?id=<?php echo $customer['id']; ?>" title="Editar">
                  <button class="uk-button uk-button-primary">Editar</button>
                </a>
                <a href="delete.php?id=<?php echo $customer['id']; ?>" class="uk-button uk-button-danger" uk-toggle="target: #modal-example" title="Excluir">Excluir</a>
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
<?php include "../inc/footer.php";?>
