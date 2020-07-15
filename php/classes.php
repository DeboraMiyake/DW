<?php
    class Pessoa{
        //atributo
        var $nome;

        //metodos
        function setNome($nomeDefinido){
            $this->nome = $nomeDefinido;
        }

        function getNome(){
            return $this->nome;
        }
    }
    //instanciando uma classe
    $pessoa = new Pessoa();

    //setando valores 
    $pessoa->setNome('Victor');
    echo $pessoa->getNome();
?>