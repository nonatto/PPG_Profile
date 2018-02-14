</main> <!-- /container -->

<!-- Footer -->
<footer>
  <div class="uk-container">
    <p>© 2017 PPG Profile UFBA | Todos os Direitos Reservados.</p>
  </div>
</footer>
<!-- Menu Responsivo Modal -->
<div id="tm-mobile" class="uk-modal-full uk-modal" uk-modal="">
  <div class="uk-modal-dialog uk-modal-body uk-text-center uk-flex" uk-height-viewport="" style="box-sizing: border-box; min-height: 100vh; height: 100vh;">
    <button class="uk-modal-close-full uk-close uk-icon" type="button" uk-close=""></button>
    <div class="uk-margin-auto-vertical uk-width-1-1">
      <div class="uk-child-width-1-1 uk-grid uk-grid-stack" uk-grid="">
        <div class="uk-first-column">
          <div class="uk-panel">
            <ul class="uk-nav uk-nav-primary uk-nav-center">
              <li><a href="index.php">Visão Geral</a></li>
              <li class="#"><a href="#">Cadastrar</a>
                <ul class="uk-nav-sub">
                  <li><a href="<?php echo BASEURL; ?>instituicao/add.php">Instituição</a></li>
                  <li><a href="<?php echo BASEURL; ?>departamento/add.php">Departamento</a></li>
                  <li><a href="<?php echo BASEURL; ?>curso/add.php">Curso</a></li>
                  <li><a href="<?php echo BASEURL; ?>professor/add.php">Professor</a></li>
                  <li><a href="<?php echo BASEURL; ?>aluno/add.php">Aluno</a></li>
                </ul>
              </li>
              <!-- <li><a href="<?php //echo BASEURL; ?>qualificar/add.php">Qualificar Aluno</a></li> -->
              <li><a href="<?php echo BASEURL; ?>relatorio/relatorio.php">Relatório</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
