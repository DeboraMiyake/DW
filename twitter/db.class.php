<?php

class db {
	private $host = 'localhost';
	private $usuario = 'root';
	private $senha = '';
    private $database = 'twitter';
    
	public function conectaMySQL(){
		//criar a conexão
		$conbd = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
		
		//Ajustar o charset de comunicação entre a aplicação e o banco de dados
		mysqli_set_charset($conbd, 'utf8');
		
		//verificar se houve erro de conexão
		if(mysqli_connect_errno()){
			echo 'Erro ao tentar se conectar com o BD MySQL: '.mysqli_connect_error();	
		}
		return $conbd;
	}

}

?>