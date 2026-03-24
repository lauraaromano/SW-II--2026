<?php
    //FUNÇÃO COM PARAMETROS E COM RETORNO

    function parouimpar($num){
        
        if ($num % 2 == 0){
            echo"Esse numero é par";
        }else{
            echo"Esse numero é impar";
        }
        
        
    }
$num= 4;

echo parouimpar($num);