<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Mensagens divertidas</title>
	</head>

	<body>
		<?php echo 'Tag padrão <br>'; ?>
		<?='Tag impressão<br>'?>
		<? echo 'Tag curta<br>'?>

		<?php
			$valorInteiro = 1*4; //int
			$valorFracionado = 10.7; //float
			$estado = true; //bollean

			$texto = "Curso de php - $valorInteiro"; //string
			/*
				'' é apenas lido pelo interpretador
				"" é lido com mais atenção, converte a variavel exemplo:
					$texto = 'Curso de php - $valorInteiro'; retornaria esse texto corrido
					$texto = "Curso de php - $valorInteiro"; retorna o valor armazenado dentro da variavel
			*/
			
			echo $texto;
			echo '<br><br>';

			$animais[1] = "gato";
			$animais[2] = "cachorro";
			$animais[3] = "leao";
			$animais[4] = "trig";
			$animais[5] = "girafa";

			var_dump($animais); //função que recebe o array pro parametro e faz a impressao 
			echo "<br>";
			echo $animais[5];

			/*
			$tabuleiro[8]['a'] = "torre preta";
			$tabuleiro[8]['b'] = "bispo preta";
			$tabuleiro[8]['c'] = "cavalo preta";
			$tabuleiro[8]['d'] = "rainha preta";
			$tabuleiro[8]['e'] = "rei preta";
			$tabuleiro[8]['f'] = "bispo preta";
			$tabuleiro[8]['g'] = "cavalo preta";
			$tabuleiro[8]['h'] = "torre preta";

			$tabuleiro[7]['a'] = "peão preto";
			$tabuleiro[7]['b'] = "peão preto";
			$tabuleiro[7]['c'] = "peão preto";
			$tabuleiro[7]['d'] = "peão preto";
			$tabuleiro[7]['e'] = "peão preto";
			$tabuleiro[7]['f'] = "peão preto";
			$tabuleiro[7]['g'] = "peão preto";
			$tabuleiro[7]['h'] = "peão preto";
			*/
		?>
	</body>
</html>