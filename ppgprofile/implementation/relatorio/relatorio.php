<?php ini_set('display_errors', 0);
ini_set("allow_url_include", "1");//codigo que permite incluir qualquer pagina, não apena paginas http, paginas locais tambem isso resolve conflitos de 'require' e 'include'
?>

<?php
ob_start();
require_once('../config.php');
require_once(DBAPI);
include "../inc/header.php";
?>
<?php
// Gráfico de Dedicação Exclusiva

$listaDedicacaoExclusiva = array();
$qtdDE = array();
$corDedicacaoExclusiva = array();
$corDedicacaoExclusiva[0] = '#1e90ff';
$corDedicacaoExclusiva[1] = '#2ed573';

$iDedicacaoExclusiva = 0;

$sqlDedicacaoExclusiva = "select count(dedicacao) as qtd, titulo from aluno where dedicacao=1 group  by titulo";
$bd=open_database();
$resultadoDedicacaoExclusiva = mysqli_query($bd, $sqlDedicacaoExclusiva);
while ($rowDedicacaoExclusiva = mysqli_fetch_object($resultadoDedicacaoExclusiva)) {
  $titulo = $rowDedicacaoExclusiva->titulo;
  $qtdDedicacaoExclusiva = $rowDedicacaoExclusiva->qtd;
  $listaDedicacaoExclusiva[$iDedicacaoExclusiva] = $titulo;
  $qtdDE[$iDedicacaoExclusiva] = $qtdDedicacaoExclusiva;
  $iDedicacaoExclusiva = $iDedicacaoExclusiva + 1;
}
 ?>
 <?php
 // Gráfico de Dedicação Parcial

 $listaDedicacaoParcial= array();
 $qtdDP= array();
 $corDedicacaoParcial = array();
 $corDedicacaoParcial[0] = '#1e90ff';
 $corDedicacaoParcial[1] = '#2ed573';

 $iDedicacaoParcial = 0;

 $sqlDedicacaoParcial = "select count(dedicacao) as qtd, titulo from aluno where dedicacao=2 group  by titulo";
 $bd=open_database();
 $resultadoDedicacaoParcial = mysqli_query($bd, $sqlDedicacaoParcial);
 while ($rowDedicacaoParcial = mysqli_fetch_object($resultadoDedicacaoParcial)) {
   $tituloDedicacaoParcial = $rowDedicacaoParcial->titulo;
   $qtdDedicacaoParcial = $rowDedicacaoParcial->qtd;
   $listaDedicacaoParcial[$iDedicacaoParcial] = $tituloDedicacaoParcial;
   $qtdDP[$iDedicacaoParcial] = $qtdDedicacaoParcial;
   $iDedicacaoParcial = $iDedicacaoParcial + 1;
 }
  ?>
  <?php
  // Gráfico de Distribuição de Alunos por Gênero

  $listaGenero= array();
  $qtdGenero= array();

  $iGenero = 0;

  $sqlGenero = "select count(id) as QtdAlunos, genero as Genero from aluno where genero = 'F' group by Genero union select count(id) as QtdAlunos, genero as Genero from aluno where genero = 'M' group by Genero";
  $bdGenero=open_database();
  $resultadoGenero = mysqli_query($bdGenero, $sqlGenero);
  while ($rowGenero = mysqli_fetch_object($resultadoGenero)) {
    $tituloGenero = $rowGenero->Genero;
    $qtdGenero = $rowGenero->QtdAlunos;
    $listaGenero[$iGenero] = $tituloGenero;
    $qtdG[$iGenero] = $qtdGenero;
    $iGenero = $iGenero + 1;
  }
   ?>

	 <?php
   // Gráfico de Distribuição de Alunos por Curso

   $listaAlunoCurso= array();
   $qtdAlunoCurso= array();
   $iAlunoCurso = 0;

   $sqlAlunoCurso = "select count(a.id) as qtdAlunoCurso, c.nome from aluno a inner join curso c where a.idCursoGraduacao = c.id group by c.nome";
   $bdAlunoCurso=open_database();
   $resultadoAlunoCurso = mysqli_query($bdAlunoCurso, $sqlAlunoCurso);
   while ($rowAlunoCurso = mysqli_fetch_object($resultadoAlunoCurso)) {
     $tituloAlunoCurso = $rowAlunoCurso->nome;
     $qtdAlunoCurso = $rowAlunoCurso->qtdAlunoCurso;
     $listaAlunoCurso[$iAlunoCurso] = $tituloAlunoCurso;
     $qtdAC[$iAlunoCurso] = $qtdAlunoCurso;
     $iAlunoCurso = $iAlunoCurso + 1;
   }
    ?>
