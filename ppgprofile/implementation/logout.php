<?php
//ini_set('display_errors',1);
//require_once("secao.php");
	//INICIALIZANDO A SESS�O
	session_start();

	
	//DESTRUINDO AS VARI�VEIS
	session_destroy();
		header("location:index.php?msg=sessao_encerrada");

	
?>