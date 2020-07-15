<?php
class Veiculo{
    /*Encapsulamento
    public, private, protected */

    //funcionam como var, criam as variaveis definindo seu tipo
    private $placa;
    private $cor;
    protected $tipo='moto';

    //encapsulando o atributo placa para poder configurar
    public function setPlaca($parametroPlaca){
        //Validação da placa
        
        $this->placa = $parametroPlaca;
    }

    public function getPlaca(){
        return $this->placa;
    }
}

class Carro extends Veiculo{
    public function exibirTipo(){ 
        echo $this->tipo;
    }
}

$carro = new Carro();
$carro->exibirTipo();

echo '<br>';
$veiculo = new Veiculo();

$veiculo->setPlaca = "DEB1999";
echo $veiculo->getPlaca = "DEB1999";


?>