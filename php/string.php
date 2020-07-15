<?php
    $texto = "Olá tudo bem?";
    echo strtolower($texto);
    echo '<br>';
    echo strtoupper($texto);
    echo '<br>';
    echo ucfirst($texto); //apenas a primeira letra maiuscula
    echo '<br>';
    echo 'Esta frase tem: '.strlen($texto).' caracteres';

    $cpf = isset($_POST['cpf']) ? $_POST['cpf']: ''; 

    $stringCPF = strlen($cpf);
    if($stringCPF != 11 && $cpf != ''){
        echo "<br><br>CPF inválido";
    }

    $substituir = "365.659.895-26";
    echo "<br><br>Substituindo caracteres na string: ";
    $cpf = str_replace(".", "", $substituir);
    $cpf = str_replace("-", "", $substituir);
    echo $cpf;

    //        0123456....
    $parte = "Entenda porque seu smartphone esquenta tanto, se voce tem um smartphone.";
    $noticia = substr($parte, 0, 44); // substitui uma parte da frase
    echo '<br><br>'.$noticia.'...';

    echo '<br><br>Data de hoje:';
    echo $data = date("d-m-y H:i");

    $dataInicial= '2020-07-14';
    $dataFinal= '2020-07-15';

    $timeInicial = strtotime($dataInicial);
    $timeFinal = strtotime($dataFinal);

    $diferencaTime =  $timeFinal - $timeInicial;

    $diaSegundos = 24*60*60;
    $diferencaDias = $diferencaTime / $diaSegundos;
    echo '<br>'.$diferencaDias;

?>
<br><br>
<form method="POST" action="">
    <label>CPF: <input type="text" name="cpf"> </label>
    <input type="submit" value="cadastrar">
</form>