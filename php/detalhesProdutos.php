	<div class="row">
		<h1>Detalhes do produto</h1>
	</div>
			   
	<div class="row">
		<div class="col-md-4">
			<?php
				$idProduto = $_POST['idProduto'];
						  
				$detalhes[1] = "Detalhes das cadeiras";
				$detalhes[2] = "Detalhes do fogão";
				$detalhes[3] = "Detalhes do roteador";
				$detalhes[4] = "Detalhes da TV";

				echo $detalhes[$idProduto];
			?>
		</div>
	</div>