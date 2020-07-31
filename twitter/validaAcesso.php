<?php

	session_start();

	require_once('db.class.php');

	$usuario = $_POST['usuario'];
	$senha = md5($_POST['senha']);

	$sql = " SELECT id, usuario, email FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' ";

	$objdb = new db();
	$link = $objdb->conectaMySQL();

	$resultado = mysqli_query($link, $sql);

	if($resultado){
		$dadosUsuario = mysqli_fetch_array($resultado);

		if(isset($dadosUsuario['usuario'])){

			$_SESSION['id_usuario'] = $dadosUsuario['id'];
			$_SESSION['usuario'] = $dadosUsuario['usuario'];
			$_SESSION['email'] = $dadosUsuario['email'];
			
			header('Location: home.php');

		} else {
			header('Location: index.php?erro=1');
		}
	} else {
		echo 'Erro na execução da consulta, favor entrar em contato com o admin do site';
	}


	


?>