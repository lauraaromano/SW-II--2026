<?php
    echo "Olá mundo!";

    $nome = "Anderson";
    $idade = 25;
    $preco = 10.50;
    $ativo = true;

    echo "Nome: ".$nome. "<br>";
    echo "Idade: ".$idade. "<br>";
    echo "Preco: ".$preco. "<br>";
    echo "Status: ".($ativo ? "Ativo" : "Inativo");
?>