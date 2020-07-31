<?php
	
	session_start();
 	//exibe a pagina de erro automaticamente ao tentar entrar direto pelo link 
	
	 if(!isset($_SESSION['usuario'])){
		header('Location: index.php?erro=1');
	}
	
	require_once('db.class.php');

	$objdb = new db();
	$link = $objdb->conectaMySQL();

	$id_usuario = $_SESSION['id_usuario'];

	//quantidade de tweets
	$sql = "SELECT COUNT(*) AS qtde_tweets FROM tweet WHERE id_usuario = $id_usuario";
	$resultado = mysqli_query($link, $sql);
	$qtde_tweets = 0;
	if($resultado){
		$registro = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
		$qtde_tweets = $registro['qtde_tweets'];
	}else{
		echo 'Erro ao executar a query!';
	}

	//quantidade de seguidores
	$sql = "SELECT COUNT(*) AS qtde_seguidores FROM seguidores WHERE seguindo_id_usuario = $id_usuario";
	$resultado = mysqli_query($link, $sql);
	$qtde_seguidores = 0;
	if($resultado){
		$registro = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
		$qtde_seguidores = $registro['qtde_seguidores'];
	}else{
		echo 'Erro ao executar a query!';
	}

?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Twitter</title>
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
		<script type="text/javascript">

			$(document).ready( function(){
				$('#btn_procurar_pessoa').click( function(){
					if($('#nome_pessoa').val().length > 0){
						$.ajax({
							url: 'getPessoas.php',
							method: 'post',
							data: $('#form_procurar_pessoas').serialize(),
							success: function(data) {
								$('#pessoas').html(data);

								$('.btn_seguir').click( function(){
									var id_usuario = $(this).data('id_usuario');
									
									$('#btn_seguir_'+id_usuario).hide();
									$('#btn_deixar_seguir_'+id_usuario).show();

									$.ajax({
										url: 'seguir.php',
										method: 'post',
										data: { seguir_id_usuario: id_usuario },
										success: function(data){
											//alert('Registro efetuado com sucesso');
										}
									});

								});
								$('.btn_deixar_seguir').click(function(){
									var id_usuario = $(this).data('id_usuario');

									$('#btn_seguir_'+id_usuario).show();
									$('#btn_deixar_seguir_'+id_usuario).hide();

									$.ajax({
										url: 'deixarSeguir.php',
										method: 'post',
										data: { deixar_seguir_id_usuario: id_usuario },
										success: function(data){
											//alert('Registro removido com sucesso');
										}
									});
								});
							}
						});
					}

				});
			});

		</script>

	</head>

	<body>
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="imagens/icone_twitter.png" />
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="home.php">Home</a></li>
	            <li><a href="sair.php">Sair</a></li>
	          </ul>
	        </div>
	      </div>
	    </nav>


	    <div class="container">
	    	<div class="col-md-3">
	    		<div class="panel panel-default">
	    			<div class="panel-body">
	    				<h4><?= $_SESSION['usuario'] ?></h4>

	    				<hr />
						<div class="col-md-6">
	    					TWEETS <br /> <?= $qtde_tweets ?>
	    				</div>
	    				<div class="col-md-6">
	    					SEGUIDORES <br /> <?= $qtde_seguidores ?>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    	
	    	<div class="col-md-6">
	    		<div class="panel panel-default">
	    			<div class="panel-body">
	    				<form id="form_procurar_pessoas" class="input-group">
	    					<input type="text" id="nome_pessoa" name="nome_pessoa" class="form-control" placeholder="Quem você está procurando?" maxlength="140" />
	    					<span class="input-group-btn">
	    						<button class="btn btn-default" id="btn_procurar_pessoa" type="button">Procurar</button>
	    					</span>
	    				</form>
	    			</div>
	    		</div>

	    		<div id="pessoas" class="list-group"></div>

			</div>
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-body">
						
					</div>
				</div>
			</div>
		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>