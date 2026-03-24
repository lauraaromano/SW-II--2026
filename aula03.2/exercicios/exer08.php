<?php


function numeros() {
    

    $lista = [];

    for ($i = 0; $i < 10; $i++) {

        $lista[] = rand(1, 100);
    }


    return $lista;
}

$meusNumeros = numeros();



foreach ($meusNumeros as $numero) {
    echo "Número: $numero <br>";
}

?>