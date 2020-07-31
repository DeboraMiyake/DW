<?php

	require_once('db.class.php');

	$sql = " SELECT * FROM usuarios where id = 7 ";

	$objdb = new db();
	$link = $objdb->conectaMySQL();

	$resultado = mysqli_query($link, $sql);  

	if($resultado){
		$dadosUsuario = array();

		while($linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
			$dadosUsuario[] = $linha;
		}

		foreach($dadosUsuario as $usuario){
			echo $usuario['email'];
			echo '<br /><br />';
		}

	} else {
		echo 'Erro na execução da consulta, favor entrar em contato com o admin do site';
	}

?>