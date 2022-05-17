<?php
	
	session_start();
	date_default_timezone_set('America/Sao_Paulo');
	require('vendor/autoload.php');

	define('INCLUDE_PATH_STATIC','http://localhost/Projetos_Estudos/02-Cursos_danki/02-CursoDesenvolvimentoWEBCompleto2.0/Projeto-Pratico-Rede_Social/DankiCode/Views/pages/');
	define('INCLUDE_PATH','http://localhost/Projetos_Estudos/02-Cursos_danki/02-CursoDesenvolvimentoWEBCompleto2.0/Projeto-Pratico-Rede_Social/');
	$app = new DankiCode\Application();

	$app->run();

?>