<?php
if( isset($_POST['nome']) && empty($_POST['nome'])){ //se estiver vazio (isset retorna true or false)
    echo "Preencha o nome completo";
}

if( isset($_POST['cpf']) && empty($_POST['cpf'])){ 
    echo "Preencha o nome completo";
}

if( isset($_POST['cpf']) && !is_numeric($_POST['cpf'])){ //se estiver vazio ou se não for numero
    echo "Apenas números no CPF<br>";
}

?>

<form method ="POST" action="">
    <label>
        Nome completo: <input type ="text" name="nome">
    </label>
    <label>
        CPF: <input type ="text" name="cpf">
    </label>
    <input type="submit" value="cadastrar">
</form>

