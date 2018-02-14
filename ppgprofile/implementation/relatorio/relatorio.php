<?php ini_set('display_errors', 0);
ini_set("allow_url_include", "1");//codigo que permite incluir qualquer pagina, não apena paginas http, paginas locais tambem isso resolve conflitos de 'require' e 'include'
?>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<?php 
ob_start();
require_once('../config.php');
require_once(DBAPI);
include "../inc/header.php";

?>
<!-- Seção de Conteúdo -->
<div class="uk-container">
	<div class="row">
		<div class="page-head">
			<h2 class="page-head-title uk-heading-bullet">Relatórios</h2>
		</div>
		<div class="uk-grid-medium uk-child-width-expand@s uk-text-left" uk-grid>
			<div>
				<div class="uk-card uk-card-default uk-card-body">
					<section class="box ">
						<div class="content-body">
							<div class="row">
								<?php 

$sql = "select count(dedicacao) as qtd, titulo from aluno where dedicacao=1 group  by titulo";
$bd=open_database();
$resultado = mysqli_query($bd, $sql);


echo '
<div id="container2" style="min-width: 210px; height: 400px; margin: 0 auto"></div>
<table id="datatable" style="visibility: hidden;">
	<thead>
		<tr>
			<th></th>
			<th>Doutorado</th>
			<th>Mestrado</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>Gráfico baseado no total de alunos da institui&ccedil;&atilde;o cadastrados no sistema</th>';


			WHILE($objtc=mysqli_fetch_assoc($resultado)){
            	//exit($objtc['totalAlunos'].'aqui');
				echo '<td>'.$objtc['qtd'].'</td>' ;
				//echo '<td>'.$objtc['totalVotou'].'</td>' ;
			}
			
			echo '</tr>
		</tbody>
	</table>';

	echo "<script>";
	echo "Highcharts.chart('container2', {";
	echo "data: {";
	echo "table: 'datatable'";
	echo "},";
	echo "chart: {";
	echo "type: 'column'";
	echo "},";
	echo "title: {";
	echo "text: 'Total de alunos com dedicação exclusiva'";
	echo "},";
	echo "yAxis: {";
	echo "allowDecimals: false,";
	echo "title: {";
	echo "text: 'Numero de Alunos'";
	echo "}";
	echo "},";
	echo "tooltip: {";
	echo "formatter: function () {";
	echo " return '<b>' + this.series.name + '</b><br/>' +";
	echo "this.point.y + ' ' + this.point.name.toLowerCase();";
	echo " }";
	echo " }";
	echo "});";
	echo "</script>";
	?>
							</div>
						</div>
					</section>
				</div>

			</div>
		</div>
	</div>
</div>






