<?php
require_once("functionDesconto.php");

$valorInicial = 800;
$desconto = 10;

$valorFinal = calculaDesconto($valorInicial, $desconto); 

?>

Valor Total: R$ <?php echo $valorInicial?> <br>
Valor Desconto: <?php echo $desconto?>% <br>
Valot Total com Desconto: <?php echo $valorFinal?>
