<?php
require_once('functions.php');
include_once('../inc/database.php');
add();
?>


<?php 

header("Content-Type: application/json; charset=utf-8"); 
$return = array(); 

$id = $_GET['id'];
$sql = ("SELECT id, nome FROM curso WHERE idInstituicao = $id");
$bd=open_database();
$resultado = mysqli_query($bd, $sql);
while ($dados = mysqli_fetch_assoc($resultado)){
	$id = $dados['id'];
	$nome = $dados['nome'];
	$return[$id] = $nome;

}

echo json_encode($return);

?>


