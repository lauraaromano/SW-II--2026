<?php
    //FUNÇÃO COM PARAMETROS E COM RETORNO

    function tabuada($num){

    for ($i=1; $i < 11; $i++) { 
        $mult= $i* $num;
        echo "Tabuada do $num é: $mult <br>";
        
    }
        
        
    }
$num= 4;

echo tabuada($num);