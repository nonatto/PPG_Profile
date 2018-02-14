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
        <li><span>Editar Aluno</span></li>
      </ul>
      <h2 class="page-head-title uk-heading-bullet">Editar Aluno</h2>
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
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Informações Pessoais</h2>
                </header>
                <form action="edit.php?id=<?php echo $customer['id']; ?>" method="post" class="uk-grid-small" uk-grid>
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
                    <div class="uk-form-label">Sexo</div>
                    <div class="uk-form-controls">
                      <select class="uk-select" id="form-stacked-select" name="customer['genero']" value="<?php echo $customer['genero'];?>">
                        <?php if($customer['genero']=='M') {
                          echo '<option value="M" selected>Masculino</option>';
                          echo '<option value="F">Feminino</option>';
                        }
                        else if($customer['genero']=='F') {
                          echo '<option value="F" selected>Feminino</option>';
                          echo '<option value="M" >Masculino</option>';
                        }
                        ?>
                        
                      </select>
                    </div>
                  </div>
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label" for="form-stacked-text">CPF</label>
                    <div class="uk-form-controls">
                      <input class="uk-input cpf" id="form-stacked-text" type="text" name="customer['cpf']" value="<?php echo $customer['cpf']; ?>">
                    </div>
                  </div>
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label" for="form-stacked-text">Data de Nascimento</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="text" name="customer['dataNascimento']" value="<?php echo $customer['dataNascimento']; ?>">
                    </div>
                  </div>
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label" for="form-stacked-text">Nacionalidade</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="text" name="customer['nacionalidade']" value="<?php echo $customer['nacionalidade']; ?>">
                    </div>
                  </div>
                  <header class="panel_header">
                    <h2 class="title pull-left uk-heading-bullet">Endereço</h2>
                  </header>
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label" for="form-stacked-text">Logradouro</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="text" name="customer['logradouro']" value="<?php echo $customer['logradouro']; ?>">
                    </div>
                  </div>                            
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label" for="form-stacked-text">Numero</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="text" name="customer['numero']" value="<?php echo $customer['numero']; ?>">
                    </div>
                  </div>
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label" for="form-stacked-text">Bairro</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="text" name="customer['bairro']" value="<?php echo $customer['bairro']; ?>">
                    </div>
                  </div>
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label" for="form-stacked-text">Cidade</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="text" name="customer['cidade']" value="<?php echo $customer['cidade']; ?>">
                    </div>
                  </div>
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label" for="form-stacked-text">Estado</label>
                    <div class="uk-form-controls">    

                      <select class="uk-select" id="form-stacked-select" name="customer['estado']" value="<?php echo $customer['estado'];?>">
                        <?php 
                        echo '<option value="AC" ';
                        if($customer['estado']=='AC'){ echo ' selected="selected"';} 
                        echo ">Acre</option>";

                        echo '<option value="AL" ';
                        if($customer['estado']=='AL'){ echo ' selected="selected"';} 
                        echo ">Alagoas</option>";

                        echo '<option value="AP" ';
                        if($customer['estado']=='AP'){ echo ' selected="selected"';} 
                        echo ">Amapá</option>";

                        echo '<option value="AM" ';
                        if($customer['estado']=='AM'){ echo ' selected="selected"';} 
                        echo ">Amazonas</option>";

                        echo '<option value="BA" ';
                        if($customer['estado']=='BA'){ echo ' selected="selected"';} 
                        echo ">Bahia</option>";

                        echo '<option value="CE" ';
                        if($customer['estado']=='CE'){ echo ' selected="selected"';} 
                        echo ">Ceará</option>";

                        echo '<option value="DF" ';
                        if($customer['estado']=='DF'){ echo ' selected="selected"';} 
                        echo ">Distrito Federal</option>";

                        echo '<option value="ES" ';
                        if($customer['estado']=='ES'){ echo ' selected="selected"';} 
                        echo ">Espírito Santo</option>";

                        echo '<option value="GO" ';
                        if($customer['estado']=='GO'){ echo ' selected="selected"';} 
                        echo ">Goiás</option>";

                        echo '<option value="MA" ';
                        if($customer['estado']=='MA'){ echo ' selected="selected"';} 
                        echo ">Maranhão</option>";

                        echo '<option value="MT" ';
                        if($customer['estado']=='MT'){ echo ' selected="selected"';} 
                        echo ">Mato Grosso</option>";

                        echo '<option value="MS" ';
                        if($customer['estado']=='MS'){ echo ' selected="selected"';} 
                        echo ">Mato Grosso do Sul</option>";

                        echo '<option value="MG" ';
                        if($customer['estado']=='MG'){ echo ' selected="selected"';} 
                        echo ">Minas Gerais</option>";

                        echo '<option value="PA" ';
                        if($customer['estado']=='PA'){ echo ' selected="selected"';} 
                        echo ">Pará</option>";

                        echo '<option value="PB" ';
                        if($customer['estado']=='PB'){ echo ' selected="selected"';} 
                        echo ">Paraíba</option>";

                        echo '<option value="PR" ';
                        if($customer['estado']=='PR'){ echo ' selected="selected"';} 
                        echo ">Paraná</option>";

                        echo '<option value="PE" ';
                        if($customer['estado']=='PE'){ echo ' selected="selected"';} 
                        echo ">Pernambuco</option>";

                        echo '<option value="PI" ';
                        if($customer['estado']=='PI'){ echo ' selected="selected"';} 
                        echo ">Piauí</option>";

                        echo '<option value="RJ" ';
                        if($customer['estado']=='RJ'){ echo ' selected="selected"';} 
                        echo ">Rio de Janeiro</option>";

                        echo '<option value="RN" ';
                        if($customer['estado']=='RN'){ echo ' selected="selected"';} 
                        echo ">Rio Grande do Norte</option>";

                        echo '<option value="RS" ';
                        if($customer['estado']=='RS'){ echo ' selected="selected"';} 
                        echo ">Rio Grande do Sul</option>";

                        echo '<option value="RO" ';
                        if($customer['estado']=='RO'){ echo ' selected="selected"';} 
                        echo ">Rondônia</option>";

                        echo '<option value="RR" ';
                        if($customer['estado']=='RR'){ echo ' selected="selected"';} 
                        echo ">Roraima</option>";

                        echo '<option value="SC" ';
                        if($customer['estado']=='SC'){ echo ' selected="selected"';} 
                        echo ">Santa Catarina</option>";

                        echo '<option value="SP" ';
                        if($customer['estado']=='SP'){ echo ' selected="selected"';} 
                        echo ">São Paulo</option>";

                        echo '<option value="SE" ';
                        if($customer['estado']=='SE'){ echo ' selected="selected"';} 
                        echo ">Sergipe</option>";

                        echo '<option value="TO" ';
                        if($customer['estado']=='TO'){ echo ' selected="selected"';} 
                        echo ">Tocantins</option>";

                        ?>
                      </select>
                    </div>
                  </div> 
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label" for="form-stacked-text">CEP</label>
                    <div class="uk-form-controls">
                      <input class="uk-input cep" id="form-stacked-text" type="text" name="customer['cep']" value="<?php echo $customer['cep']; ?>">
                    </div>
                  </div>
                  <header class="panel_header">
                    <h2 class="title pull-left uk-heading-bullet">Informações Sobre a Graduação</h2>
                  </header>
                  <div class="uk-width-1-2@s">
                    <div class="uk-form-label">Curso</div>
                    <div class="uk-form-controls">
                      <select class="uk-select" id="form-stacked-select" name="customer['idCursoGraduacao']" id="id_instituicao">
                        <?php 
                        $sql = "SELECT * FROM curso";
                        $bd=open_database();
                        $resultado = mysqli_query($bd, $sql);
                        while ($dados = mysqli_fetch_assoc($resultado)){
                          $id = $dados['id'];
                          $nome = $dados['nome'];
                          if( $id == $customer['idCursoGraduacao'])
                            echo "<option value='$id' selected>$nome</option>";
                          else
                            echo "<option value='$id'>$nome</option>";
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="uk-width-1-2@s">
                    <div class="uk-form-label">Instituição</div>
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
                    <label class="uk-form-label" for="form-stacked-text">CR</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="number" name="customer['crGraduacao']" value="<?php echo $customer['crGraduacao']; ?>">
                    </div>
                  </div>
                  <div class="uk-width-1-2@s">
                    <label class="uk-form-label" for="form-stacked-text">Ano de Conclusão</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="number" name="customer['anoConclusaoGraduacao']" value="<?php echo $customer['anoConclusaoGraduacao']; ?>">
                    </div>
                  </div>                     
                  <header class="panel_header">
                    <h2 class="title pull-left uk-heading-bullet">Informações Sobre a Pós-Graduação</h2>
                  </header>
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label" for="form-stacked-text">Curso</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="text" name="customer['cursoPosGraducao']" value="<?php echo $customer['cursoPosGraducao']; ?>">
                    </div>
                  </div>
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label" for="form-stacked-text">Área de Conhecimento</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="text" name="customer['areaConhecimento']" value="<?php echo $customer['areaConhecimento']; ?>">
                    </div>
                  </div>
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label" for="form-stacked-text">CR</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="text" name="customer['cr']" value="<?php echo $customer['cr']; ?>">
                    </div>
                  </div>
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label" for="form-stacked-text">Semestre de Ingresso</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="text" name="customer['semestreIngresso']" value="<?php echo $customer['semestreIngresso']; ?>">
                    </div>
                  </div>
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label" for="form-stacked-text">Dedicação</label>
                    <div class="uk-form-controls">
                      <select class="uk-select" id="form-stacked-select" name="customer['dedicacao']" value="">
                        <?php if($customer['dedicacao'] == 1){ 
                          echo '<option value="'.$customer['dedicacao'].'">Exclusiva</option>'; 
                          echo '<option value="2">Parcial</option>'; } 
                          else{ echo '<option value="'.$customer['dedicacao'].'">Parcial</option>'; 
                          echo '<option value="1">Exclusiva</option>'; } ?>
                        </select>
                      </div>
                    </div>
                    <div class="uk-width-1-3@s">
                      <div class="uk-form-label">Título</div>
                      <div class="uk-form-controls">
                       <select class="uk-select" id="form-stacked-select" name="customer['titulo']" value="">
                        <?php if($customer['titulo'] == 1){ 
                          echo '<option value="'.$customer['titulo'].'">Mestrado</option>'; 
                          echo '<option value="2">Doutorado</option>'; } 
                          else{ echo '<option value="'.$customer['titulo'].'">Doutorado</option>'; 
                          echo '<option value="1">Mestrado</option>'; } ?>
                        </select>
                      </div>
                    </div>
                    <div class="uk-width-1-2@s">
                      <div class="uk-form-label">Orientador</div>
                      <div class="uk-form-controls">
                        <select class="uk-select" id="form-stacked-select" name="customer['idOrientador']" id="id_instituicao">
                          <?php 
                          $sql = "SELECT * FROM professor";
                          $bd=open_database();
                          $resultado = mysqli_query($bd, $sql);
                          while ($dados = mysqli_fetch_assoc($resultado)){
                            $id = $dados['id'];
                            $nome = $dados['nome'];
                            if( $id == $customer['idOrientador'])
                              echo "<option value='$id' selected>$nome</option>";
                            else
                              echo "<option value='$id'>$nome</option>";
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="uk-width-1-2@s">
                      <label class="uk-form-label" for="form-stacked-text">Co-Orientador</label>
                      <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="text" name="customer['coOrientador']" value="<?php echo $customer['coOrientador']; ?>">
                      </div>
                    </div>
                    <header class="panel_header">
                      <h2 class="title pull-left uk-heading-bullet">Informações Sobre a Defesa</h2>
                    </header>
                    <div class="uk-width-1-3@s">
                      <label class="uk-form-label" for="form-stacked-text">Data da Defesa</label>
                      <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="date" name="customer['dataDefesa']" value="<?php echo $customer['dataDefesa']; ?>">
                      </div>
                    </div>
                    <div class="uk-width-1-3@s">
                      <label class="uk-form-label" for="form-stacked-text">Aprovação</label>
                      <div class="uk-form-controls">
                        <select class="uk-select" id="form-stacked-select" name="customer['aprovacao']" value="">
                          <?php if($customer['aprovacao'] == 1){ 
                            echo '<option value="'.$customer['dedicacao'].'">Aprovado</option>'; 
                            echo '<option value="2">Reprovado</option>'; } 
                            else{ echo '<option value="'.$customer['dedicacao'].'">Reprovado</option>'; 
                            echo '<option value="1">Aprovado</option>'; } ?>
                          </select>
                        </div>
                      </div>
                      <div class="uk-width-1-3@s">
                        <label class="uk-form-label" for="form-stacked-text">Nota</label>
                        <div class="uk-form-controls">
                          <input class="uk-input" id="form-stacked-text" type="number" name="customer['nota']" value="<?php echo $customer['nota']; ?>">
                        </div>
                      </div>
                      <div id="actions" class="cadastrar">
                      <button type="submit" id="aluno-salvar-sucesso" class="uk-button uk-button-primary" data-message="<span uk-icon='icon: check'></span> Dados salvo com sucesso!">Salvar</button>
                        <a href="index.php" class="uk-button uk-button-danger">Cancelar</a>
                      </div>

                      <script>
                        jQuery('#aluno-salvar-sucesso').on('click', function() {
                          UIkit.notification($(this).data());
                        });
                      </script>
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
