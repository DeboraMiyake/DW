<?php
	require_once('db.class.php');

	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);

	$objdb = new db();
	$link = $objdb->conectaMySQL();

	$usuarioExiste = false;
	$emailExiste = false;

	//verificar se o usuário já existe
	$sql = " select * from usuarios where usuario = '$usuario' ";
	if($resultado = mysqli_query($link, $sql)) {

		$dadosUsuario = mysqli_fetch_array($resultado);

		if(isset($dadosUsuario['usuario'])){
			$usuarioExiste = true;
		}
	} else {
		echo 'Erro ao tentar localizar o registro de usuário';
	}

	//verificar se o e-mail já existe
	$sql = " select * from usuarios where email = '$email' ";
	if($resultado = mysqli_query($link, $sql)) {

		$dadosUsuario = mysqli_fetch_array($resultado);

		if(isset($dadosUsuario['email'])){
			$emailExiste = true;
		} 
	} else {
		echo 'Erro ao tentar localizar o registro de email';
	}


	if($usuarioExiste || $emailExiste){

		$retornoGet = '';

		if($usuarioExiste){
			$retornoGet.= "erroUsuario=1&";
		}

		if($emailExiste){
			$retornoGet.= "erroEmail=1&";
		}

		header('Location: inscrevase.php?'.$retornoGet);
		die();
	}

	$sql = " insert into usuarios(usuario, email, senha) values ('$usuario', '$email', '$senha') ";

	if(mysqli_query($link, $sql)){
		echo 'Usuário registrado com sucesso!';
	} else {
		echo 'Erro ao registrar o usuário!';
	}


?>