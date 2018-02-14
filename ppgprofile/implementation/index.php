<?php 

ini_set("allow_url_include", "1");//coloque isso em todas as paginas que realizam include ou require para evitar q o servidor online rejeite alguma inclusao de arquivo
session_start();//iniciar sessao
error_reporting(false);// para nao da exit() de erros na tela


//todas as paginas que sao de acesso exclusivo do adm
//devem ter este codigo no inicio
if (!isset($_SESSION['id']) || $_SESSION['perfil']!=2)
{
  header("location:login.php");
}

?>
<?php require_once 'config.php'; ?>
<?php include "inc/header.php"; ?>
<?php require_once DBAPI; ?>
<?php $db = open_database(); ?>

<!-- Seção de Conteúdo -->
<div class="uk-container">
  <div class="row">
    <div class="page-head">
      <h2 class="page-head-title uk-heading-bullet">Visão Geral</h2>
    </div>
    <div class="uk-grid-medium uk-child-width-expand@s uk-text-left" uk-grid>
      <div>
        <div class="uk-card uk-card-default uk-card-body">
          <section class="box ">
            <div class="content-body">
              <div class="row">
                <header class="panel_header">
                  <a href="<?php echo BASEURL; ?>instituicao"><h2 class="title pull-left uk-heading-bullet">Lista de Instituições</h2></a>
                </header>
                <header class="panel_header">
                  <a href="<?php echo BASEURL; ?>departamento"><h2 class="title pull-left uk-heading-bullet">Lista de Departamentos</h2></a>
                </header>
                <header class="panel_header">
                  <a href="<?php echo BASEURL; ?>curso"><h2 class="title pull-left uk-heading-bullet">Lista de Cursos</h2></a>
                </header>
                <header class="panel_header">
                  <a href="<?php echo BASEURL; ?>professor"><h2 class="title pull-left uk-heading-bullet">Lista de Professores</h2></a>
                </header>
                <header class="panel_header">
                  <a href="<?php echo BASEURL; ?>aluno"><h2 class="title pull-left uk-heading-bullet">Lista de Alunos</h2></a>
                </header>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include "inc/footer.php";?>
