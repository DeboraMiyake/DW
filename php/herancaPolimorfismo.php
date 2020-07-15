<?php
//classe mão ou super classe
class Felino{
    //atributo
    var $mamifero = 'sim';

    //metodo
    function correr(){
        echo 'Correr como felino';
    }
}

//Classe filha ou subclasse
class Chita extends Felino{ //herda os atributos e metodos da classe Felino
   
    //Polimorfismo
    function correr(){
        echo 'Correr como chita 100km/h';
    }
}

class Gato extends Felino{ //herda os atributos e metodos da classe Felino
}

$chita = new Chita();//faz referencia ao objeto 

echo $chita->mamifero . '<br>'; //chama o atributo da classe 
$chita->correr(); //chama o metodo correr da classe


?>