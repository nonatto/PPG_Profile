<?php
//ini_set('display_errors',1);
//require_once("secao.php");
	//INICIALIZANDO A SESSÃO
	session_start();

	
	//DESTRUINDO AS VARIÁVEIS
	session_destroy();
		header("location:index.php?msg=sessao_encerrada");

	
?>