<?php
    function validaLogin($login, $senha){

        $loginBD = "debora@gmail.com";
        $senhaBD = "123";

        if($login == $loginBD && $senha == $senhaBD){
            return true;
        }
        return false;
        
    }

?>