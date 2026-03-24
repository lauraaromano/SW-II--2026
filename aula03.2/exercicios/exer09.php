<?php

    function mostrarFatorial($n) {

   

        $resultado = 1;
        $expressao = "";

        for ($i = $n; $i >= 1; $i--) {
            $resultado *= $i;
            

            $expressao .= ($i == 1) ? $i : $i . "x";
        }

        return "Fatorial de $n = $expressao = $resultado";
    }


echo mostrarFatorial(4); 

?>
