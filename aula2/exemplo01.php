<?php
    $a= 10;
    $b = 5;

    $soma= $a + $b;

    echo "A soma é:" . $soma; 
    echo"<br>";

    echo "A variável a é:";
     var_dump($a);

     echo"<br>";
     echo "A variável b é:";
     var_dump($b);

     echo "<hr>";

     if($a == $b){
        echo"As duas variáveis são iguais";
        
     } else{
        echo"As suas variáveis são diferentes";
     }

     echo"<hr>";

     $nota1 = 4;
     $nota2 = 5;
     $nota3= 6;

     $media= ($nota1+ $nota2 + $nota3)/3;

     if($media >5){
        echo"APROVADO";
     } else {
        if ($media<4) {
            echo"REPROVADO com média ". $media;
        }else{
            echo "RECUPERAÇÃO com média ". $media;
        }
     }

     echo"<hr>";

     $dia = 4;
     switch ($dia) {
        case 1:
            echo"domingo";
            break;
        case 2:
            echo"segunda";
            break;
        case 3:
            echo"terça";
            break;
        case 4:
                echo"quarta";
                break;
        
        
        default:
            echo"número inválido";
            break;
     }

     echo"<hr>";


     //laços de repetição
     //contador de 1 a 10

     for ($i=1; $i < 11; $i++) { 
        echo"$i  - "; 
     }

     echo"<hr>";
     $a= 1;
     while ($a <= 10) {
        echo"$a - ";
        $a++; 
     }

     echo"<hr>";
     $b= 1;
     do{
        echo"$b - ";
        $b++;
     }while($b <= 10);

     echo"<hr>";

     $nomes= ['Fulano','Ciclano','Beltrano'];
     //echo"$nomes";
     

     foreach ($nomes as $nome) {
        echo "O nome é: $nome <br>";

     }

     foreach ($nomes as $key => $value) {
        echo"$keys <br>";
     }
     
?>