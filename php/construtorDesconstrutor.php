<?php
//metodos magicos Construct e Destruct
Class Pessoa{

    private $nome;
    public function correr(){
        echo $this->nome ." correndo<br>";
    }

    function __construct($parametroNome){
        $this->nome = $parametroNome;
    }

    function __desconstruct($){
        echo "Objeto removido<br>";
    }
}
    $pessoa = new Pessoa('Debora');
    $pessoa->correr();
?>