<div class="uk-container">
  <div class="row">
    <div class="page-head">
			<h2 class="page-head-title uk-heading-bullet">Relatórios</h2>
		</div>
    <div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
          <div class="titulo-grafico">
            <h3 class="uk-heading-bullet">Alunos com dedicação exclusiva</h3>
          </div>
          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
          <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['Título', 'Quantidade de alunos por título', {role: "style"}],
                <?php
                  $k = $iDedicacaoExclusiva;
                  for ($iDedicacaoExclusiva = 0; $iDedicacaoExclusiva < $k; $iDedicacaoExclusiva++) {
                ?>

                ['<?php echo $listaDedicacaoExclusiva[$iDedicacaoExclusiva] ?>', <?php echo $qtdDE[$iDedicacaoExclusiva] ?>, '<?php echo $corDedicacaoExclusiva[$iDedicacaoExclusiva] ?>'],
                <?php } ?>
              ]);
              var options = {
                bar: {groupWidth: "70%"},
                legend: 'none',
              };
              var chart = new google.visualization.ColumnChart(document.getElementById('dedicacao-exclusiva'));
              chart.draw(data, options);
            }
          </script>
          <div class="grafico">
            <div id="dedicacao-exclusiva" style="height: 300px"></div>
            <div class="legenda">
              <span class="mestrado">Mestrado</span>
              <span class="doutorado">Doutorado</span>
            </div>
          </div>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
          <div class="titulo-grafico">
            <h3 class="uk-heading-bullet">Alunos com dedicação parcial</h3>
          </div>
          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
          <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['Título', 'Quantidade de alunos por título', {role: "style"}],
                <?php
                  $x = $iDedicacaoParcial;
                  for ($iDedicacaoParcial= 0; $iDedicacaoParcial < $x; $iDedicacaoParcial++) {
                ?>
                ['<?php echo $listaDedicacaoParcial[$iDedicacaoParcial] ?>', <?php echo $qtdDE[$iDedicacaoParcial] ?>, '<?php echo $corDedicacaoParcial[$iDedicacaoParcial] ?>'],
                <?php } ?>
              ]);
              var options = {
                bar: {groupWidth: "70%"},
                legend: 'none',
              };
              var chart = new google.visualization.ColumnChart(document.getElementById('dedicacao-parcial'));
              chart.draw(data, options);
            }
          </script>
          <div class="grafico">
            <div id="dedicacao-parcial" style="height: 300px"></div>
            <div class="legenda">
              <span class="mestrado">Mestrado</span>
              <span class="doutorado">Doutorado</span>
            </div>
          </div>
        </div>
    </div>
</div>
<div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
  <div>
    <div class="uk-card uk-card-default uk-card-body">
      <div class="titulo-grafico">
        <h3 class="uk-heading-bullet">Distribuição de alunos por gênero</h3>
      </div>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Título', 'Quantidade de alunos por gênero'],
            <?php
              $j = $iGenero;
              for ($iGenero = 0; $iGenero < $j; $iGenero++) {
            ?>
            ['<?php echo $listaGenero[$iGenero] ?>', <?php echo $qtdG[$iGenero] ?>],
            <?php } ?>
          ]);
          var options = {
            bar: {groupWidth: "70%"},
            legend: 'none',
            slices: {
              0: { color: '#1e90ff'},
              1: { color: '#2ed573'}
            }
          };
          var chart = new google.visualization.PieChart(document.getElementById('genero-alunos'));
          chart.draw(data, options);
        }
      </script>
      <div class="grafico">
        <div id="genero-alunos" style="height: 300px"></div>
        <div class="legenda">
          <span class="mestrado">Feminino</span>
          <span class="doutorado">Masculino</span>
        </div>
      </div>
    </div>
  </div>
  <div>
    <div class="uk-card uk-card-default uk-card-body">
			<div class="titulo-grafico">
			<h3 class="uk-heading-bullet">Distribuição de alunos por curso</h3>
		</div>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
			google.charts.load('current', {'packages':['bar']});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart() {
				var data = google.visualization.arrayToDataTable([
					['Título', 'Distribuição de alunos por curso', {role: "style"}],
					<?php
						$a = $iAlunoCurso;
						for ($iAlunoCurso= 0; $iAlunoCurso < $a; $iAlunoCurso++) {
					?>
					['<?php echo $listaAlunoCurso[$iAlunoCurso] ?>', <?php echo $qtdAC[$iAlunoCurso] ?>, '#1e90ff'],
					<?php } ?>
				]);
				var options = {
					bar: {groupWidth: "70%"},
					legend: { position: 'none' },
				};
				var chart = new google.visualization.ColumnChart(document.getElementById('alunos-por-curso'));
				chart.draw(data, options);
			}
		</script>
		<div class="grafico">
			<div id="alunos-por-curso" style="height: 300px"></div>
			<div class="legenda">
				<span class="mestrado">Quantidade de alunos por curso</span>
			</div>
		</div>
	</div>
  </div>
</div>

  </div>
</div>

<?php include "../inc/footer.php";?>
