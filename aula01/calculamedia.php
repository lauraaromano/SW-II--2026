<?php
    $nota1 = 8;
    $nota2 = 7;
    $nota3 = 9;

    $media = ($nota1 + $nota2 + $nota3) / 3;
    
    $resultado = $media > 6 ? "Aprovado" : "Reprovado";

    echo `Nota é ` .$nota1. "<br>";
    echo `Nota é ` .$nota2. "<br>";
    echo `Nota é ` .$nota3. "<br>";

    echo "Média é ".$media.  "<br>".($resultado ? "Aprovado" : "Reprovado");
?>