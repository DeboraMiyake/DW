<?php

function boasVindas($nome='indefinido'){ //indefinido para que nao seja obrigatorio passar um nome
    echo "Bem vindo ao curso de PHP, " .$nome;
}

function calculo($numero1,$numero2){
    return $numero1+$numero2;
}

echo calculo(14,23) .'<br>';
boasVindas('Debora');

?>