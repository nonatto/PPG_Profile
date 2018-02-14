<?php
session_start();
ini_set("allow_url_include", "1");
require_once('config.php');
require_once(DBAPI);

if($_POST['txt_perfil']==1)
{
	
	$sql = "SELECT * FROM professor where email='".$_POST['txt_login']."' and senha=SHA2('".$_POST['txt_senha']."',256)";
	$bd=open_database();
	$resultado = mysqli_query($bd, $sql);
	//exit($sql);
	while ($dados = mysqli_fetch_assoc($resultado)){
		$_SESSION['id'] = $dados['id'];
		$_SESSION['nome'] = $dados['nome'];
		$_SESSION['perfil']='1';//nivel de acesso para professor
		
		
	}
	if(isset($_SESSION['perfil']))// se o login funcionou va  para esta url
		header("location:relatorio/relatorio.php");
	else
		header("location:login.php?msg=dados_incorretos");
	
}

else if($_POST['txt_perfil']==2)
{
	$sql = "SELECT * FROM administrador where email='".$_POST['txt_login']."' and senha=SHA2('".$_POST['txt_senha']."',256)";
	$bd=open_database();
	$resultado = mysqli_query($bd, $sql);
	//exit($sql);
	while ($dados = mysqli_fetch_assoc($resultado)){
		$_SESSION['id'] = $dados['id'];
		$_SESSION['nome'] = $dados['nome'];
		$_SESSION['perfil']='2';//nivel de acesso para adm
	
		
	}
	if(isset($_SESSION['perfil']))// se o login funcionou va  para esta url
		header("location:index.php");
	else 
		header("location:login.php?msg=dados_incorretos");

}