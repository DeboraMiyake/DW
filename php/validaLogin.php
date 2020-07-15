<?php
require_once ("functionValidaLogin.php");
$loginUsuario = $_POST['login'];
$senhaUsuario = $_POST['senha'];

$usuarioValidado = validaLogin($loginUsuario, $senhaUsuario);

if($usuarioValidado){
    echo "Acesso liberado";
}else{
    echo "Acesso negado";
}

?>