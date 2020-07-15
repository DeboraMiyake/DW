<?php
$array = array('mac', 'linux', 'windows');
    //$retorno = is_array($array); //testa se é um array e retorna true ou false
    $retorno = in_array('solaris', $array); //testa se o elemento está dentro do array
if($retorno){
    echo "Verdadeiro";
}else{
    echo "Falso";
}
    echo '<br>';

$frutas = array(0=>'Melancia', 1=>'Amora', 2=> 'Morango');
    /* coloca o array na ordem alfabetica trocando os numeros dos elementos
    sort($frutas); 
    var_export($frutas);
    */

    /* coloca o array na ordem alfabetica mantendo os numeros dos elementos
    echo '<br>';
    asort($frutas);
    var_export($frutas);
    */

$a1 = array('macaco', 'girafa');
$a2 = array('leao');

$novoArray = array_merge($a1, $a2);
var_export($novoArray);

$string = "20/10/2020";
$retorno = explode("/", $string); //quebra o texto em partes e adiciona em um array
echo '<br>';
var_export($retorno);

$novaString = implode("/", $retorno);
echo '<br>'.$novaString;
?>