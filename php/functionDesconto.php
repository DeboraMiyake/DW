<?php
function calculaDesconto($valorInicial, $desconto){
    $valorDesconto = $valorInicial * ($desconto/100);
    $valorFinal = $valorInicial - $valorDesconto;

    return $valorFinal;
}

?>