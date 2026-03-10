<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECEBE DADOS</title>
</head>
<body>
    <?php
       // $nome= $_POST['nome'];
        $nome= htmlspecialchars($_POST['nome']);
        $email= $_POST['email'];
        $idade= $_POST['idade'];
    ?>

    <p>O nome é: <?php echo $nome ?></p>
    <p>O email é: <?php echo $email ?></p>
    <p>O idade é: <?php echo $idade ?></p>

    <?php
        $ano_atual= date('Y'); // função para pegar o ano atual, mas pode pegar mês ('m'), dia ('dia') ...
        echo "<p> $ano_atual</p>";

        $ano_usu= $ano_atual - $idade;

        echo "Aah então você nasceu no ano de ".$ano_usu;
       "<br>";
        if ($idade >= 18) {
            echo"<p style= 'color:blue'>maior de idade</p>";
        } else {
            echo"<p style= 'color:red'>menor de idade</p>";
        }
        
    ?>
</body>
</html> 